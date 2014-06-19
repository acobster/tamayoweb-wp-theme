<?php

class Website extends CustomPostType {

  protected static $name = 'website';

  protected static $args = array(
    'label'       => 'Websites',
    'description' => "Websites I've built",
    'public'      => true,
    'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', ),
  );

  protected static $meta = array(
    'Info' => array(
      'title' => 'Website info',
      'context' => 'side',
      'fields' => array(
        'url' => array(
          'label' => 'Website URL:',
        ),
        'roles' => array(
          'noLabel' => true,
          'before' => '<hr/><h4>Roles:</h4>',
          'type' => 'textarea',
        ),
      ),
    ),
  );
}