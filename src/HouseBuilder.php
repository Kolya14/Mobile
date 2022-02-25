<?php

namespace Ekomobile\CodingChallenge;


use Ekomobile\CodingChallenge\Room\Bathroom;
use Ekomobile\CodingChallenge\Room\Bedroom;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use PhpCollection\Set;
use PhpCollection\SetInterface;

class HouseBuilder implements HouseBuilderInterface
{

    /**
     * @var House
     */
    private $house;

    public function __construct()
    {
        $this->house = new House();
    }
    
    /**
    * @inheritdoc
    */
    public function bathroom(): HouseBuilderInterface
    {
        $this->house->addRoom(new Bathroom());
        
        return $this;
    }
    
    /**
    * @inheritdoc
    */
    public function bedroom(): HouseBuilderInterface
    {
        $this->house->addRoom(new Bedroom());
        
        return $this;
    }
    
    /**
    * @inheritdoc
    */
    public function kitchen(): HouseBuilderInterface
    {
        $this->house->addRoom(new Kitchen());
        
        return $this;
    }
    
    /**
    * @inheritdoc
    */
    public function livingRoom(): HouseBuilderInterface
    {
        $this->house->addRoom(new LivingRoom());
        
        return $this;
    }
    
    /**
    * @inheritdoc
    */
    public function getHouse(): HouseInterface
    {
        return $this->house;
    }
}