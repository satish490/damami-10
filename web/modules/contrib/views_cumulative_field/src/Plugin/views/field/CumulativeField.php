<?php

namespace Drupal\views_cumulative_field\Plugin\views\field;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\field\NumericField;
use Drupal\views\ResultRow;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * @file
 * Defines Drupal\views_cumulative_field\Plugin\views\field\CumulativeField.
 */

/**
 * Field handler to flag the node type.
 *
 * @ingroup views_field_handlers
 * @ViewsField("field_cumulative_field")
 */
class CumulativeField extends NumericField {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Views Cumulative Field constructor.
   *
   * @param array $configuration
   * @param $plugin_id
   * @param $plugin_definition
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityTypeManager = $entity_type_manager;
  }

  private $counter = 0;

  /**
   * Sets the initial Cumulative Field data at zero.
   */
  public function query() {
    $this->additional_fields['cumulative_field_data'] = 0;
  }

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['data_field'] = ['default' => NULL];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $field_options = $this->displayHandler->getFieldLabels();
    unset($field_options['field_cumulative_field']);
    $form['data_field'] = [
      '#type' => 'radios',
      '#title' => $this->t('Data Field'),
      '#options' => $field_options,
      '#default_value' => $this->options['data_field'],
      '#description' => $this->t('Select the field for which to calculate the cumulative value.'),
      '#weight' => -10,
    ];

    return $form;
  }

  /**
   * Determine the field type we are dealing with.
   *
   * @param $field
   *
   * @return string
   */
  protected function getFieldType($field) {
    $field_handler = $this->displayHandler->getHandler('field', $field)->options ?? NULL;
    if (!empty($field_handler['type'])) {
      $field_type = $field_handler['type'];
    }
    else {
      $field_type = 'undefined';
    }

    return $field_type;
  }

  /**
   * Determine if the field comes from a relationship.
   *
   * @param $field
   *
   * @return mixed
   */
  protected function getFieldRelationship($field) {
    $field_handler = $this->displayHandler->getHandler('field', $field)->options ?? NULL;
    if ($field_handler && !empty($field_handler['relationship']) && $field_handler['relationship'] !== 'none') {
      $relationship = $field_handler['relationship'];
    }
    else {
      $relationship = NULL;
    }

    return $relationship;
  }

  /**
   * Determine if the field is rewritten/altered.
   *
   * @param $field
   *
   * @return mixed
   */
  protected function getRewriteStatus($field) {
    $field_handler = $this->displayHandler->getHandler('field', $field)->options ?? NULL;
    if ($field_handler && $field_handler['alter']['alter_text'] && !empty($field_handler['alter']['text'])) {
      $alter = $field_handler['alter']['text'];
    }
    else {
      $alter = NULL;
    }

    return $alter;
  }

  /**
   * @param $values
   * @param $field
   * @param $relationship
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function getRelationshipEntity($values, $field, $relationship) {
    $relationship_entity = NULL;
    // Get the entity type of the relationship.
    $relationship_entity_type = $this->displayHandler
      ->getHandler('field', $field)->getEntityType();
    $relationship_entities = $values->_relationship_entities;
    // First check the referenced entity.
    if (isset($relationship_entities[$relationship])) {
      // Get the id of the relationship entity.
      $entity_id = $relationship_entities[$relationship]->id();
      // Get the data of the relationship entity.
      $relationship_entity = $this->entityTypeManager
        ->getStorage($relationship_entity_type)
        ->load($entity_id);
    }

    return $relationship_entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getValue(ResultRow $values, $field = NULL) {
    parent::getValue($values, $field);

    // The field selected in the options form.
    $field = $this->options['data_field'];

    // Determine what type of field is being used.
    $field_type = $this->getFieldType($field);

    // If the field is rewritten, get the rewritten text. Else, returns null.
    $rewritten = $this->getRewriteStatus($field);

    // Start $data off at zero.
    $data = 0;

    $is_aggregated = $this->displayHandler->useGroupBy();

    // Process if not undefined.
    if (!$is_aggregated && $field_type !== 'undefined') {

      // Get the value of a field that comes from a relationship.
      $relationship = $this->getFieldRelationship($field);
      if ($relationship) {
        // Use the relationship's entity to fetch the field value.
        $entity = $this->getRelationshipEntity($values, $field, $relationship);
      }
      else {
        // We know this is an entity-based View, so define the base entity.
        $entity = $values->_entity;
      }
      // The next two statements handle fields with or without a relationship.
      if (isset($entity) && $rewritten) {
        // If already numeric, there is no need for advancedRender().
        if (is_numeric($rewritten) == TRUE) {
          $data = $rewritten;
        }
        else {
          $data = current($this->view->field[$field]->advancedRender($values));
        }
      }
      if (isset($entity) && !$rewritten) {
        $field_base = $this->displayHandler->getHandler('field', $field)->field;
        if ($entity->hasField($field_base)) {
          $data = $entity->get($field_base)->getValue()[0]['value'] ?? 0;
        }
        // For Commerce fields.
        if ($field_type === 'commerce_price_default' || $field_type === 'commerce_product_variation') {
          $commerce_field_id = $this->displayHandler->getHandler('field', $field)->options['id'];
          if ($commerce_field_id === 'list_price__number') {
            $data = $entity->get('list_price')->getValue()[0]['number'] ?? 0;
          }
          if ($commerce_field_id === 'price__number') {
            $data = $entity->get('price')->getValue()[0]['number'] ?? 0;
          }
        }
      }
    }
    else {
      $data = $this->view->field[$field]->getValue($values) ?? 0;
      if ($rewritten) {
        $data = current($this->displayHandler->getHandler('field', $field)
          ->advancedRender($values));
      }
    }

    // Add the value of the current with the previous value.
    $this->additional_fields['cumulative_field_data'] = $data
      + $this->additional_fields['cumulative_field_data'];

    // The resulting value.
    $value = $this->additional_fields['cumulative_field_data'];

    return $value;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition,
      $container->get('entity_type.manager')
    );
  }

}
