<?php

namespace Ekomobile\CodingChallenge;

/**
 * Общий интерфейс для мест
 */
interface SpaceInterface
{
    /**
     * Комната или дом может принимать посетителей.
     *
     * @param VisitorInterface $person
     * @return string
     */
    public function accept(VisitorInterface $person): string;
}