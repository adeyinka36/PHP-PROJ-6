<?php

//require __DIR__ .'/../classes/ListingBasic.php';
//require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase{

    public function testEmptyListingBasicReturnsException()
    {
        $this->expectExceptionMessage("Unable to create a listing, data unavailable");
        $instance= new ListingBasic();
    }

    // check isset $data["id"]
    public function testIdInDataInput()
    {   
        $data=["title"=>"title1"];
        $this->expectExceptionMessage("Unable to create a listing, invalid id");
        $instance= new ListingBasic($data);
        $instance->setValus($data);

    }
    

    // check isset $data["title"]
    public function testTitleInDataInput()
    {   
        $data=["id"=>"id1"];
        $this->expectExceptionMessage("Unable to create a listing, invalid title");
        $instance= new ListingBasic($data);
        $instance->setValus($data);

    }
    

    // check for instance creation when basic info is provided
    public function testINstanceOfBasicListing()
    {   
        $data=["title"=>"title1","id"=>"id1"];
        $this->assertInstanceOf(
            ListingBasic::class,
            $instance= new ListingBasic($data)
        );
        

    }


    // check that getStatus return "basic"
    public function testgetStatusReturnsBasic()
    {   
        $data=["title"=>"title1","id"=>"id1"];
        $instance= new ListingBasic($data);
        $result=$instance->getStatus();
        $expected="basic";
        $this->assertEquals(
            $result,
            $expected
        );
        

    }

     // check that getId returna correct value
     public function testgetId()
     {   
        $data=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus"];

        $instance= new ListingBasic($data);
        $expected="1";
        $result=$instance->getId();

        $this->assertEquals($expected,$result);
     }


      // check that getTitle returna correct value
      public function testgetTitle()
      {   
         $data=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus"];
 
         $instance= new ListingBasic($data);
         $expected="title1";
         $result=$instance->getTitle();
 
         $this->assertEquals($expected,$result);
      }


       // check that getWebsite returna correct value
     public function testgetWebsite()
     {   
        $data=["title"=>"title1","id"=>"1","website"=>"website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus"];

        $instance= new ListingBasic($data);
        $expected="http://website.com";
        $result=$instance->getWebsite();

        $this->assertEquals($expected,$result);
     }
   

      // check that getTwitter returna correct value
      public function testgetTwitter()
      {   
         $data=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus"];
 
         $instance= new ListingBasic($data);
         $expected="mytwitter";
         $result=$instance->getTwitter();
 
         $this->assertEquals($expected,$result);
      }

       // check that getStatus returna correct value
     public function testgetStatus()
     {   
        $data=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus"];

        $instance= new ListingBasic($data);
        $expected="mystatus";
        $result=$instance->getStatus();

        $this->assertEquals($expected,$result);
     }


      // check toArray
      public function testToArray()
      {   
         $data=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus","image"=>"image.png"];
 
         $instance= new ListingBasic($data);
         $instance->setValues($data);
         $expected=["title"=>"title1","id"=>"1","website"=>"http://website.com","twitter"=>"mytwitter","email"=>"myemail@yahoo.com","status"=>"mystatus","image"=>"image.png"];

         $result=$instance->toArray();
          var_dump($result);
         $this->assertEquals($result, $expected);
      }
}