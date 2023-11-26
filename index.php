<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
  </head>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

  h2 {
    font-family: 'Permanent Marker', cursive;
  }
</style>

<body style="background: linear-gradient(to right, #B6C1CB, #535C65);">
    <form action="insert.php" method="post">
      <div class="container">
        <div class="row justify-content-center bg-white m-auto shadow-sm p-3 mb-5 bg-body rounded mt-3 py-3 col-md-6">
          <h2 class="text-center text-secondary" style="margin-bottom: 50px;">TODO LIST</h2>
          <div class="col-8">
            <input type="text" name="list" class="form-control" placeholder="Insert Here...">
          </div>
          <div class="col-2" style="margin-bottom: 9px;">
            <button class="btn btn-secondary btn-end rounded-pill"><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>
    </div>
  </form>

  <!-- GET DATA FORM LOCALHOST -->
  <?php
  include "config.php";
  $sql = mysqli_query($con, "SELECT * FROM `table todo`");
  $num = 1;
  ?>
  <!-- Tampilkan Data -->
  <div class="container">
    <h2 class="d-flex justify-content-center" style="color: #ffff;">Undone List</h2>
    <div class="row justify-content-center bg-white m-auto shadow-sm p-3 mb-1 bg-body rounded mt-3 py-3 col-md-6" style="width: 85%;">
      <table class="align-middle" style="height: 42px;">
        <tbody>
          <?php
          while($row = mysqli_fetch_array($sql)) {
          ?>
            <tr class="border border-2">
              <td class="text-center border-end" style="width: 7%;"><?php echo $num++; ?></td>
              <td><?php echo $row['List']; ?></td>
              <td style="width: 11%;" class="justify-content-end"><a href="delete.php? ID= <?php echo $row['ID']; ?>" class="btn btn-secondary d-flex justify-content-center"><i class="fa-solid fa-check me-2 align-self-md-center" style="color: #ffffff;"></i>Done</a></td>
              <td style="width: 11%;" class="justify-content-end"><a href="updatePage.php? ID= <?php echo $row['ID'] ?>" class="btn btn-secondary d-flex justify-content-center"><i class="fa-solid fa-pen-to-square me-2 align-self-md-center" style="color: #ffffff;"></i>Update</a></td>
              <td style="width: 11%;" class="justify-content-end"><a href="delete.php? ID= <?php echo $row['ID']; ?>" class="btn btn-secondary d-flex justify-content-center"><i class="fa-solid fa-trash-can-arrow-up me-2 align-self-md-center" style="color: #ffffff;"></i>Delete</a></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>