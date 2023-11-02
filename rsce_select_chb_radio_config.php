<?php
return array(
  'label' => array('Select, Radio, Checkbox', ''),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'standardFields' => array('cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),

  'fields' => array(
    ### group ###
    'select_group' => array(
      'label' => array('Select ', ''),
      'inputType' => 'group',
    ),

    ### select ###
    'select' => array(
      'label' => array(
        'de' => array('Select', ''),
      ),
      'inputType' => 'select',
      'default' => 'option_1',
      'options' => array(
        'option_1' => 'option_1',
        'option_2' => 'option_2',
        'option_3' => 'option_3',
      ),
      'eval' => array('tl_class' => 'w50'),
    ),


    ### group ###
    'radio_group' => array(
      'label' => array('Radio ', ''),
      'inputType' => 'group',
    ),

    ### radio ###
    'radio' => array(
      'label' => array(
        'de' => array(
          'Radio', '',
        ),
      ),
      'inputType' => 'radio',
      'default' => 'option_1',
      'options' => array(
        'option_1' => 'option_1',
        'option_2' => 'option_2',
        'option_3' => 'option_3',
      ),

      'eval' => array('tl_class' => 'w50 clr'),
    ),


    ### group ###
    'checkbox_group' => array(
      'label' => array('Checkbox ', ''),
      'inputType' => 'group',
    ),

    ### checkbox ###
    'checkbox' => array(
      'label' => array('Option', 'Help Text'),
      'inputType' => 'checkbox',
      'eval' => array(
        'tl_class' => 'w50 clr',
      ),
    ),

    ### group ###
    'multi_checkbox_group' => array(
      'label' => array('Checkbox Multiple', ''),
      'inputType' => 'group',
    ),

    ### checkbox multi ###
    'multi_checkbox' => array(
      'label' => array('Checkbox Multiple', ''),
      'inputType' => 'checkbox',
      'default' => 'Opt 1',
      'options' => array(
        'Opt 1', 'Opt 2', 'Opt 3',
      ),
      'eval' => array(
        'multiple' => true,
      ),
      'sql' => array(
        'type' => 'blob',
      ),
    ),
  ),
);