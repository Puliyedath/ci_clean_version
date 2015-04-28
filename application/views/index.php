<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"> </script> 
        <link type="stylesheet" src="assets/js/bootstrap.min.js" type="text/css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
    </head>
    <style type="text/css" media="screen">
ul{
    list-style:none;
}
.row{
    margin-left: 10px;
    margin-top: 10px;
    padding-top: 10px;
}

.col-md-6{
}

ul{
}

ul li{
    padding: 5px 0;
    width: 300px;
}
p{
    color: red;
    font-style:italic;
}
    </style>
    <body>
        <h1 class="text-center row">Login And Registration</h1>
        <div class="row">
            <?php echo validation_errors(); ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php echo form_open('form'); ?>
                    <ul>
                        <li>Email   <input type="text" name="email" value="<?php echo set_value('email'); ?>" ></li>
                        <li>Password<input type="text" name="pwd" value="<?php echo set_value('pwd'); ?>"></li>
                        <li><input type="submit" name="login" value="login"></li>
                    </ul>
                <?php echo form_close(""); ?>
            </div>
            <div class="col-md-6">
                <?php echo form_open('/Login/register'); ?>
                <ul>
                    <li>Email <input type="text" name="email" value="<?php echo set_value('email'); ?>"> </li>
                    <li>First_name <input type="text" name="first_name"  value="<?php echo set_value('first_name'); ?>"></li>
                    <li>Last_name <input type="text" name="last_name"  value="<?php echo set_value('last_name'); ?>"></li>
                    <li>Password  <input type="text" name="pwd" value="<?php echo set_value('pwd') ?>"></li>
                    <li>Confirm Password <input type="text" name="cpwd" > </li>
                    <li><input type="submit" name="register" value="register"></li>
                </ul>
                <?php echo form_close(); ?>
            </div>
        </div>
    </body>

</html>
