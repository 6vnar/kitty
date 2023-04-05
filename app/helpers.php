<?php

function dg($data)
{
    \Debugbar::info($data);
}
function lang($val)
{
    return app()->getLocale() == $val ? true : false;
}
