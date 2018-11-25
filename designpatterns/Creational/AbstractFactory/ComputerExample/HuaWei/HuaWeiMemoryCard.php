<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class HuaWeiMemoryCard implements MemoryCardInterface
{

    public function make()
    {
        return new MemoryCard('HuaWei', 'Z370');
    }
}