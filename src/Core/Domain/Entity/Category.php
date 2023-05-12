<?php

namespace Core\Domain\Entity;

use Core\Domain\Entity\Traits\MethodsMagicsTrait;

class Category
    {
    use MethodsMagicsTrait;
    public function __construct(
      
        protected string $id = '',
        protected string $name = '',
        protected String $description,
        protected  Bool $isActive

    ) {
    }
}
