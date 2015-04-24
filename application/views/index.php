<!doctype html>
<html>
    <title>Survey Form</title>
    <style type="text/css" >
        form{
            height: 200px;
            width: 500px;
            border: 1px solid black;
        } 

        li{
            list-style:none;
            padding: 3px 0;
        }

        input[type="submit"]{
            margin-left: 240px;
        }


        
    </style>
    <body>
        <form action="submit" method="post">
            <ul>
                <li>Your Name <input type="text" name="name"></li>
                <li>Dojo Location <select name="location"><?php echo $this->session->userdata('locs')?></select></li>
                <li>Favourite Language <select name="language"><?php echo $this->session->userdata('langs') ?> </select></li>
                <li>Comment(optional) <textarea name="ta" rows=4 column=50 ></textarea></li>
                <li><input type="submit" name="submit" value="submit"></li>
            </ul>
        </form>
    </body>
</html>
