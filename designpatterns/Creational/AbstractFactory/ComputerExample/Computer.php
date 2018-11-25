<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class Computer
{

    public $memoryCard;
    public $motherBoard;

    public function __construct(MemoryCard $memoryCard, MotherBoard $motherBoard)
    {
        $this->memoryCard = $memoryCard;
        $this->motherBoard = $motherBoard;
    }


}