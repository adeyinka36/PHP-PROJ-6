<?php

//require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class  ListingPremiumTest extends TestCase{
   
  public function testGetStatusReturnsPremium()
{    
    $data=["title"=>"title1","id"=>"1","website"=>"website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"premium","description"=>"A simple description"];
    $expected="premium";
    $instance= new ListingPremium($data);
    $result=$instance->getStatus();
    

    $this->assertEquals(
        $result,
        $expected
    );
}
 public function testGetDescriptionResult(){
    $data=["title"=>"title1","id"=>"1","website"=>"website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"premium","description"=>"A simple description"];
    $instance= new ListingPremium($data);
    $expected="A simple description";
    $result=$instance->getDescription();

    $this->assertEquals(
        $expected,
        $result
    );
 }
}