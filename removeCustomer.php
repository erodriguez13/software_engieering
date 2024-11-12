<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $accountNumber = $_POST['accountNumber'];
    $accountPin = $_POST['accountPin'];
    if( !empty($accountNumber) && !empty($accountPin) && is_numeric($accountNumber) )
    {
        // add to database
        $user_id=random_num(20);
        $query = "insert into userAccounts(user_id, accountNumber, accountOwner,socialSecurity, accountPin, dateOfBirth, location) values ('$user_id', '$accountNumber','$accountOwner', '$socialSecurity','$accountPin', '$dateOfBirth', '$location')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else
    {
        //if wrong information format is submitted, let user know
        echo "Please enter valid name and pin";
    }

}
?>

<!DOCTYPE html>
<head>
    <title>For Bank Management </title>
</head>
<body>

    <style type="text/css">

#text{
height: 25 px;
border-radius: 5px;
padding: 4px;
border solid thing #aaa;
width: 100%;
}

#button{
padding: 10px;
width: 300px;
color: black;
background-color: green;
border: none;
}

#management{
padding: 10px;
width: 300px;
color: black;
background-color: lightskyblue;
border: none;
}

#box{
background-color: #blue;
margin: auto;
width: 300px;
padding: 20px;
}
#orangebutton{
padding: 10px;
font-size: 18px;
width: 300px;
color: black;
font-weight: bold;
background-color: orange;
border: none;
}
</style>

<div id= "box">
    <form method= "post">

        <div style="font-size: 20px;margin: 10px; color: black;"> Deactive Customer: </div>
        Account Number:
        <input id="text" type = "text" name="accountNumber"> <br>

       
        Social Secutiry:
        <input id="text" type = "socialSecurity" name="socialSecurity"> <br>
       


<br><br><br>

        <br>
        <input id="orangebutton" type = "submit" value="SUBMIT DEACTIVATION FORM"> <br> <br> <br>
 <a id="management" href = "index.php">Main Menu</a>
<br> <br><br>

        <a href="login.php">Click to Log In</a>
    </form>
</div>
</body>
</html>
