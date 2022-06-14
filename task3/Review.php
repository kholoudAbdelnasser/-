<?php
$title = 'Review';
include "layout/header.php";
$mas = [];
$result = 0;
$values = [

  'clean' ,
  'price' ,
  "service" ,
  'hos',
  'hospital'

];
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST) {
  if(empty( $_POST['clean'])){
      $errors['clean'] = "<div class='text-danger font-weight-bold'> clearliness level Is Required </div>";
  }

  
  if(empty( $_POST['price'])){
      $errors['price'] = "<div class='text-danger font-weight-bold'> price servers Is Required </div>";
  }
  if(empty($_POST['service'])){
      $errors['service'] = "<div class='text-danger font-weight-bold'> nursing service Is Required </div>";
  }
  if(empty( $_POST['hos'])){
      $errors['hos'] = "<div class='text-danger font-weight-bold'> doctors Is Required </div>";
  }
  if(empty( $_POST['hospital'])){
      $errors['hospital'] = "<div class='text-danger font-weight-bold'> Hospital camness Is Required </div>";
  }
  if (empty($errors)) {
foreach($values as $key=>$value){
    if ($_POST[$value]  == "bad") {
      $result += 0;
    } elseif ($_POST[$value]   == "good") {
      $result += 3;
    } elseif ($_POST[$value]   == 'verygood') {
      $result += 5;
    } elseif ($_POST[$value]   == 'exll') {
      $result += 10;
    }}

    $_SESSION['user']['clean'] = $_POST['clean'];

    $_SESSION['user']['price'] = $_POST['price'];
    $_SESSION['user']['service'] = $_POST['service'];
    $_SESSION['user']['hos'] = $_POST['hos'];
    $_SESSION['user']['hospital'] = $_POST['hospital'];
    // print_r($_SESSION);die;
 
    $_SESSION['user']['result'] = $result;
    header('location:Result.php');
    die;
  }
}

?>



<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center mt-5 text-dark h1">
        Review
      </h1>
    </div>
    <div class="col-12">
    <form action="" method="post">
   
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Question?</th>
            <th scope="col">Bad</th>
            <th scope="col">Good</th>
            <th scope="col">Very Good</th>
            <th scope="col">Excellent</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <th>Are You Satisfied about cleanliness? </th>
            <td><input type="radio" name="clean" value="bad"></td>
            <td><input type="radio" name="clean" value="good"></td>
            <td><input type="radio" name="clean" value="verygood"></td>
            <td><input type="radio" name="clean" value="exll"></td>

          </tr>

          <tr>

            <th>Are You Satisfied about service prices? </th>
            <td><input type="radio" name="price" value="bad"></td>
            <td><input type="radio" name="price" value="good"></td>
            <td><input type="radio" name="price" value="verygood"></td>
            <td><input type="radio" name="price" value="exll"></td>

          </tr>
          <tr>

            <th>Are You Satisfied about the nursing service? </th>
            <td><input type="radio" name="service" value="bad"></td>
            <td><input type="radio" name="service" value="good"></td>
            <td><input type="radio" name="service" value="verygood"></td>
            <td><input type="radio" name="service" value="exll"></td>

          </tr>
          <tr>

            <th>Are You Satisfied about Doctors?</th>
            <td><input type="radio" name="hos" value="bad"></td>
            <td><input type="radio" name="hos" value="good"></td>
            <td><input type="radio" name="hos" value="verygood"></td>
            <td><input type="radio" name="hos" value="exll"></td>

          </tr>
          <tr>

            <th>Are You Satisfied about hospital </th>
            <td><input type="radio" name="hospital" value="bad"></td>
            <td><input type="radio" name="hospital" value="good"></td>
            <td><input type="radio" name="hospital" value="verygood"></td>
            <td><input type="radio" name="hospital" value="exll"></td>

          </tr>
        </tbody>
      </table>
    
  
      


        <div class="form-group">
          <button class="btn btn-outline-dark btn-lg form-control"> submit </button>
        </div>
      <?= $errors['clean'] ?? "" ?>
      <?= $errors['price'] ?? "" ?>
      <?= $errors['service'] ?? "" ?>
      <?= $errors['hos'] ?? "" ?>
      <?= $errors['hospital'] ?? "" ?>
  
    </form>
    </div>
  </div>
</div>









<?php

include "layout/footer-des.php"
?>