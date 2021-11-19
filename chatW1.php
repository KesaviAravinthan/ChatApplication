<?php
$conn = mysqli_connect("localhost","root","","fix","3310");

$_SESSION["customer"] = "kesavi";
$_SESSION["tradesman"] = "mathi";



if(isset($_GET['msg'])){
    $msg= $_GET["msg"];
    $customer = $_SESSION["customer"];
    $tradesman= $_SESSION["tradesman"];
    $hiring_id =1;
    $sql = "insert into chat (message,sender,receiver,hiring_id) VALUES ('$msg','$customer','$tradesman','$hiring_id');";
   mysqli_query($conn, $sql);
   $id = mysqli_insert_id($conn);
  
    ?>
     <div class="row  d-flex justify-content-between my-3 fw-bold">
            <div class="col-4"></div>
            <div class="col-8">
              <div class="mx-2" id="send_msg"><span><?php echo $msg; ?></span></div>
            </div>
          </div>

    
<?php


}




if(isset($_GET['money'])){
  $money= $_GET["money"];
  $sql = "insert into chat (hiring_id) VALUES ('$money');";
 mysqli_query($conn, $sql);
 $id = mysqli_insert_id($conn);

  ?>
             <form id="payment" method="GET" class="">
            
            <div class="d-flex justify-content-center flex-lg-column">
                <div class="pb-2 pe-2">
                  Service Amount : <span id="pay_amount"></span>
                </div>
                <div>
                  <input id="moneychange" name="moneychange" type="text" class="form-control" placeholder="enter moneyyy">
                </div>
            </div>
  
              <button type="button" class="btn px-5 mt-3" id="button_change">
                <span class="text-white fw-bold disabled">Registered</span>
              </button>
            </form>
 
<?php


}


