<?php
return array(
  'label' => array('Galerie', ''),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'standardFields' => array('cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    ### group ###
    'multiSRC_group' => array(
      'label' => array('Galerie ', 'Hier können Sie eine Galerie hinzufügen'),
      'inputType' => 'group',
    ),

    ### gallery ###
    'multiSRC' => array (
      'label' => array(
        'Bilder für Galerie auswählen', ''
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'multiple'=>true,
        'fieldType'=>'checkbox',
        'orderField'=>'orderSRC',
        'files'=>true,
        'mandatory'=>false
      ),
      'sql' => "blob NULL",
      'load_callback' => array (
        array(
          'tl_content',
          'setMultiSrcFlags'),
      ),
    ),
  ),
);