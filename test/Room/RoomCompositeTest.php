<?php

namespace Ekomobile\CodingChallenge\Test\Room;

use Ekomobile\CodingChallenge\Room\RoomComposite;
use Ekomobile\CodingChallenge\Room\Kitchen;
use Ekomobile\CodingChallenge\Room\LivingRoom;
use Ekomobile\CodingChallenge\SpaceInterface;
use PHPUnit\Framework\TestCase;

class RoomCompositeTest extends TestCase
{
    /**
     * Очень наивный тест..
     *
     * @test
     */
    public function testRoomComposite()
    {
        $composite = new RoomComposite([new Kitchen(), new LivingRoom()]);
        $this->assertContainsOnlyInstancesOf(
            SpaceInterface::class,
            $composite->all(),
            'Всё должно быть пространствами'
        );
        $this->assertCount(
            2,
            $composite->all(),
            'Комната состоит из 2 пространств'
        );
    }
}
