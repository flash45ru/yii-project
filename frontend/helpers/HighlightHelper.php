<?php
namespace frontend\helpers;

class HighlightHelper
{
    public static function process($string, $text)
    {
        return str_replace($string, "<b style='color: orangered'>$string</b>", $text);
    }

}