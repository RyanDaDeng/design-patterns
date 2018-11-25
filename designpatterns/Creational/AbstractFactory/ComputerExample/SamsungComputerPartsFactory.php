<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class SamsungComputerPartsFactory implements ComputerPartsFactory
{
    public function createMemoryCard()
    {
        return new HuaWeiMemoryCard();
    }

    public function createMotherBoard()
    {
        return new HuaWeiMontherBoard();
    }

}