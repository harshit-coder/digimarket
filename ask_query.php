<?php include ("header.php");?>
<?php include ("connection.php");?>

<?php

    require 'PHPMailer/PHPMailerAutoload.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['emailid'];
        $query=$_POST['query'];
        
        $mail= new  PHPMailer;
        $mail->isSMTP();
        $mail->Host= 'smtp.gmail.com';  
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure="tls";

        $mail->Username='alinaproject22@gmail.com';
        $mail->Password='22441011';
        $mail->setFrom($email);
        $mail->addAddress('alinaproject22@gmail.com');
        $mail->addReplyTo('alinaproject22@gmail.com');

        $mail->isHTML(true);
        $mail->Subject='query';
        $mail->Body="<p>Email id:' . $email . '</p><p>'. $query .'";
        $mail->send();
       
    }

?>
<div class="container">
    <h4 class="text-black text-center text-capitalize mb-3 mt-1">Write your query</h4>
    <form action="ask_query.php" method="post">
    <div class="form-outline mb-4">

    <input type="email"name="emailid" id="emailid" class="form-control" />
    <label class="form-label" for="emailid" >Email id </label>
    </div>  
<div class="form-outline">
 <textarea class="form-control"  name="query" id="query" rows="4"></textarea>
 <label class="form-label" for="query">Write your query</label>
    </div>
   <button class="btn btn-primary mt-2" type="submit">Send</button>
</div>
    </form>
</div>
<?php include ("footer.php");?>