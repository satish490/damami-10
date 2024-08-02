<?php

namespace Drupal\custom_login\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Custom Login Controller.
 */
class CustomLoginController extends ControllerBase {

  /**
   * Renders the login form for /custom-login-1.
   */
  public function loginForm1(Request $request) {
    // Render the user login form.
    $form = $this->formBuilder()->getForm('Drupal\user\Form\UserLoginForm');

    return [
      '#title' => $this->t('Custom Login 1'),
      'form' => $form,
    ];
  }

  /**
   * Renders the login form for /custom-login-2.
   */
  public function loginForm2(Request $request) {
    // Render the user login form.
    $form = $this->formBuilder()->getForm('Drupal\user\Form\UserLoginForm');

    return [
      '#title' => $this->t('Custom Login 2'),
      'form' => $form,
    ];
  }
}
