<?php
// database connection
$con = mysqli_connect("localhost", "root", "", "websitedb") or die($con);

// post data
if (!empty($_POST))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    
    // check if user already exists in database
    $validateSql = "select * from users where (name='$name' or email='$email');";
    $res = mysqli_query($con, $validateSql);

    if (mysqli_num_rows($res) > 0)
    {

        $row = mysqli_fetch_assoc($res);
        if ($email == isset($row['email']))
        {
            echo "User with the email $email already exists ";
        }
    }
    else
    {
       

        // insert data into database
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $insertData = mysqli_query($con, $sql);


    /// throwing errors
        // if (isset($_POST['Submit'])) {
        //   $fromEmail = "john.doe@gmail.com";
        //   $toEmail = $email;
        //   $subjectName = 'Registeration Successful!';
        //   $message = "Hi '.$name', Thank you for registering! This is your confirmation email";
      
        //   $to = $toEmail;
        //   $subject = $subjectName;
        //   $headers = "MIME-Version: 1.0" . "\r\n";
        //   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //   $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
        //   $message = '<!doctype html>
        //     <html lang="en">
        //     <head>
        //       <meta charset="UTF-8">
        //       <meta name="viewport"
        //           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        //       <meta http-equiv="X-UA-Compatible" content="ie=edge">
        //       <title>Document</title>
        //     </head>
        //     <body>
        //     <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
        //       <div class="container">
        //                '.$message.'<br/>
        //                   Regards<br/>
        //                 '.$fromEmail.'
        //       </div>
        //     </body>
        //     </html>';
        //   $result = @mail($to, $subject, $message, $headers);
      
        //   echo "Email sent successfully !";



        if($insertData){
          echo "Sucess! Thanks you $name for registering with us.";
        } else {
          echo "Something went wrong!";
        }
        
    }
}

?>
