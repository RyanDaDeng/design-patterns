<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class SamsungMontherBoard implements MotherBoardInterface
{

    public function make()
    {
        return new MotherBoard('Samsung', 'ABC');
    }
}