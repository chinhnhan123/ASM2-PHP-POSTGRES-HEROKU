
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Create New product</title>
  </head>
  <body>
    
    <div class="container">
        <form action="handle_create.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" placeholder="Enter product name"
                    name="name"
                >
                
            </div>
            <div class="form-group">
                <br>
                <label for="exampleInputPassword1">image</label>
                <input type="file" class="form-control" 
                id="exampleInputPassword1" 
                name="image"
                >
            </div>
            <div class="form-group">
                <br>
            <label for="cars">Choose category:</label>
            <select name="category" id="cars">
                <option value="Car_toy">Car toy</option>
                <option value="Toy_plane">Toy plane</option>
                <option value="Guns_toy">Guns toy</option>
                <option value="musical_toys">Musical toys</option>
            </select>
            </div>
            <div class="form-group">
                <br>
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" 
                id="exampleInputPassword1" placeholder="Enter Price"
                name="price"
                >
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>