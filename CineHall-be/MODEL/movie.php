<?php 
    class movie extends Database{


    private $conn;
    private $select;


    public function __Construct()
    {

        $this->conn = $this->connection();

    }


    public function CreateMovie($data){

        $this->conn = $this->connection();
       $name=$data['name'];
       $image=$data['image'];
        $id_salle = $data['id_salle'];
       $date=$data['date'];


        $this->select = mysqli_query($this->conn, "INSERT INTO `movie` (`id`, `name`, `image`,`id_salle`, `date`) VALUES (NULL,'$name', '$image','$id_salle','$date')");

        if( $this->select){


            return $this->select;
        }



    }

    public function getMovies(){
        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "SELECT * FROM movie");

        if($this->select){


            return mysqli_fetch_all($this->select, MYSQLI_ASSOC);
        }


    }

    public function UpdateMovie($id,$data){

        $this->conn = $this->connection();

        $name=$data['name'];
        $image=$data['image'];
        $id_salle = $data['id_salle'];
        $date=$data['date'];


        $this->select = mysqli_query($this->conn,"UPDATE `movie` SET `name`='$name',`image`='$image',`id_salle`='$id_salle',`date`='$date' WHERE id=$id");


        if($this->select){


            return $this->select;
        }
    }
    public function UpdatewithoutIM($id,$data){

        $this->conn = $this->connection();

        $name=$data['name'];
        $id_salle = $data['id_salle'];
        $date=$data['date'];


        $this->select = mysqli_query($this->conn,"UPDATE `movie` SET `name`='$name',`id_salle`='$id_salle',`date`='$date' WHERE id=$id");


        if($this->select){


            return $this->select;
        }
    }
    public function DeleteMovie($id){

        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "DELETE FROM movie WHERE id=$id");


        if($this->select){


            return $this->select;
        }
    }



    }





?>