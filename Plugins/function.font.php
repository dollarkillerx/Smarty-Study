<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 08:20
 */
function smarty_function_font($attributes)
{
    $text = $attributes['text'];
    $color = $attributes['color'] ?? 'black';
    return '<span style="color:' . $color . '">' . $text . '</span>';
}