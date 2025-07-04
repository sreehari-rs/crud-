
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class ="container">
        <header style="display: flex; justify-content: space-between; align-items: center;">    
            <h1> add a new book</h1>
            <div >
                <a href ="index.php" class ="btn btn-primary">back</a>
            </div>
        </header>
        <form action ="process.php" method ="POST">
            <div class ="form-element my-4">
                <input type ="text" class ="form-control" name ="title" placeholder ="Book title">

            </div>
            <div class =" form-element my-4">
                <input type ="text" class ="form-control" name ="author" placeholder =" Author Name">
            </div>
            <div class ="form-element my-4">
                <select name ="type">

                <option value="">Select book type</option>
                <option value="adventure">adventure</option>
                <option value ="fantasy">fantasy</option>
                <option value = "scifi">scifi</option>
                <option value ="horror">horror</option>
                </select>
            </div>        
            <div class ="form-element my-4">
                <input type ="text" class ="form-control" name = "description" placeholder ="say something about your book">

            </div>
            <div class ="form-element ">
                <input type = "submit" name = "create" value ="add a book" class = "btn btn-success">

            </div>
        </form>
    </div>
</body>
</html>