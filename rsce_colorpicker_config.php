<?php

return array(
  'label' => array(
    'Colorpicker: ',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### colorpicker ###
    'colorpicker' => array(
      'label' => array('Colorpicker', ''),
      'inputType' => 'text',
      'eval' => array(
        'colorpicker' => true,
        'tl_class' => 'wizard w50',
      ),
    ),
  ),
);