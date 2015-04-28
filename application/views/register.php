<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
        <?php echo validation_errors(); ?>
        <?php form_open(form) ;?>
    <ul>
        <li>email: <input type="text" name="email" value="" > </li>
        <li>first_name: <input type="text" name="first_name" value="" > </li>
        <li>last_name: <input type="text" name="last_name" value="" > </li>
        <li>pwd: <input type="text" name="pwd" value="" > </li>
        <li>cpwd: <input type="text" name="cpwd" value=""> </li>
    </ul>

</html>
