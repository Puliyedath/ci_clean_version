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
        <?php echo validation_errors(); ?>
        <?php echo form_open('form'); ?>
        <ul>
            <li>Email <input type="text" name="email" value=" <?php echo set_value('email'); ?> " ></li>
            <li>Password  <input type="text" name="pwd" value=" <?php echo set_value('pwd'); ?> "></li>
            <li><input type="submit" name="login" value="login"></li>
        </ul>
        

        <?php echo form_close(""); ?>

        <?php echo form_open('/Login/register'); ?>
        <?php echo validation_errors(); ?>
        <ul>
            <li>Email <input type="text" name="email"> </li>
            <li>First_name <input type="text" name="first_name"  > </li>
            <li>Last_name <input type="text" name="last_name"  > </li>
            <li>Password  <input type="text" name="pwd" > </li>
            <li>Confirm Password <input type="text" name="cpwd" > </li>
            <li><input type="submit" name="register" value="register"></li>
        </ul>

        <?php echo form_close(); ?>

    </body>
    
</head>
</html>
