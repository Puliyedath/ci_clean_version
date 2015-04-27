<!doctype html>
<html>
    <title>Semi Restful Routes</title>
    <head>
        <style type="text/css" >

            *{
                margin: 0;
                padding:0;
                border: 0;
            }

            li{
                list-style:none;
            }

            ul {
                margin: 0 30px;
            }


            li{
                list-style:none;
                display: inline-block;
                vertical-align: top;
                padding: 5px;
                border-right: 1px solid black;
            }

            table {
                width: 90%;
                margin: 80px 40px;
                text-align: center;
                border: 1px solid black;
            }

            table td{
                border:1px solid black;
                border-top:none;
                border-left:none
            }

            table tr:last-child td{
                border-bottom: none;
            }

            table td:last-child{
                border-right: none;
            }

            thead{
                background: gray;
                padding: 15px;
            }


        </style>
    </head>
    <body>
        <h3>Products</h3>
        <table>
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php echo $products ?>
            </tbody>
        </table>
        <a href='products/new'>Add a new Product</a>
    </body>
</html>
