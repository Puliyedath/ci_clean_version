
<!doctype html>
<html>
<head>
    <title>Product Info Semi Restful demo</title>
    <style type="text/css" >
ul{
    list-style:none;
} 

    </style>
</head>
    <body>
        <h3> <?php echo $product[0]['id'] ?> </h3>
            <ul>
                <li>Name : <?php echo $product[0]['name'] ?> </li>
                <li>Description: <?php echo $product[0]['description'] ?> </li>
                <li>Price <?php echo $product[0]['price'] ?> </li>
            </ul>
        <a href=<?php echo "/Actions/edit/{$product[0]['id']}" ?> >Edit</a>
        <a href='/Actions/back'>Back</a>
    </body>
</html>
