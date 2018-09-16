<?php

/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 9/16/2018
 * Time: 9:31 PM
 */
class ImageModule
{

   public $image_url = "";
   public $image_status = true;
   public $image_id = 00;

   public function addNewImage(HttpResponse $request){
       $date = new DateTime();
       $time = $date->getTimezone();

       $image = new ImageModule();
       $image->image_url  = "googlr.com";
   }


   public function readBarcode(){
       
   }


}