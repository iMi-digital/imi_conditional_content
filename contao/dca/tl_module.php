<?php

$GLOBALS['TL_DCA']['tl_module']['fields']['conditional_display'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['MSC']['conditional_display'],
    'inputType'               => 'text',
    'eval'                    => array('class' => 'clr'),
    'sql'                     => "text NULL"
);


foreach($GLOBALS['TL_DCA']['tl_module']['palettes'] as $key=>$value) {
    if ($key == '__selector__') {
        continue;
    }
    $GLOBALS['TL_DCA']['tl_module']['palettes'][$key] .= ',conditional_display';
}