<?php


$GLOBALS['TL_DCA']['tl_article']['fields']['conditional_display'] = array(
        'label'                   => &$GLOBALS['TL_LANG']['default']['conditional_display'],
        'inputType'               => 'text',
        'eval'                    => array('class' => 'clr'),
        'sql'                     => "text NULL"
    );


foreach($GLOBALS['TL_DCA']['tl_article']['palettes'] as $key=>$value) {
    if ($key == '__selector__') {
        continue;
    }
    $GLOBALS['TL_DCA']['tl_article']['palettes'][$key] .= ',conditional_display';
}