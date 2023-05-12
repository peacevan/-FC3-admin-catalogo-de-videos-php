<?php

 Namespace  Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;

use PHPUnit\Framework\TestCase;

 Class CategoryUnitTest extends TestCase{
    public function testeAttributes(){
         $category = new Category(
            id:'2323',
            name:'New Cat',
            description:'New Desc',
            isActive:true
         );

         $this->assertEquals('New Cat',$category->name);
         $this->assertEquals('New Desc',$category->description);
         $this->assertEquals(true,$category->isActive);


    }

 }