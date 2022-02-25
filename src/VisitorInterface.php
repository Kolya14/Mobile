<?php

namespace Ekomobile\CodingChallenge;

use Ekomobile\CodingChallenge\Room\BathroomInterface;
use Ekomobile\CodingChallenge\Room\BedroomInterface;
use Ekomobile\CodingChallenge\Room\KitchenInterface;
use Ekomobile\CodingChallenge\Room\LivingRoomInterface;

/**
 * Базовый интерфейс для человека.
 */
interface VisitorInterface
{
    /**
     * Посетить ванную
     *
     * @param BathroomInterface $space
     * @return string
     */
    public function visitBathroom(BathroomInterface $bathroom): string;
    
    /**
     * Посетить спальню
     *
     * @param BedroomInterface $space
     * @return string
     */
    public function visitBedroom(BedroomInterface $bedroom): string;
    
    /**
     * Посетить кухню
     *
     * @param KitchenInterface $space
     * @return string
     */
    public function visitKitchen(KitchenInterface $kitchen): string;
    
    /**
     * Посетить гостиную
     *
     * @param LivingRoomInterface $space
     * @return string
     */
    public function visitLivingRoom(LivingRoomInterface $livingRoom): string;
}