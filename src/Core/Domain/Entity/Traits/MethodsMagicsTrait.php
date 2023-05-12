<?php
namespace Core\Domain\Entity\Traits;

use Exception;


Trait MethodsMagicsTrait {


    public function __get($property)
    {
        if (isset($this->{$property}))
            return $this->{$property};
    
        $classname= get_class($this);
        Throw new Exception("property {$property} not found in class {$classname}");
    }





}