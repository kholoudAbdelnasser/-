<?php
$title ='result';
include "layout/header.php";


$mas=[];
if($_SESSION['user']['result'] <=25)
{

$mas = "<span class='text-danger text-center  font-weight-bold'> please contact the pationt to find out the reason for the bad evaluation:   </span>" .$_SESSION['user']['number'] ;
}else{
    $mas = "<span class='text-wight bg-info text-center  font-weight-bold'>  Thank you   </span>"  ;
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
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Question?</th>
      <th scope="col">Reviews</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <th>Are You Satisfied about cleanliness? </th>
      <td><input type="test" name="clean"   value="<?= $_SESSION['user']['clean'] ?>"></td>
     
  
    </tr>
  
    <tr>
      
      <th>Are You Satisfied about service prices? </th>
      <td><input type="test" name="clean"   value="<?= $_SESSION['user']['price'] ?>"></td>
   
    </tr>
    <tr>
      
      <th>Are You Satisfied about the nursing service? </th>
      
     <td> <input type="text" name="clean" id="clean" value="<?= $_SESSION['user']['clean'] ?>" ></td>
    </tr>
    <tr>
      
      <th>Are You Satisfied about Doctors?</th>
      <td><input type="test" name="clean"   value="<?= $_SESSION['user']['hos'] ?>"></td>
  
    </tr>
    <tr>
      
      <th>Are You Satisfied about hospital </th>
      <td><input type="test" name="clean"   value="<?= $_SESSION['user']['hospital'] ?>"></td>
  
    </tr>
    <tr class="border ">
      
      <th>Total Review </th>
      <td>
        <?php
        if($_SESSION['user']['result']<=25){
            echo 'bad';
        }else
        {
            echo   'Good' ;
        }
        ?>
      </td>
  
    </tr>
    <tr>
      
     
      <th class="border text-center bg-info " colspan="2">
        <?php
      


      echo $mas ?? "";
        ?>



      </th>

  
    </tr>
  </tbody>
</table>
        </div>
     
    </div>
</div>

<?php

include "layout/footer-des.php"
?>