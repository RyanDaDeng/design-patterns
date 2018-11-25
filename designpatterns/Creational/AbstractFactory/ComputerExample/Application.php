<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class Application
{
    private $computerPartsFactory;


    public function __construct(ComputerPartsFactory $computerPartsFactory)
    {
        $this->computerPartsFactory = $computerPartsFactory;
    }

    public function makeMyComputer()
    {
        $memoryCard = $this->computerPartsFactory->createMemoryCard()->make();
        $motherBoard = $this->computerPartsFactory->createMotherBoard()->make();
        $computer = new Computer($memoryCard, $motherBoard);
        return $computer;
    }

}