<!doctype html>
<html>
    <head>
        <title>Ninja Gold</title>
        <style type="text/css" >
            *{
                margin: 0;
                border: 0;
                padding: 0;
            } 

            #activities{
                height: 100px;
                width: 800px;
                border: 1px solid black;
                overflow: scroll;
            }

            #container{
                display:inline-block;
                margin: 0 300px;
            }

            form{
                text-align:center;
                display:inline-block;
                vertical-align:top;
                margin: 90px 40px;
            }

            body > h3{
                margin: 10px 0;
            }

        </style>
    </head>
    <body>
    <h3>Your Gold: <label class="box"/><?php echo $this->session->userdata('gold'); ?></h3>
        <div id="container">
            <form action="getGold" method="post">
                <h3>Farm</h3> 
                <p>(earns 10-20 golds)</p>
                <input type="hidden" name="iname" value="farm" >
                <input type="submit" name="name" value="Find Gold!" >
            </form>
            <form action="getGold" method="post">
                <h3>Cave</h3> 
                <p>(earns 5-10 golds)</p>
                <input type="hidden" name="iname" value="cave" >
                <input type="submit" name="name" value="Find Gold!">
            </form>
            <form action="getGold" method="post">
                <h3>House</h3> 
                <p>(earns 2-5 golds)</p>
                <input type="hidden" name="iname" value="house" >
                <input type="submit" name="name" value="Find Gold!">
            </form>
            <form action="getGold" method="post">
                <h3>Casino</h3> 
                <p>(earns/takes 0-50 golds)</p>
                <input type="hidden" name="iname" value="casino" >
                <input type="submit" name="name" value="Find Gold!">
            </form>
            <div id="activities"><?php echo $this->session->userdata('messages'); ?> </div>
        </div>
    </body>
</html>
