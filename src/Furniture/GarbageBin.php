<?php

namespace Ekomobile\CodingChallenge\Furniture;

use Ekomobile\CodingChallenge\Stuff\Trash;
use Ekomobile\CodingChallenge\Stuff\TrashInterface;

class GarbageBin implements GarbageBinInterface
{
    /**
    * Мусор
    * 
    * @var Trash
    */
    private $trash;
    
    public function __construct()
    {
        $this->trash = new Trash();
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeTrash(): ?TrashInterface
    {
        $trash = $this->trash;
        unset($this->trash);
        
        return $trash;
    }
}