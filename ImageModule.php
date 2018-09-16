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

    /***
     * @param HttpResponse $request
     */
   public function addNewImage(HttpResponse $request){
       $date = new DateTime();
       $time = $date->getTimezone();

       $image = new ImageModule();
       $image->image_url  = "googlr.com";
   }

    /***
     * @param $name
     * @param $id
     * @return string
     */
   public function readBarcode($name,$id){
       $barcode_name = $name;
       $barcode_id = $id;

       return $barcode_name." ".$id;
   }


   public  function  changePrivacy(){
       
   }
}