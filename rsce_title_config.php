<?php

return array(
  'label' => array(
    'Titel',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### title ###
    'title' => array(
      'label' => array(
        'de' => array('Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
      ),
      'inputType' => 'inputUnit',
      'options' => array('h3', 'h4', 'h5', 'h6'),
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);
