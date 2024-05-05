<?php
include("db.php");

if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    $target_path = "./images/";
    $target_path = $target_path . basename($_FILES['image']['name']);
    // echo $target_path;
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        echo "Sorry, file not uploaded, please try again!";
    }

    $sql = "INSERT INTO `main`(`name`, `description`, `type`,`image`)
    VALUES ('$name','$description','$type','$target_path')";
    if (!$db_conn->query($sql)) {
        echo $db_conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://www.verse.in/img/logox600.jpg">
    <title> VerSe </title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="app.css" rel="stylesheet" />
  </head>
  <body>
    <div class="spinner-wrapper">
      <span class="loader"></span>
    </div>
  <?php include('./navbar.php') ?>
<div class="container">
<form method="POST" action="" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="name">Name :</label>
      <input type="text" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="pwd">Image</label>
      <input type="file" class="form-control" placeholder="choice image" name="image">
    </div>
    <div class="mb-3">
      <label for="description">Description</label>
      <input type="text" class="form-control" placeholder="Enter description " name="description">
    </div>
    <div class="mb-3">
        <div>
            <label class="mb-4">Image Type</label>
        </div>
        <input type="radio" name="type" id="main" value="main" checked>Main
        <input type="radio" name="type" id="nature" value="nature">Nature
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>


    <?php include('./footer.php') ?>
    <!-- Bootstrap JS Bundle -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->

    <script src="./app.js"></script>

  </body>
</html>
