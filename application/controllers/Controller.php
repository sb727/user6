<?php
include_once "model/Model.php";
class Controller {
     public $model;
     public $search_result;
     public function __construct()
     {
          $this->model = new Model();
     }

     private function search_hotel($hotel,$hotel_name){
          // $i = 0;
          // $search_result[] = null;
          // foreach ($hotel as $key => $value) {
          //      $pattern = "/".$hotel_name."/i";
          //      $search_result[$i] = preg_match($pattern,$value["hotel_name"].$value["country"]);
          //      $i++;
          // }
          // return $search_result;
          $hotel = $this->model->getSpecificHotelList($hotel_name);
          return $hotel;
     }

     public function detail_show($num){
          $data = $this->model->getHotel($num);
          include "view/detail.php";
     }

     public function invoke()
     {
          if(isset($_GET['num'])){
               $this->detail_show($_GET['num']);
               return;
          }

          include_once "view/header.php";

          if (!isset($_POST['hotel_name'])){
               $hotel = $this->model->getHotelList();
               $search_result = $this->search_hotel($hotel,"");
          }else{
               $hotel = $this->model->getHotelList();
               $search_result = $this->search_hotel($hotel,$_POST['hotel_name']);
               
          }
          include"view/body.php";
          
          include_once "view/footer.php";
     }

     public function ajaxInvoke() {
          $search_result = $this->search_hotel('', isset($_POST['id']) ? $_POST['id'] : '');
          include"view/ajax.php";
     }

     
}
?>