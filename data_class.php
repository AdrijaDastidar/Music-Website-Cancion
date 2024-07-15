<?php
include("db.php");

class data extends db{

    function __construct(){
        //echo "working";  
    }
    
    function user_login($t1, $t2){

        $q = "SELECT * FROM user WHERE email = '$t1' AND pass = '$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowcount();

        if($result){
            header("Location: page1.php");
        } else {
            header("Location: index.php?msg=Invalid Credentials");
        }
    }

    function artist_login($t1, $t2){

        $q = "SELECT * FROM artist WHERE email = '$t1' AND pass = '$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowcount();
    
        if($result){
            $row = $recordSet->fetch(PDO::FETCH_ASSOC);
            $login_id = $row['artist_id']; // Assuming the column name is 'login_id'
    
            header("Location: choice.php?login_id=$login_id");
            exit;
        } else {
            header("Location: index.php?msg=Invalid Credentials");
            exit;
        }
    } 
    
    

}

?>
