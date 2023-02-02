<?php


    class HomeController {

public function index (){
        $db = new user();

        $data['test'] = $db->getUser();
        View::load('home', $data);
      

      
}


    } 









?>