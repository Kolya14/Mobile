<?php

namespace Ekomobile\CodingChallenge\Test;

use Ekomobile\CodingChallenge\Person;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\SpaceInterface;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /**
     * Очень наивный тест..
     *
     * @test
     */
    public function testRoomComposite()
    {
        $person = new Person();
        $kitchen = new Kitchen();
        $this->expectOutputString('Пообедал в : ' . get_class($kitchen));
        print $kitchen->accept($person);
    }
}
