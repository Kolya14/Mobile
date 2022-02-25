<?php

namespace Ekomobile\CodingChallenge;


use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use PhpCollection\Set;
use PhpCollection\SetInterface;

class House implements HouseInterface
{

    /**
     * @var SetInterface of SpaceInterface
     */
    private $rooms;

    public function __construct()
    {
        $this->rooms = new Set([new Bathroom(), new Bedroom(), new Kitchen()]);
    }
    
    /**
    * Добавить комнату
    * 
    * @param SpaceInterface $room
    */
    public function addRoom(SpaceInterface $room)
    {
        $this->rooms->add($room);
    }
    
    /**
    * Получить комнаты
    * 
    * @return SpaceInterface[]
    */
    public function getRooms()
    {
        return $this->rooms->all();
    }

    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return string
     */
    public function accept(VisitorInterface $person): string
    {
        $output = "";
        foreach ($this->rooms as $room) {
            /** @var SpaceInterface $room */
            $output .= $room->accept($person) . "\n";
        }
        return $output;
    }
}