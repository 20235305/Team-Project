<?php


// This class has 3 methods: connect, read and save
class Database
{

private $host = "localhost:3307";
private $username = "root";
private $password = "";
private $db = "project2023";

    //This method creates a connection to the database using mysqli 
    function connect()
    {

        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connection;
    }

    //This method reads info from the mysql database 
    function read($query)
    {
       $conn = $this->connect();
       $result = mysqli_query($conn,$query);

        if(!$result)
        {
            return false;
        }
        else
        {
            $data = null;
            while($row = mysqli_fetch_assoc($result))
            {

                $data[] = $row;

            }

            return $data;
        }
    }

    //This funcion stores inputed data into the database
    function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if(!$result){
            return false;

        } else {
            return true;
        }
    }
}

//This line creates a new instance of the Database class
$DB = new Database();