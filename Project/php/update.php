<?php

if(isset($_GET['id'])){

    include "db_conn.php";
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;

}
$id= validate($_GET['id']);
$sql="SELECT * FROM USERS WHERE id=$id";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
    $row= mysqli_fetch_assoc($result);
}else{
    header("Location:../admin.php");
}

}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $name=validate($_POST['name']);
    $username=validate($_POST['username']);
    $password=validate($_POST['password']);
    $id = validate($_POST['id']);

    if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name je obavezno polje");
	}else if (empty($username)) {
		header("Location: ../update.php?id=$id&error=Username obavezno polje");
	}else if (empty($password)) {
		header("Location: ../update.php?id=$id&error=Password obavezno polje");
    }
        else {

       $sql = "UPDATE users
               SET name='$name', username='$username' , password='$password'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../Admin.php?success=Uspesno ste sacuvali izmene!");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}

    
    

}
else{
    header("Location:../admin.php");
}