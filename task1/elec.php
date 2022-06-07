<?php

if($_POST){
  


    if($_POST['number1'] <=50){
        $x=$_POST['number1'];
        $elec=$x*0.5;
        $elecwithtaxs1=$elec*0.2;
        $elecwithtaxs=$elec+$elecwithtaxs1;
    }elseif($_POST['number1'] <=100){
        $x=$_POST['number1'];
        $elec=$x*0.75;
        $elecwithtaxs1=$elec*0.2;
        $elecwithtaxs=$elec+$elecwithtaxs1;
    }
    elseif($_POST['number1'] >=100){
        $x=$_POST['number1'];
        $elec=$x*1.2;
        $elecwithtaxs1=$elec*0.2;
        $elecwithtaxs=$elec+$elecwithtaxs1;
    }
    elseif($_POST['number1'] >=250){
        $x=$_POST['number1'];
        $elec=$x*1.5;
        $elecwithtaxs1=$elec*0.2;
        $elecwithtaxs=$elec+$elecwithtaxs1;
    }
    
};

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="border">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="h1 text-center text-dark">
                 Electrcity
                </div>
            </div>
            <div class="col-6 offset-3">
                <form  method="post">
                    <div class="form-group">
                        <label for="Name">electrcite</label>
                        <input type="number" name="number1" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <button class="btn btn-outline-dark btn-sm mb-5"> chick </button>
                </form>
            </div>
        
            <div class="col-6 m-auto  my-5">
                <div class="container">
                <div class="h6 text-center border py-3 bg-info  text-dark">
                <?php if(isset($elec)){echo  "the Electricity is: ".$elec;} ?>
             <br>
             <?php if(isset($elecwithtaxs)){echo  " the Electricity with additional is: ".$elecwithtaxs;} ?>
                </div>
                
</div>
             
              
                </div>
</div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>