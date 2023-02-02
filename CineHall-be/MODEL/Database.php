<?php
class Database{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'shipcruise';
    protected $connection;

 
    public function connection(){   
 
       
            $connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if($connection)
            {
            
                return $connection;   
            }else
            {
                echo "EROOR";
            }          
        }    
 
        
    }
   
?>