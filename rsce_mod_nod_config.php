<?php
return array(
  'label' => array('Select, Radio, Checkbox', ''),
  'types' => array('content'),
  'contentCategory' => 'Inhalte: Custom',
  'standardFields' => array('cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(

    ### group ###
    'module_group' => array(
      'label' => array('Modul ', ''),
      'inputType' => 'group',
    ),

    'module' => array(
      'label'     => array( 'Modul', 'Bitte wählen Sie das zugehörige Modul aus.' ),
      'inputType' => 'standardField',
      'eval'      =>  array(
        'mandatory' => false,
        'tl_class' => 'w50 clr'
      ),
    ),

    ### group ###
    'nodes_group' => array(
      'label' => array('Nodes ', ''),
      'inputType' => 'group',
    ),

    'nodes' => array(
      'label'     => array('Node', 'Bitte wählen Sie das zugehörige Node aus.'),
      'inputType' => 'standardField',
      'eval' => array(
        'fieldType' => 'checkbox',
        'mandatory' => false,
      ),
    ),
  ),
);