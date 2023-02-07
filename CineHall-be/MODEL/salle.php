<?php
  class salle extends Database{

    private $conn;
    private $select;



    public function __Construct()
    {

        $this->conn = $this->connection();

    }

   
    public function getSalles (){


        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "SELECT*FROM salle ");
        
        
        if($this->select){


            return mysqli_fetch_all($this->select, MYSQLI_ASSOC);
        }
    }
    public function getSalle($id){


        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "SELECT * FROM salle WHERE id='$id'");
        
        
        if($this->select){


            return mysqli_fetch_assoc($this->select);
        }
    }



    public function CreateSalle($data){

        $this->conn = $this->connection();
        $name=$data['name'];
        $places=$data['places'];
      
 
 
         $this->select = mysqli_query($this->conn, "INSERT INTO `salle` (`id`, `name`, `places`) VALUES (NULL, '$name', '$places')");
 
         if( $this->select){
 
 
             return $this->select;
         }




    }
    public function UpdateSalle($id,$data){


        $this->conn = $this->connection();
        $name=$data['name'];
        $places=$data['places'];
   


        $this->select = mysqli_query($this->conn,"UPDATE `salle` SET  `name`='$name',`places`='$places' WHERE id=$id");
        if($this->select){



            return $this->select;
        }

    }

    
    public function DeleteSalle($id){

        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "DELETE FROM salle WHERE id=$id");


        if($this->select){


            return $this->select;
        }
    }
     

  }
  
?>