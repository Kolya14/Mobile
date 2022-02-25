<?php

namespace Ekomobile\CodingChallenge\Room;


use PhpCollection\Set;
use PhpCollection\SetInterface;
use Ekomobile\CodingChallenge\SpaceInterface;
use Ekomobile\CodingChallenge\VisitorInterface;

class RoomComposite implements SpaceInterface
{
    /**
     * @var SetInterface of SpaceInterface
     */
    private $spaces;

    public function __construct($spaces = [])
    {
        $this->spaces = new Set($spaces);
    }
    
    /**
    * Состав
    * 
    * @return SpaceInterface[]
    */
    public function all(): array
    {
        return $this->spaces->all();
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
        foreach ($this->spaces as $space) {
            $output .= $space->accept($person) . "\n";
        }
        return $output;
    }
}