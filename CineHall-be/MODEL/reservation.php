<?php
class reservation extends Database
{

    private $conn;
    private $select;



    public function __Construct()
    {

        $this->conn = $this->connection();

    }

    public function CreateReserve($data){

        $this->conn = $this->connection();
      
        $client=$data['client'];
        $salle= intval($data['salle']);

         $this->select = mysqli_query($this->conn,"INSERT INTO `reservation` (`id`, `id_customer`, `id_salle`, `date_reserve`) VALUES (NULL,'$client','$salle', current_timestamp())");
 
         if( $this->select){
 
 
             return $this->select;
         }
      



    }


    public function getReservation($id){
        $this->conn = $this->connection();

        $this->select = mysqli_query($this->conn, "SELECT r.*,s.* FROM reservation r ,salle s WHERE r.id_salle=s.id AND id_customer=$id");

        if( $this->select){
 
 
            return mysqli_fetch_all($this->select,MYSQLI_ASSOC);
        }



    }

    
}
?>