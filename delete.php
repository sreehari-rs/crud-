<!-- <?php
    include("connect.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM books WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo " record deleted successfully ";
        }
    }
?> -->

<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>