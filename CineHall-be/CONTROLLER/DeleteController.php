<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
    class DeleteController{

        public function movie($id){
        $db = new movie();
        $insert = $db->DeleteMovie($id);
        if ($insert) {
            echo json_encode(['vrai' => 'movie deleted']);
        } else {
            echo json_encode(['faux' => 'error']);
        }



        }

        public function salle($id){
            $db = new salle();
            $insert = $db->DeleteSalle($id);
            if ($insert) {
                echo json_encode(['vrai' => 'salle deleted']);
            } else {
                echo json_encode(['faux' => 'error']);
            }
    
    
    
            }


    }











?>