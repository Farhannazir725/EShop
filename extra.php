<?php
// session_start();
// include 'admin/connection.php';
 include("header.php");  
// if(!isset ($_SESSION['username'])){
// ?>
<!--  <script>window.location.href = 'login.php';</script> -->
 <?php
// }
// else{
// echo $_SESSION['username'];
// }

// $pid= $_GET['pid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <style>
      


img{
    width:100px;
    height:100px;
}
</style>   
</head>
<body>
  
 <div class="container my-5">
  <div class="row">
    <div class="col-lg-3">
      <form action="managecart.php">
    <div class="card" >
      <img src="admin/images/1.png" class="card-img-top" >
      <div class="card-body text-center">
         <h5 class="card-title">Ac Voltas</h5>
        <p class="card-text">Prcie : 10000</p>
        <button type="submit" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_name" value="Duct 1">
         <input type="hidden" name="price" value="10000">
  </div>
</div>
</form>
    </div>

    
<!-- card 2 -->
    <div class="col-lg-3">
      <form action="managecart.php">
    <div class="card" >
      <img src="admin/images/1.png" class="card-img-top" >
      <div class="card-body text-center">
         <h5 class="card-title">Ac Voltas</h5>
        <p class="card-text">Prcie : 10000</p>
        <button type="submit" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_name" value="Duct 1">
         <input type="hidden" name="price" value="10000">
  </div>
</div>
</form>
    </div>
<!-- card 3 -->
    <div class="col-lg-3">
      <form action="managecart.php">
    <div class="card" >
      <img src="admin/images/1.png" class="card-img-top" >
      <div class="card-body text-center">
         <h5 class="card-title">Ac Voltas</h5>
        <p class="card-text">Prcie : 10000</p>
        <button type="submit" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_name" value="Duct 1">
         <input type="hidden" name="price" value="10000">
  </div>
</div>
</form>
    </div>
<!-- card 4 -->
    <div class="col-lg-3">
      <form action="managecart.php">
    <div class="card" >
      <img src="admin/images/1.png" class="card-img-top" >
      <div class="card-body text-center">
         <h5 class="card-title">Ac Voltas</h5>
        <p class="card-text">Prcie : 10000</p>
        <button type="submit" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_name" value="Duct 1">
         <input type="hidden" name="price" value="10000">
  </div>
</div>
</form>
    </div>

  </div>
 </div>
    

     
</body>
</html>
