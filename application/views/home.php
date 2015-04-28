<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css" media="screen">
        ul{
            list-style:none;
        } 
    </style>
    <body>
<?php 
    $user = $this->session->userdata('user') ;
?>
        <h1> Welcome <?php echo $user['first_name'] ?> </h1>
        <h4>User Information</h4>
        <ul id="info" >
            
            <li>First Name <?php echo $user['first_name'] ?></li>
            <li>Last Name <?php echo $user['last_name'] ?></li>
            <li>Email Address: <?php echo $user['email'] ?></li>
        </ul>
    </body>

</head>
</html>
