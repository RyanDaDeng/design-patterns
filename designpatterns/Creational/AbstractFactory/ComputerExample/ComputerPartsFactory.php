<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

interface ComputerPartsFactory
{
    /**
     * @return MemoryCardInterface
     */
    public function createMemoryCard();

    /**
     * @return MotherBoardInterface
     */
    public function createMotherBoard();
}