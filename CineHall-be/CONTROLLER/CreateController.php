<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
class CreateController
{


    public function user()
    {


        $db = new user();
        $data = [
            'full_name' => $_POST['full_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $insert = $db->Create($data);
            if ($insert) {
                echo json_encode(['vrai' => 'user added']);
            } else {
                echo json_encode(['faux' => 'error']);
            }
        }


    }

    public function movie()
    {

        if ($_FILES["image"]["error"] === 4) {
            echo "<script>alert('Image Does Not Exist');</script>";
        } else {
            $FileName = $_FILES["image"]["name"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validExtisin = ['jpg', 'jpeg', 'png'];
            $imageEx = explode('.', $FileName);
            $imageEx = strtolower(end($imageEx));
            if (!in_array($imageEx, $validExtisin)) {
                echo
                    "<script>alert('Invalid  Image Extension');</script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageEx;
                move_uploaded_file($tmpName, './Public/image/' . $newImageName);

            }
        }
        

        $data = [
            'name' => $_POST['name'],
            'image' => $newImageName,
            'id_salle'=>$_POST['id_salle'],
            'date' => $_POST['date']
        ];

      
             $db = new movie();
            $insert = $db->CreateMovie($data);


            if ($insert) {
                echo json_encode(['vrai' => 'movie added']);
            } else {
                echo json_encode(['faux' => 'error']);
            }



       
    }

    public function salle(){

        $db = new salle();
        $data = [
            'name' => $_POST['name'],
            'places' => $_POST['places'],
    
          
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $insert = $db->CreateSalle($data);
            if ($insert) {
                echo json_encode(['vrai' => 'Salle added']);
            } else {
                echo json_encode(['faux' => 'error']);
            }
        }

    }

    public function token(){

           
            $data = [
                'client' => $_POST['client'],
                'salle' => $_POST['salle'],
            ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $db = new reservation();
                $insert = $db->CreateReserve($data);
                if ($insert) {
                    echo json_encode(['vrai' => 'Reservation added']);
                } else {
                    echo json_encode(['faux' => 'error']);
                }
            }
    
 
    }
}


?>