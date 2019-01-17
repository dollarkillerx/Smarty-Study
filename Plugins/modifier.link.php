<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 08:21
 */
function smarty_modifier_link($text,$href,$isCapitalize=false)
{
    if (!$isCapitalize) {
        return '<a href="' . $href . '">' . $text . '</a>';
    } else {
        return '<a href="' . $href . '">' . strtoupper($text) . '</a>';
    }
}