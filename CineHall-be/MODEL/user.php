<?php
class user extends Database
{

    private $conn;
    private $select;
    public function __Construct()
    {

        $this->conn = $this->connection();

    }
    public function getUsers()
    {
        $this->conn = $this->connection();


        $this->select = mysqli_query($this->conn, "SELECT * FROM `user`");
        if ($this->select) {







            return mysqli_fetch_all($this->select, MYSQLI_ASSOC);
        }



    }
    public function getUser($id)
    {
        $this->conn = $this->connection();


        $this->select = mysqli_query($this->conn, "SELECT * FROM `user` WHERE id=$id ");
        if ($this->select) {

            return mysqli_fetch_all($this->select);
        }



    }
    public function Create($data)
    {
        $this->conn = $this->connection();
        $token = uniqid();
        $id =strtoupper(substr($token, 0, 6));
    
        $full_name = htmlspecialchars(trim(strtolower($data['full_name'])));
        $email = htmlspecialchars(trim(strtolower($data['email'])));
        $password = htmlspecialchars(trim(strtolower(sha1($data['password'])))) ;


        $this->select = mysqli_query($this->conn, "INSERT INTO `user` (`id`, `full_name`, `email`, `password`) VALUES ('$id', '$full_name', '$email', '$password')");

        if ($this->select) {
            return true;
        } else {
            return false;
        }



    }



}
?>