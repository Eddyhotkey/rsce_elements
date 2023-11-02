<?php

return array(
  'label' => array(
    'List: ',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'list' => array(
      'label' => array(
        'de' => array('Liste', 'Hier können Sie ... hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Item %s',
      ),
      'inputType' => 'list',
      'minItems' => 1,
      'maxItems' => 5,

      'fields' => array(

      ),
    ),
  ),
);
