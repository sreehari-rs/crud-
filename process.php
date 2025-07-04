<?php
include("connect.php");
if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn , $_POST["author"]);
    $type = mysqli_real_escape_string($conn , $_POST["type"]);
    $description = mysqli_real_escape_string($conn,$_POST["description"]);
    $sql = "INSERT INTO books ( title , author , type , description) VALUES( '$title','$author','$type','$description')";
    $result = mysqli_query($conn , $sql);
    if($result){
        echo "record added successfully";

    }
    else{
        die("die something went wrong ". mysqli_error($conn));

    }

}


if(isset($_POST["edit"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn , $_POST["author"]);
    $type = mysqli_real_escape_string($conn , $_POST["type"]);
    $description = mysqli_real_escape_string($conn,$_POST["description"]);
    $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $sql = "UPDATE  books SET title ='$title' ,author ='$author',type ='$type',description = '$description' WHERE id = $id";
    $result = mysqli_query($conn , $sql);
    if($result){
        echo "record updates  successfully";

    }
    else{
        die("die something went wrong ". mysqli_error($conn));

    }

}
?>
