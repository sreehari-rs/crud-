
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class ="container">
        <header style="display: flex; justify-content: space-between; align-items: center;">    
            <h1> Edit book </h1>
            <div >
                <a href ="index.php" class ="btn btn-primary">back</a>
            </div>
        </header>
        <?php
            if(isset($_GET["id"])){
                include("connect.php");
                $id = $_GET["id"];
                $sql = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn,$sql);
                if($result && mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                }
            }
        ?>
        <form action ="process.php" method ="POST">
            <div class ="form-element my-4">
                <input type ="text" class ="form-control" value = "<?php echo htmlspecialchars($row['title']);?>" name ="title" placeholder ="Book title">

            </div>
            <div class =" form-element my-4">
                <input type ="text" class ="form-control" name ="author" value ="<?php echo htmlspecialchars( $row['author']);?>" placeholder =" Author Name">
            </div>
            <div class ="form-element my-4">
                <select name ="type">

                <option value="">Select book type</option>
                <option value="adventure" <?php if($row['type']=="adventure"){ echo "selected";} ?>>adventure</option>
                <option value ="fantasy" <?php if($row['type']=="fantasy"){ echo "selected";} ?>>fantasy</option>
                <option value = "scifi" <?php if($row['type']=="scifi"){ echo "selected";} ?>>scifi</option>
                <option value ="horror" <?php if($row['type']=="horror"){ echo "selected";} ?>>horror</option>
                </select>
            </div>        
            <div class ="form-element my-4">
                <input type ="text" class ="form-control" name = "description" value = "<?php echo htmlspecialchars($row['description']);?>" placeholder ="say something about your book">

            </div>
            <input type ="hidden" name ="id" value ='<?php echo $row['id']; ?>'>
            <div class ="form-element ">
                <input type = "submit" name = "edit" value ="edit  book" class = "btn btn-success">

            </div>
        </form>
    </div>
</body>
</html>