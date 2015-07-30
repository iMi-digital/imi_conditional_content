<?php

namespace iMi\ConditionalContent;


class ImiConditionalContentObserver
{

    public function onIsVisibleElement($objElement, $blnIsVisible)
    {
        return $blnIsVisible;
    }

}