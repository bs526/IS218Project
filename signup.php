<?php
require("config.php");

if(isset($_POST['username'])){
    $username = $_POST['username'];
}

    try{
        //connect to database
        $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        
        //EDIT QUERY TO RUN
        $stmt =  $conn->query("SELECT * FROM `user`");
        
        //run query and stores results
        $result = $stmt->fetch();

        $badchars = "/[^A-Za-z0-9]/i";
        $invalid = preg_match($badchars, $username, $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
        if($invalid){
            echo $username . " violates da rules" . "<br>";
        }
        //check if username is unique
        if($result['User'] == $username){
            echo "username TAKEN!";
        } else {
            echo "username FREE!";
        }





        echo "Connected successfully";

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    //header("Location: https://www.youtube.com");

function display(){

}
?>
