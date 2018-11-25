<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午3:35
 */

class MotherBoard
{
    public $brand;
    public $series;

    public function __construct(string $brand, string $series)
    {
        $this->brand = $brand;
        $this->series = $series;
    }
}