<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php
session_start();
    include("connection.php");
    include"functions.php";
    $user_data = check_login($con);


?>

<!DOCTYPE html>
<head>
    <title>Deposit</title>
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
width: 150px;
color: black;
font-weight: bold;
background-color: #FFDB58;
border: none;
}

#management{
padding: 10px;
width: 200px;
color: black;
background-color: lightskyblue;
border: none;
font-weight: bold;

}

#help{
padding: 10px;
width: 200px;
color: black;
font-weight: bold;
background-color: red;
border: none;
}

#box{
background-color: #f5f5dc;
margin: auto;
width: 300px;
padding: 20px;
}
</style>

<div id= "box">
<h1>Deposit</h1>
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
Pleas confirm the ammount you wish to deposit!
<br>

<br>
<br>
<input type = "currency" name="depositAmount" placeholder="$0.00"> <br>
 <br> <br>
<input id="button" type = "Submit" value="Deposit">
<br> <br>

 <a id="management" href = "index.php">cancel</a
<br> <br>

<br> <br>
  
  <a id="help" href = "text">HELP</a>
 <br>
</div >
</body>
</html>
