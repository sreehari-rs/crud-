<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class ="container">
        <header class = "d-flex justify-content-between my-4">
            <h1>book list</h1>
            <div>
                <a href ="create.php" class = "btn btn-primary">Add a new book</a>
            </div>
        </header>
        <table class ="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>author</th>
                    <th>type</th>
                    <th>action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM books";
                $result =mysqli_query($conn , $sql);
                while($row =mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["author"] ?></td>
                        <td><?php echo $row["type"] ?></td>
                      
                        <td>
                            <a href ="view.php?id=<?php echo $row["id"]; ?>" class = "btn btn-primary"> Read more </a>
                            <a href ="edit.php?id=<?php echo $row["id"]; ?>" class = "btn btn-warning"> Edit</a>
                            <a href ="delete.php?id=<?php echo $row["id"]; ?>" class = "btn btn-danger"> Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>