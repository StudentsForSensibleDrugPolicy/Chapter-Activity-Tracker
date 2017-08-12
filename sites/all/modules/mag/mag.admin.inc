<?php
/**
 * @file
 * mobile_app_generator.admin.inc
 */

function mag_settings_form($form, &$form_state) {
  $form = array();

  $form['mag_export_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path for generated files'),
    '#description' => t('Path where generated files are stored. This can include a file scheme, e.g. public://mobile or s3://mobile.'),
    '#default_value' => variable_get('mag_export_path', 'public://mobile_app'),
    '#size' => 60,
    '#required' => TRUE,
  );

  $form['mag_files']['mag_erase_app'] = array(
    '#type' => 'checkbox',
    '#title' => t('Erase the path before generating mobile app'),
    '#default_value' => variable_get('mag_erase_app', FALSE),
    '#description' => "Erases the export path before exporting the files. Ensures no extra files are leftover from previous runs.",
  );

  $form['mag_regexp'] = array(
    '#type' => 'textfield',
    '#title' => t('Regexp for saving directories'),
    '#description' => t('Regexp used for scanning module directories for files to export.'),
    '#default_value' => variable_get('mag_regexp', '/^.*\.(jpg|png|gif|js|css)/'),
    '#size' => 60,
    '#required' => TRUE,
  );

  $form['mag_export_menu'] = array(
    '#type' => 'select',
    '#title' => t('Menu to export'),
    '#description' => t('The menu used for exporting the nodes.'),
    '#options' => menu_get_menus(TRUE),
    '#required' => TRUE,
    '#default_value' => variable_get('mag_export_menu', 'main-menu'),
  );

  $themes = array('default' => t('Default'));
  $options = list_themes();
  foreach ($options as $name => $attr) {
    if ($attr->status) {
      $themes[$name] = $attr->info['name'];
    }
  }
  $form['mag_mobile_theme'] = array(
    '#type' => 'select',
    '#title' => 'Mobile theme',
    '#description' => t('The theme to use when generating mobile app.'),
    '#options' => $themes,
    '#required' => TRUE,
    '#default_value' => variable_get('mag_mobile_theme', 'default'),
  );

  $form['mag_http_request'] = array(
    '#type' => 'fieldset',
    '#title' => t('MAG Request Settings'),
  );
  //Thank you Devel module:
  $form['mag_http_request']['mag_custom_request_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t('Customize the request url'),
    '#default_value' => variable_get('mag_custom_request_enabled', FALSE),
    '#description' => 'MAG uses the hostname[:port] from the URL to export the mobile app. In some envrionments the web server cannot resolve that hostname[:port]. This section allows you to customize the hostname[:port] of the requests made by MAG while exporting.'
  );

  $form['mag_http_request']['container'] = array(
    '#type' => 'container',
    '#states' => array(
      // Hide the request settings when not enabled.
      'invisible' => array(
        'input[name="mag_custom_request_enabled"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['mag_http_request']['container']['mag_custom_request_hostname'] = array(
    '#type' => 'textfield',
    '#title' => t('Hostname[:port]'),
    '#default_value' => variable_get('mag_custom_request_hostname', 'localhost'),
    '#size' => 30,
    '#field_prefix' => 'http[s]://',
    '#field_suffix' => '/',
    '#description' => t('Port is optional<br/>If Drupal is in a subdirectory, it will be appended automatically.<br/><strong>No trailing slashes</strong><br/><em>ex: localhost:80</em>'),
  );
  $form['mag_http_request']['container']['mag_custom_request_https'] = array(
    '#type' => 'checkbox',
    '#title' => t('https requests stay https requests'),
    '#default_value' => variable_get('mag_custom_request_https', TRUE),
  );

  $form['generate'] = array(
    '#type' => 'submit',
    '#value' => t('Generate Mobile App'),
    '#submit' => array('mag_do_export')
  );

  return system_settings_form($form);
}

function mag_do_export(&$form, &$form_state) {
  $form_state['redirect'] = 'admin/mag/generate';
}
