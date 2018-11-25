<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class Client
{
    public function main()
    {
        // i want to build HuaWei computer
        $factory = new Application(new HuaWeiComputerPartsFactory());

        $factory->makeMyComputer();


        // i want to build Samsung computer
        $factory = new Application(new SamsungComputerPartsFactory());

        $factory->makeMyComputer();
    }

}