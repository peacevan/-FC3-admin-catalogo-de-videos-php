<?php

namespace  Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;

use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
   public function testeAttributes()
   {
      $category = new Category(
         id: '2323',
         name: 'New Cat',
         description: 'New Desc',
         isActive: true
      );

      $this->assertEquals('New Cat', $category->name);
      $this->assertEquals('New Desc', $category->description);
      $this->assertEquals(true, $category->isActive);
   }



   public function testeActived()
   {
      $category = new Category(
         name: 'New Cat',
         isActive: false,
      );
      $this->assertFalse($category->isActive);
      $category->activate();
      $this->assertTrue($category->isActive);
   }

   public function testeDesabled()
   {
      $category = new Category(
         name: 'New Cat',

      );
      $this->assertTrue($category->isActive);
      $category->desabled();
      $this->assertFalse($category->isActive);
   }
   public  function testUpdate()
   {
      $uuid = 'uuid.value';

      $category = new Category(
         name: 'New Cat',
         description:'new desc',
         isActive: true,
      );

      $category->update(
         name:"new_name",
         description:"new_desc",

      );
      $this->assertEquals("new_name",$category->name);
      $this->assertEquals("new_desc",$category->description);

   }
}
