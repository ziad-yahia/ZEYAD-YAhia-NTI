<?php

$title = "supermarket";

include_once "./layouts/header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST) ){

    $errors=[];
    if(empty($_POST['username'])){

        $errors['usernameError']="<p class='text-danger font-weight-bold'>* User Name Is Requierd</p>";
    }
   
    if(empty($_POST['VarietiesNumber'])) {
        $errors['VarietiesNumber']="<p class='text-danger font-weight-bold'>*Number Of Varieties IS Requierd</p>";
    }

}

// if($_POST){
//   $llo="  for($i=0; $i < $_POST['VarietiesNumber'];$i++){


// echo  $result=' <input type='text' class='form-control col-md-4'>  ';
// }
// ";
// } 
// $VarietiesNumber=$_POST['VarietiesNumber'];







?>

<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    .image {
        background: url('images/2011.i003.013_shopping bag basket zero waste eco illustration.jpg') no-repeat center/cover;
        /* min-width:450px; */
        min-height: 250px;
    }
</style>
<section class="container mt-5">

    <div class="col-md-12 h1 text-center font-weight-blod text-primary">
        SuperMarket
    </div>

    <div class="d-flex justify-content-between mt-5">
        <section class="image col-md-6"></section>

        <section class="col-md-6 ">
            <form class="border border-primary p-4 mt-5" method="post">

                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">User Name</label>
                    <input type="text" name="username" value="<?php echo $_POST['username'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo $errors['usernameError']?? ""; ?>
                </div>
             
                <div class="input-group mb-3">
                     
                    <select name="Cites" class="custom-select" id="inputGroupSelect02">
                        <option selected>select Your Cite</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Alex">Alex</option>
                        <option value="Giza">Giza</option>
                        <option value="Others">Others</option>

                    </select>
                    

                </div>
                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">Number Of Varieties</label>
                    <input type="number" name="VarietiesNumber" value="<?php echo $_POST['VarietiesNumber'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo $errors['VarietiesNumber']?? ""; ?>

                </div>
                <button type="submit" class="btn btn-outline-primary col-md-12 ">Enter Products</button>

            </form>

        </section>



    </div>
</section>


 
<section class="container">
   

<!-- <div class='d-flex justify-content-around  p-5'>
        <h2>Product Name</h2>
        <h2>Price</h2>
        <h2>Quantities</h2>
        <h2>Sub Total</h2>
    </div> -->

  
    <?php


    if(!empty($_POST)){

        $menu="<div class='d-flex justify-content-around  p-1'>
        <h2>Product Name</h2>
        <h2>Price</h2>
        <h2>Quantities</h2>
        
    </div>";

    echo $menu;
     
     for($i=0;$i< $_POST['VarietiesNumber'];$i++){    
        echo  $dotihis="<div class='d-flex justify-content-around p-1'>
        <h2><input type='text' class='form-control  '></h2>
        <h2><input type='number' class='form-control  '></h2>
        <h2><input type='number' class='form-control  '></h2> 

        </div>"  ;
    }

}
    // for($i=0;$i< $_POST['VarietiesNumber'];$i++){

    //     echo  $dotihis="<input type='text' class='form-control  '>  ";


    //     $dotihis.="<br>";
    // }
   
 
    
    ?>  
   
</section>
<?php

include_once "./layouts/scripts.php";

?>