<?php

namespace iMi\ConditionalContent;


class ImiConditionalContentObserver
{

    public function onIsVisibleElement($e, $blnIsVisible)
    {
        global $objPage;

        if (trim($e->conditional_display) != '') {
            return eval('return ' . $e->conditional_display . ';');
        }
        return $blnIsVisible;
    }

}