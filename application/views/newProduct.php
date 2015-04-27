<!doctype html>
<html>
    <title>Semi Restful Routes</title>
    <head>
    </head>
    <body>
        <h3>Add a New Product</h3>
            <form action="/products/create" method="post">
            <ul>
                <li>Name</li>
                <li><input type="text" name="name"></li>
                <li>Description</li>
                <li><input type="text" name="description"></li>
                <li>Price</li>
                <li><input type="text" name="price"></li>
                <li><input type="submit" name="create" value="create"></li>
            </ul>
        </form>
        <a href='#'>Go Back</a>
    </body>
</html>
