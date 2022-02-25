<?php

namespace Ekomobile\CodingChallenge\Test;

use Ekomobile\CodingChallenge\HouseBuilder;
use Ekomobile\CodingChallenge\SpaceInterface;
use PHPUnit\Framework\TestCase;

class HouseBuilderTest extends TestCase
{
    /**
     * Очень наивный тест..
     *
     * @test
     */
    public function testHouseBuilder()
    {
        $builder = new HouseBuilder();
        $house = $builder->bedroom()
            ->bathroom()
            ->livingRoom()
            ->getHouse();
            
        $this->assertContainsOnlyInstancesOf(
            SpaceInterface::class,
            $house->getRooms(),
            'Всё должно быть пространствами'
        );
        $this->assertCount(
            6,
            $house->getRooms(),
            'Дом состоит из 6 комнат'
        );
    }
}
