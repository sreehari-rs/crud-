<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .book-details{
            background :#f5f5f5;
            padding :50px;
            
        }
    </style>
</head>
<body>
    <div class ="container">
        <header class = "d-flex justify-content-between my-4">
            <h1>book details</h1>
            <div>
            <a href ="index.php" class = "btn btn-primary">back</a>
            </div>
        </header>
        <div class = "book-details">
            <?php
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    include("connect.php");
                    $sql ="SELECT * FROM books where id = $id";
                    $result =mysqli_query($conn , $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                ?>
                <h2>Title</h2>
                <p><?php echo $row["title"];?></p>
                <h2>Description</h2>
                <p><?php echo $row["description"]; ?></p> 
                <h2>Type</h2>
                <p><?php echo $row["type"];?></p>
                <h2> Author</h2>
                <p><?php echo $row["author"]; ?></p>
                <?php
                }

            ?>
        </div>
    </div>

</body>
</html>