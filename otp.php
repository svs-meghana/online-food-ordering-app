<?php
session_start();
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$x=rand(10000,50000);
$_SESSION["email"]=$_GET["eid"];
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port = '587';
	$mail->isHTML(true);
	$mail->Username = 'svsm.sura@gmail.com';
	$mail->Password = 'maggi@1998';
	$mail->SetFrom('svsm.sura@gmail.com');
	$mail->Subject = 'welcome to food odering app';
	$mail->Body = "your otp is TNPC-'$x'";
        $mail->AddAddress($_GET["eid"]);
 	if(!$mail->Send()) {
   	echo "Mailer Error: " . $mail->ErrorInfo;
	}
	
$_SESSION["otp"]=$x;

 $_SESSION["id"]=$_GET["id"];
 $_SESSION["password"]=$_GET["password"];
 $_SESSION["hno"]=$_GET["hno"];
 $_SESSION["sname"]=$_GET["sname"];
 $_SESSION["dname"]=$_GET["dname"];
 $_SESSION["cname"]=$_GET["cname"];
 $_SESSION["staname"]=$_GET["staname"];

?>
<html>
    <head>
        
            
        <style>
            input[type=text]:focus
            {
             border:2px solid red;  
            }
            input[type=password]:focus
            {
             border:2px solid red;  
            }
            
             h1
            {
                text-align:center;
                color:white;
                
            }
            table
            {
                text-align:center;
            }
            body
            {
                color:white;
                background-image: url("mypic.jpg");
                background-repeat: no-repeat;
            }
            
                
           
            </style>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        

        <h1>FOOD ORDERING APP</h1><br><br><br><br><br><br>
        <form action="signup.php" method="POST">
            <table align="center" border="1" width="2" cellspacing="1" cellpadding="3" >
                
                
                <tbody>
                    <tr>
                        <td>otp</td>
                        <td><input type="text" name="otp" id="otp"></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2"><input type="submit" value="verify"></td>
                        </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
