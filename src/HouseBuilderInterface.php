<?php
namespace Ekomobile\CodingChallenge;

/**
 * Интерфейс строителя домов
 */
interface HouseBuilderInterface
{
    /**
     * Добавить ванную
     *
     * @return HouseBuilderInterface
     */
    public function bathroom(): HouseBuilderInterface;
    
    /**
     * Добавить спальню
     *
     * @return HouseBuilderInterface
     */
    public function bedroom(): HouseBuilderInterface;
    
    /**
     * Добавить кухню
     *
     * @return HouseBuilderInterface
     */
    public function kitchen(): HouseBuilderInterface;
    
    /**
     * Добавить гостиную
     *
     * @return HouseBuilderInterface
     */
    public function livingRoom(): HouseBuilderInterface;
    
    /**
     * Получить построенный дом
     *
     * @return HouseInterface
     */
    public function getHouse(): HouseInterface;
}