<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    class UpdateController{

      public function movie($id){
   
        if ($_FILES["image"]["size"] > 0) {

          $tmpName = $_FILES["image"]["tmp_name"];
          $FileName = $_FILES["image"]["name"];
          $imageEx = explode('.', $FileName);
          $imageEx = strtolower(end($imageEx));
          $newImageName = uniqid();
          $newImageName .= '.' . $imageEx;
          move_uploaded_file($tmpName, './Public/image/' . $newImageName);
          $data = [
            'name' => $_POST['name'],
            'image' => $newImageName,
            'id_salle'=>$_POST['id_salle'],
            'date' => $_POST['date']
        ];
     
             $db = new movie();
            $insert = $db->UpdateMovie($id,$data);
  
  
         
  
        } else {
          $data = [
            'name' => $_POST['name'],
            'id_salle'=>$_POST['id_salle'],
            'date' => $_POST['date']
        ];
     
             $db = new movie();
            $insert = $db->UpdatewithoutIM($id,$data);
  
         
        }

     
          if ($insert) {
              echo json_encode(['vrai' => 'movie updated']);
          } else {
              echo json_encode(['faux' => 'error']);
          }


      }

      public function salle($id){
        $db = new salle();
        $data = [
            'name' => $_POST['name'],
            'places' => $_POST['places'],
            'id' => $_POST['id'],
          
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $insert = $db->UpdateSalle($id,$data);
            if ($insert) {
                echo json_encode(['vrai' => 'Salle updated']);
            } else {
                echo json_encode(['faux' => 'error']);
            }
        }


      }




    }





?>