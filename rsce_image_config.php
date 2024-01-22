<?php

return array(
  'label' => array(
    'Bild: Bild',
  ),
  'types' => array( 'content' ),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline','cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(

    ###############################
    ### IMAGE with IMAGE - SIZE ###
    ###############################

    ### group ###
    'image_group' => array(
      'label' => array('BILD ', 'Hier können Sie ein Bild hinzufügen'),
      'inputType' => 'group',
    ),

    ### image ###
    'image' => array(
      'label' => array(
        'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'jpg,jpeg,png,gif,svg,webp',
        'tl_class'=>'clr',
        'mandatory' => true,
      ),
    ),

    ### image alt ###
    'image_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image title ###
    'image_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image size checkbox ###
    'image_size_checkbox' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Bildgröße selbst festlegen'),
      ),
      'inputType' => 'checkbox',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image size ###
    'image_size' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Hier können Sie die Abmessungen des Bildes und den Skalierungsmodus festlegen.'),
      ),
      'inputType' => 'imageSize',
      'options' => \System::getImageSizes(),
      'eval' => array('tl_class' => 'w50 clr'),
      'dependsOn' => [
        'field' => 'image_size_checkbox',
      ],
    ),

    #####################
    ### IMAGE AS ICON ###
    #####################

    ### group ###
    'icon_group' => array(
      'label' => array('BILD ', 'Hier können Sie ein Bild hinzufügen'),
      'inputType' => 'group',
    ),

    ### image ###
    'icon' => array(
      'label' => array(
        'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'jpg,jpeg,png,gif,svg',
        'tl_class'=>'clr',
        'mandatory' => true,
      ),
    ),

    ### image alt ###
    'icon_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image title ###
    'icon_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);
