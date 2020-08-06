<?php
use PHPUnit\Framework\TestCase;



class TestListFeautured extends TestCase
{
  
    public function testFeauturedGetStatus()
    {
        $data=["title"=>"title1","id"=>"1","website"=>"website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"featured","description"=>"A simple description"];
        $instance= new ListingFeatured($data);
        $expected="featured";
        $result=$instance->getStatus();

        $this->assertEquals($expected,$result);
         

    }


    public function testGetCoc(){
        $data=["title"=>"title1","id"=>"1","website"=>"website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"featured","description"=>"A simple description","coc"=>"coc"];
        $instance = new ListingFeatured($data);
        $expected="coc";
        $result=$instance->getCoc();

        $this->assertEquals(
            $result,$expected
        );
    }
}