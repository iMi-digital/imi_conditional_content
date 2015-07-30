<?php

$GLOBALS['TL_DCA']['tl_content']['fields']['conditional_display'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['default']['conditional_display'],
    'inputType'               => 'text',
    'eval'                    => array('class' => 'clr'),
    'sql'                     => "text NULL"
);


foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key=>$value) {
    if ($key == '__selector__') {
        continue;
    }
    $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] .= ',conditional_display';
}