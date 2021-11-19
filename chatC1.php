<?php
$conn = mysqli_connect("localhost","root","","fix","3310");

$_SESSION["customer"] = "kesavi";
$_SESSION["tradesman"] = "mathi";



if(isset($_GET['msg'])){
    $msg= $_GET["msg"];
    $customer = $_SESSION["customer"];
    $tradesman= $_SESSION["tradesman"];
    $hiring_id =1;
    $sql = "insert into chat (message,sender,receiver,hiring_id) VALUES ('$msg','$tradesman','$customer','$hiring_id');";
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


}else{
    echo "NO POSTGET['submit'] created yet!!";
}




?>