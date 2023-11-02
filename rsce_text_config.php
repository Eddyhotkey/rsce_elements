<?php

return array(
  'label' => array(
    'Text: ',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### tinyMCE ###
    'text_tiyMCE' => array(
      'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
      'eval' => array(
        'rte' => 'tinyMCE',
        'tl_class' => 'clr'
      ),
      'inputType' => 'textarea',
    ),

    ### textarea ###
    'textarea' => array(
      'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
      'eval' => array(
        'tl_class' => 'clr'
      ),
      'inputType' => 'textarea',
    ),

    ### text ###
    'text' => array(
      'label' => array(
        'de' => array('Text', ''),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);