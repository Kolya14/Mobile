<?php

namespace Ekomobile\CodingChallenge;

use Ekomobile\CodingChallenge\Room\BathroomInterface;
use Ekomobile\CodingChallenge\Room\BedroomInterface;
use Ekomobile\CodingChallenge\Room\KitchenInterface;
use Ekomobile\CodingChallenge\Room\LivingRoomInterface;

class Person implements VisitorInterface
{
    /**
     * Посетить ванную
     *
     * @param BathroomInterface $space
     * @return string
     */
    public function visitBathroom(BathroomInterface $bathroom): string
    {
        return "Принял ванну в : " . get_class($bathroom);
    }
    
    /**
     * Посетить спальню
     *
     * @param BedroomInterface $space
     * @return string
     */
    public function visitBedroom(BedroomInterface $bedroom): string
    {
        return "Выспался в : " . get_class($bedroom);
    }
    
    /**
     * Посетить кухню
     *
     * @param KitchenInterface $space
     * @return string
     */
    public function visitKitchen(KitchenInterface $kitchen): string
    {
        return "Пообедал в : " . get_class($kitchen);
    }
    
    /**
     * Посетить гостиную
     *
     * @param LivingRoomInterface $space
     * @return string
     */
    public function visitLivingRoom(LivingRoomInterface $livingRoom): string
    {
        return "Посмотрел фильм в : " . get_class($livingRoom);
    }
}