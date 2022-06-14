<?php
  include "layoutbank/headerb.php";
$rat=0;
$newamount=0;
$errs=[];
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST){
    if(empty($_POST['username'])){
        $errors['username'] = "<div class='text-danger font-weight-bold'> username Is Required </div>";
    }
    if(empty($_POST['amount'])){
        $errors['amount'] = "<div class='text-danger font-weight-bold'> amount Is Required </div>";
    }
    if(empty($_POST['years'])){
        $errors['years'] = "<div class='text-danger font-weight-bold'> years Is Required </div>";
    }
  if($_POST['years']<=3){
$rat = ($_POST['amount']*0.1)*$_POST['years'];


  }else
  {
    $rat = ($_POST['amount']*0.15)*$_POST['years'];
  }
$newamount = $_POST['amount']+$rat;
$numyears=$_POST['years']*12;
$monthly=$newamount/$numyears;
}
  ?>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5 text-dark h1">
              Bank
            </h1>
        </div>
        <div class="col-6 offset-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" name="username" id="username" value="<?= $_POST['username'] ?? "" ?>" class="form-control"  aria-describedby="helpId" >
                    <?= $errors['username'] ?? "" ?>
                </div>
                <div class="form-group">
                    <label for="amount">amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" value="<?= $_POST['amount'] ?? "" ?>"   >
                    <?= $errors['amount'] ?? "" ?>
                   
                </div>
                <div class="form-group">
                    <label for="years">years</label>
                    <input type="number" name="years" id="years" class="form-control" value="<?= $_POST['years'] ?? "" ?>"   >
                    <?= $errors['years'] ?? "" ?>
                  
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark btn-lg form-control"> Login </button>
                </div>
            </form>
        </div>
        <div class="col-6 text-center offset-4 ">
            <table class="table " >
  <thead>
    <tr >
  
      <th scope="col">username  </th>
      <th scope="col">intrest rat</th>
      <th scope="col">lona after interast</th>
      <th scope="col">monsaty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>  <?= $_POST['username'] ?? ""  ?></td>
      <td> <?= $rat ?? ""  ?></td>
      <td> <?= $newamount ?? ""  ?></td>
      <td> <?= $monthly  ?? "" ?></td>
    </tr>
   
  </tbody>
</table>
        </div>
    </div>
</div>
  <?php
  include "layoutbank/footerb.php"
  ?>