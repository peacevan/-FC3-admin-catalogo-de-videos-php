<?php

namespace Core\Domain\Entity;

use Core\Domain\Entity\Traits\MethodsMagicsTrait;

class Category
{
    use MethodsMagicsTrait;
    public function __construct(

        protected string $id = '',
        protected string $name = '',
        protected String $description = '',
        protected  Bool $isActive = true

    ) {
    }
    public function activate(): void
    {
        $this->isActive = true;
    }
    public function desabled(): void
    {
        $this->isActive = false;
    }

    public function update(string $name,string $description=''){
        $this->name=$name;
        $this->description=$description;

    }

   
}
