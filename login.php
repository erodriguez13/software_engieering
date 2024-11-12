<?php


session_start();
    include("connection.php");
    include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $accountNumber = $_POST['accountNumber'];
    $accountPin = $_POST['accountPin'];
    if( !empty($accountNumber) && !empty($accountPin) && is_numeric($accountNumber) )
    {
        // compare from database
        $query = "select * from userAccounts where accountNumber = '$accountNumber' limit 1";

        $result = mysqli_query($con, $query);


        if($result)
        {
             if($result && mysqli_num_rows($result) > 0 )
            {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['accountPin']=== $accountPin)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
            }
        }

      //if wrong information format is submitted, let user know
        echo "Our system does not recognize that combination of user name and pin";
    }else
    {
        //if wrong information format is submitted, let user know
        echo "Please enter valid name and pin";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Welcome to your account</title>
</head>
<body>
<style type= "text/css">
#text{
height: 25 px;
border-radius: 5px;
padding: 4px;
border solid thing #aaa;
width: 100%;
}

#button{
padding: 10px;
width: 150px;
color: black;
background-color: green;
border: none;
}

#management{
padding: 10px;
width: 200px;
color: black;
background-color: lightskyblue;
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
    <form method= "post">
        <div style="font-size: 20px;margin: 10px; color: black;"> Loggin in: </div>
     Insert debit card or Account Name:
        <input id="text" type = "text" name="accountNumber"> <br>
Type in your PIN
        <input id="text" type = "password" name="accountPin"> <br><br><br>

        <input id="button" type = "submit" value="ENTER"><br> <br> <br>

        <a id="management" href = "sign_up.php">For Bank Managers</a>
    </form>
        
</div>

</body>
</html>
