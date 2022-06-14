<?php
$title ='Number';
include "layout/header.php";
$users = [
    
      
];
       
   


$errors=[];
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST){
    if(empty($_POST['number'])){
        $errors['number'] = "<div class='text-danger font-weight-bold'> number Is Required </div>";
    }
    if(empty($errors)){
   
            // correct user
            $_SESSION['user']['number']=$_POST['number'];
            header('location:Review.php');die;

        }
    }
   


?>
  


  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5 text-dark h1">
             Hospital
            </h1>
        </div>
        <div class="col-4 offset-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Email"> PHone Number</label>
                    <input type="number" name="number" id="number" value="<?= $_POST['number'] ?? "" ?>" class="form-control"  aria-describedby="helpId" >
                    <?=  $errors['number'] ?? " " ?>
                   
                </div>
              
                <div class="form-group">
                    <button class="btn btn-outline-dark btn-lg form-control"> submit </button>
                </div>
            </form>
            <?= $errors['number'] ?? "" ?>
        </div>
    </div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   

<?php
include "layout/footer-des.php";
?>
