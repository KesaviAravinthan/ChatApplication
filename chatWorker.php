
<?php
session_start();
//sender is customer   .   receiver is tradesman
//customer page

// $_SESSION["customer"] = "mathi";
// $_SESSION["tradesman"] = "kesavi";

$_SESSION["customer"] = "kesavi";
$_SESSION["tradesman"] = "mathi";
$conn = mysqli_connect("localhost","root","","fix","3310");

 if (isset($_GET["send"])) {
     $msg= $_GET["msg"];
    $customer = $_SESSION["customer"];
    $tradesman= $_SESSION["tradesman"];
    $hiring_id =1;
    $sql = "insert into chat (message,sender,receiver,hiring_id) VALUES ('$msg','$customer','$tradesman','$hiring_id');";
    
    mysqli_query($conn,$sql);       //to send data to DB
      
}

?>

<html>
  <head>
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: rgb(223, 217, 217);
      }
      #button_register {
        border-radius: 10px;
        background-color: #142f61;
      }
      #button_paynow,#button_change {
        border-radius: 30px;
        background-color: grey;
      }
      #rating_star {
        color: #df8918;
        position: relative;
        top: 0.4rem;
      }
      #drop_down{
        float: right;
      }
      #send_icon,
      #more_vert {
        float: right;
      }
      #send_icon,#more_vert
      {
        background-color:  #142f61;
        color: white;
      }


      #tradesman_box {
        background-color: white;
      }
      #box1,
      #box2 {
        border-right: 0.2rem solid #142f61;
      }
      #heading_map {
        background-color: #142f61;
      }
      #fixed_map {
        height: 22rem;
        background-color: rgb(218, 236, 247);
      }
      #chat_box {
        background-color: rgb(218, 236, 247);
        height: 34.5rem;
        margin-left: 5rem;
        margin-right: 2rem;
      }
      #receive_msg {
        background-color: rgba(68, 198, 202, 0.945);
        border-radius: 2rem;
        padding: 0.25rem 1.5rem;
      }
      #send_msg {
        background-color: white;
        border-radius: 2rem;
        padding: 0.25rem 1.5rem;
      }
      #chat_bottom , #chat_top{
        background-color: white;
      }
      #image_chat {
        border-radius: 50%;
        width: 2rem;
        height: 2rem;
      }
      #image_detail {
        border-radius: 50%;
        width: 4rem;
        height: 4rem;
      }
      #username_tradesman,
      #profile_tradesman {
        display: grid;
        place-items: center;
      }
      #chat_boxx {
        overflow-x: hidden;
        overflow-y: auto;
      }
     
      @media (max-width: 988px) {
        #chat_box {
          margin-right: 12rem;
          margin-left: 12rem;
        }
      }
      @media (max-width: 768px) {
        #tradesman_box {
          text-align: center;
        }
        #chat_box {
          margin-right: 8rem;
          margin-left: 8rem;
        }
        #box1,
        #box2 {
          border-bottom: 0.2rem solid #142f61;
        }
      }
      @media (max-width: 600px) {
          
        #chat_box {
          margin-right: 3rem;
          margin-left: 3rem;
        }
      }

      /* ----------------------------------------------------------------------------------------------- */
      @font-face {
        font-family: 'Lucida Fax';
        src: url(fonts/Lucida\ Fax\ Regular.ttf);
    }

    @font-face {
        font-family: 'proxima nova';
        src: url(fonts/Proxima\ Nova\ Regular.ttf);
    }

    /* ------------------------------------------------------------------------------------------------ */

    .footer {
        background-color: #142f61;
        color: white;
    }

    .footer1234 {
        font-family: 'Lucida Fax', Arial, Helvetica, sans-serif;
        font-style: italic;
        font-weight: 600;
        font-size: calc(15px + 0.1vw);
    }

    .footer234 {
        padding-top: 25px;
    }

    .footer2 form input[type=submit] {
        background: #5c726a;
        border: none;
        padding: 3px 15px;
        border-radius: 10px;
        color: #fff;
        margin-top: 9px;
        margin-left: 6px;
        height: 32px;
        font-family: 'Lucida Fax', Arial, Helvetica, sans-serif;
        font-style: italic;
        font-weight: 600;
    }
    .footer2 form input[type=submit]:hover{
        background-color: #d1d4d3;
        color: black;
        
    }

    .footer2 form input[type=email] {
        width: 330px;
        height: 30px;
        border: none;
        border-radius: 3px;
        margin-top: 9px;
    }

    .footer3 span {
        margin-left: 5px;
        padding: 0;
    }

    .footer3 a {
        background: #d1d3d2;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        padding: 0px 1px;
        margin: 3.5px 0.5vw;
        font-size: 20px;
    }
    .footer3 a:hover{
        background-color: white;
    }

    .footer3 a i {
        color: #142f61;
        padding-left: 4.5px;
        padding-bottom: px;
    }

    .copyright {
        border-top-style: solid;
        border-color: white;
        border-width: 3.5px;
        font-size: calc(17px + 0.1vw);
        font-family: 'proxima nova', Arial, Helvetica, sans-serif;
        font-weight: lighter;
    }

    /* ----------------------------------------------------------------------------------------------------------- */

    @media (max-width: 1400px) {

        .footer2 form input[type=submit] {
            font-weight: 600;
        }

        .footer2 form input[type=email] {
            width: 310px;
        }
    }

    @media (max-width: 1200px) {

        .footer2 form input[type=email] {
            width: 300px;
        }
    }

    @media (max-width: 992px) {

        .footer1 {
            margin-bottom: -28px;
        }

        .footer34 {
            display: grid;
            justify-content: center;
        }

        .footer3 {
            margin-right: 150px;
        }

        .copyright {
            margin-top: -20px;
        }

    }

    @media (max-width: 768px) {

        .footer2 form input[type=email] {
            width: 360px;
        }

        .footer1 {
            display: grid;
            justify-content: center;
            margin-bottom: -22px;
        }

        .logo {
            margin-right: 12px;
            margin-top: -12px;
        }

        .footer34 {
            display: grid;
            justify-content: center;
        }

        .footer3 {
            margin-right: 20px;
            width: 250px;
        }

        .copyright {
            margin-top: -20px;
        }

        .footer3 a {
            width: calc(20px + 0.3vw);
            height: calc(20px + 0.3vw);
            padding: 0px 1px;
            margin: 3.5px 0.9vw;
            font-size: calc(13px + 0.3vw);
        }

        .footer3 a i {
            color: #142f61;
            padding-left: 4.5px;
            padding-bottom: px;
        }

        .footer2 form input[type=submit] {
            height: 34px;
            
        }

        .footer2 form input[type=email] {
            height: 32px;
            
        }
    }

    @media (max-width: 576px) {

        .footer1 {
            display: grid;
            justify-content: center;
            margin-bottom: -24px;
        }

        .logo {
            margin-right: 9px;
            margin-top: -14px;
        }

        .footer2 form input[type=submit] {
            width: 60%;
        }

        .footer2 form input[type=email] {
            width: 80%;
        }

        .footer3 {
            margin-right: 20px;
            width: 250x;
            margin-left: 4%;
        }

        .copyright {
            margin-top: -25px;
        }
    }

    @media (max-width: 300px) {
        .footer3 {
            margin-right: 02px;
            width: 250x;
            margin-left: 4%;
        }

        .copyright {
            margin-top: -15px;
        }
    }
    </style>
  </head>
  <body class="">
    <!-- hiring_status_box -->
    <div class="text-center my-3" id="hiring_status_box">
      <button
        type="submit"
        class="btn col-4 col-md-4 col-lg-3"
        id="button_register"
      >
        <span class="text-white fw-bold"
          >Finish</span
        >
      </button>
    </div>
    <!-- ----------------------  -->
    <div class="row">
      <div class="col-12 col-lg-5 mb-4">
        <div id="chat_box" class="d-flex flex-column">
          <div id="chat_top" class="p-2">
            <div class="">
              <div>
                <img
                  src="laksman.JPG"
                  class=""
                  id="image_chat"
                />
                <span class="material-icons btn" id="more_vert" data-toggle="dropdown">more_vert</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Options</a>
                </div>
              </div>
            </div>
          </div>

         <div id="chat_boxx">
              <!-- chat message 1 -->

        <?php
         $sql = "SELECT * from chat where hiring_id=1;";
         $chats = mysqli_query($conn,$sql);
         if(!$chats){
             die('QUERY FAIL!');
         }
         while($chat = mysqli_fetch_assoc($chats)){
             if(($chat["sender"]== $_SESSION["tradesman"])){
                echo '
                <div class="row d-flex justify-content-between my-3 fw-bold">
            <div class="col-8">
              <div class="mx-2" id="receive_msg"><span>'.$chat["message"].' </span></div>
            </div>
            <div class="col-4"></div>
          </div>
                ';
             }
             if($chat["sender"]== $_SESSION["customer"]){
                 echo'
                 <div class="row d-flex justify-content-between my-3 fw-bold">
            <div class="col-4"></div>
            <div class="col-8">
              <div class="mx-2" id="send_msg"><span>'.$chat["message"].'</span></div>
            </div>
          </div>

          ';
             }
           }
        ?>
          
        
         </div>
          <div id="chat_bottom" class="mt-auto p-2">
            <div class="row" class="input-group">
            <form id="frm" method="GET" class="row  p-0 m-0">
                <div class="col m-0">
                    <input id="msg" name="msg" type="text" class="form-control" placeholder="Type a message......">
                </div>
                <div class="col-1" >
                    <button class="material-icons btn " id="send_icon" name="send" type="button"> send </button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>


     




      <div class="col-12 col-lg-6">
        <div id="tradesman_box" class="row mb-4 fw-bold">
          <div id="box1" class="row col-12 col-md-6 col-lg-4 m-1 d-md-flex my-3">
            <div id="profile_tradesman" class="col-12 col-md-3 col-lg-12">
              <img src="laksman.JPG" class="" id="image_detail" />
            </div>
            <div id="username_tradesman" class="ps-2 col-12 col-md-9 col-lg-12 ">@jayadevKaju14</div>
          </div>
          <div id="box2" class="col-12 col-md-5 col-lg-3 m-1 ps-4 my-3">
            <div id="detail">
              <div>Jayabawan</div>
              <div>Plumber</div>
              <div>0775656223</div>
              <div>
                4.8 <span id="rating_star" class="material-icons"> grade</span>
              </div>
            </div>
          </div>
          <div
            id="box3"
            class=" col-12 col-md-11 col-lg-4 m-1 text-center p-2 my-3"
          >
          
          <form id="payment" method="GET" class="">
            
          <div class="d-flex justify-content-center flex-lg-column">
              <div class="pb-2 pe-2">
                Service Amount : <span id="pay_amount"></span>
              </div>
              <div>
                <input id="money" name="money" type="text" class="form-control" placeholder="enter money">
              </div>
          </div>

            <button type="button" class="btn px-5 mt-3" id="button_paynow">
              <span class="text-white fw-bold">Register</span>
            </button>
          </form>
          </div>
        </div>

        <div id="tradesman_map" class="row my-2">
          <div id="heading_map" class="text-white fw-bold py-2">
            Live Location
          </div>
          <div id="fixed_map"></div>
        </div>
      </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row pt-4">

                <!-- --------------------footer1 -------------------------------------->
                <div class="col-lg-2 col-md-4 text-center footer1 footer1234">
                    <div class="row">
                        <div class="col logo">
                            <img src="logo.jpg" alt="QuickFIX" width="130">
                        </div>
                        <div class="col mt-2 mb-3">
                            <span>
                                Your Needs <br>
                                Our Priorities
                            </span>
                        </div>
                    </div>
                </div>

                <!------------------------------ footer2 --------------------------------->
                <div class="col text-center footer234 footer2 footer1234">
                    <span>
                        Join the conversation, Subscribe to receive
                        <br>
                        emails for events, updates and offers.
                    </span>
                    <form action="" class="">

                        <input type="email" id="subscribe" name="subscribe">

                        <input type="submit" class="" value="SUBSCRIBE">

                    </form>

                </div>

                <!------------------------- footer 3&4 ----------------------------------------->
                <div class="col-lg-4 footer234 footer34 footer1234">
                    <div class="row" style="min-height: 100px;">
                        <div class="col footer3 pb">
                            <div class="row">
                                <span>Follow us</span>
                            </div>

                            <div class="row">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                        </div>

                        <div class="col footer34 footer4">
                            <span>Call us
                                <br>
                                0212223456</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <span class="text-center mb-2 copyright pt-1">
                    Copyright &copy;2021 QuickFIX. All rights reserved
                </span>
            </div>
        </div>
    </div>

  
    <script>
$(document).ready(function() {
            $("#send_icon").click(function() {
              
                $.ajax({
                    url: 'chatW1.php',
                    type: 'GET',
                    data: $("#frm").serialize(),
                    success: function(data) {
                      // $("#chat_boxx").html(data);
                      $("#chat_boxx").append(data);
                        // $("").html(data).appendTo("#chat_boxx");
                        $("#frm")[0].reset();
                    }
                });
            });

            $("#button_paynow").click(function() {
              
              $.ajax({
                  url: 'chatW1.php',
                  type: 'GET',
                  data: $("#payment").serialize(),
                  success: function(data) {
                    $("#box3").html(data);
                    // $("#chat_boxx").append(data);
                      // $("").html(data).appendTo("#chat_boxx");
                      $("#payment")[0].reset();
                  }
              });
          });


         



});

</script>

  </body>

</html>
