<!doctype html>
<html>
    <title>Semi Restful Routes</title>
    <head>
       <style type="text/css" >
ul{
    list-style:none;
} 
       </style> 
    </head>
    <body>
        <h3>Edit a Product</h3>
        <form action=<?php echo "/Main/update/{$product[0]['id']}" ?> method="post">
            <ul>
                <li>Name</li>
                <li><input type="text" name="name" value= <?php echo $product[0]['name'] ?> ></li>
                <li>Description</li>
                <li><input type="text" name="description" value=" <?= $product[0]['description'] ?>" ></li>
                <li>Price</li>
                <li><input type="text" name="price" value= <?php echo $product[0]['price'] ?> ></li>
                <li><input type="submit" name="update" value="update"></li>
            </ul>
        </form>
        <a href='/Main/index'>Go Back</a>
    </body>
</html>
