<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php
session_start();
    include("connection.php");
    include"functions.php";
    $user_data = check_login($con);


?>

<!DOCTYPE html>
<head>
    <title>ATM Application</title>
</head>
<body>
<a href="log_out.php"> Log out </a>
<style type= "text/css">

#text{
height: 25 px;
border-radius: 5px;
padding: 4px;
border solid thing #aaa;
width: 100%;
}

#button{
text-align: center;
padding: 10px;
width: 200 px;
color: black;
font-weight: bold;
background-color: #FFDB58;
border: solid 2px;
}

#management{
padding: 10px;
width: 200px;
color: white;
background-color: black;
border: solid 2px;
font-weight: bold;

}

#help{
padding: 10px;
width: 200px;
color: black;
font-weight: bold;
background-color: red;
border: solid 2px;
}

#box{
background-color: #f5f5dc;
margin: auto;
width: 300px;
padding: 20px;
}
</style>

<div id= "box">
<h1>Welcome to FHSU Banking</h1>
   <script>
      function updateDateTime() {
        const now = new Date();
        const currentDateTime = now.toLocaleString();
        document.querySelector('#datetime').textContent = currentDateTime;
      }

      setInterval(updateDateTime, 1000);
    </script>


    <span id="datetime"></span><br> <br>

Hello, <?php echo $user_data['accountOwner']; ?> <br>
Please select from the following menu
<br>

<br>
<br>

<br> <br>
<a id="button" href = "withdraw.php" > WITHDRAW</a>
<br> <br> <br>
<a id="button" href = "deposit.php">DEPOSIT</a>
<br><br><br>
<a  id="button" href = "view_balance.php"> VIEW BALANCE</a>
<br> <br><br> <br><br>
  <a id="management" href = "sign_up.php">For Bank Managers</a>
  <a id="help" href = "text">HELP</a>
 <br>
</div >
</body>
</html>
