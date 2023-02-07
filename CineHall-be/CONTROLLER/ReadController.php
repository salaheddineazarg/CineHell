<?php

header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');


class ReadController
{

    public function user()
    {
        $db = new user();

        $data = $db->getUsers();

        echo json_encode($data, JSON_PRETTY_PRINT);



    }
    public function singleOne($id)
    {
        $db = new user();

        $data = $db->getUser($id);



        echo json_encode($data, JSON_PRETTY_PRINT);



    }

    public function movies(){

        $db = new movie();

        $data = $db->getMovies();

        echo json_encode($data, JSON_PRETTY_PRINT);


    }

    public function salles(){

        $db = new salle();
        $data = $db->getSalles();

        echo json_encode($data, JSON_PRETTY_PRINT);


    }
    public function salle($id){

        $db = new salle();
        $data = $db->getSalle($id);

        echo json_encode($data, JSON_PRETTY_PRINT);


    }
    public function reservation($id){
        $db = new reservation();
        $data = $db->getReservation($id);

        echo json_encode($data, JSON_PRETTY_PRINT);



    }




}





?>