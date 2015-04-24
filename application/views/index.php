<!DOCTYPE html>
<html>
    <head>
        <title>Time Machine</title>
        <style type="text/css" >
            *{
                margin: 0;
                border: 0;
                padding: 0;
            }
            body{
                text-align:center;
            }  
            li{
                list-style:none;
                text-align:center;
                border: 1px solid black;
            }
            
            li.sbox{
                width: 100px;
                height: 30px;
                padding: 5px 50px;
                margin: 0 auto;
                margin-top:10px;
                margin-bottom:10px;
                font-size:0.8em;
        
            }
            li.box{
                width: 400px;
                height: 50px;
                padding: 20px 5px;
                margin: 0 auto;
                
            }
        </style>
    </head>
    <body>
        <div id="container">
           <ul>
               <li class="sbox">Current Date and Time</li>
               <li class="box"><?= $this->session->flashdata('ttt')  ?></li>
           </ul> 
        </div>
    </body>
</html>

