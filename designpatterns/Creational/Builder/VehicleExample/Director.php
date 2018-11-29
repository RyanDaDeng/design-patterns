<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/29
 * Time: 下午9:18
 */

class Director
{

    public function build(BuilderInterface $builder)
    {
        $builder->addDoor();
        $builder->addSeat();
        return $builder->createVehicle();
    }
}