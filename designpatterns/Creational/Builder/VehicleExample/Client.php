<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/29
 * Time: 下午9:18
 */

class Client
{

    public function main()
    {
        $director = new Director();

        $carBuilder = new CarBuilder();
        $director->build($carBuilder);


        $truckBuilder = new TruckBuilder();
        $director->build($truckBuilder);
    }
}