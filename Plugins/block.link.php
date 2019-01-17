<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 08:21
 */
function smarty_block_link($attributes,$text)
{
    $href = $attributes['href'];
    if (!is_null($text)){
        return '<a href="'.$href.'">'.$text.'</a>';
    }
}