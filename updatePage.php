<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

  h2 {
    font-family: 'Permanent Marker', cursive;
  }

  .container {
  animation-name: example;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
}

@keyframes example {
  from {top: 370px;}
  to {top: 400px;}
}
</style>

<!-- GET DATA -->
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `table todo` WHERE `ID` = '$id'");
$data = mysqli_fetch_array($sql);
?>

<body class="bg-secondary">
    <form action="update.php" method="post">
        <div class="container position-absolute start-50 translate-middle">
        <div class="row justify-content-center bg-white m-auto shadow-sm mt-3 py-3 col-md-6" style="border-radius: 20px; height: 300px;">
          <h2 class="text-center text-secondary" style="font-size: 90px;">Update Data</h2>
          <div class="col-8">
            <input type="text" value="<?php echo $data['List'] ?>" name="list" placeholder="Insert Here..." class="form-control shadow-sm">
          </div>
          <div class="col-2">
            <button class="btn btn-secondary d-flex flex-row-reverse">Update<i class="fa-solid fa-pen-to-square me-2 align-self-md-center"></i></button>
            <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
          </div>
        </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>