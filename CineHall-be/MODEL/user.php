<?php
class user extends Database
{

    private $conn;
    private $select;
    public function __Construct()
    {

        $this->conn = $this->connection();

    }
    public function getUser()
    {
        $this->conn = $this->connection();


        $this->select = mysqli_query($this->conn, "SELECT * FROM `user` ");
       if($this->select){

            return mysqli_fetch_all($this->select);
       }
       


    }


}
?>