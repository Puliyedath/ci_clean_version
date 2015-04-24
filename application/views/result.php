<!doctype html>
<html>
    <title>Registration Result</title>
    <style type="text/css" >
        h2{
            height: 70px;
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
    <h4>Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> times now</h4>
            <div >
                <h3>Submitted Information</h3>
                <li>Name <?= $this->session->userdata('name');?></li>
                <li>Dojo Location: <?=$this->session->userdata('location'); ?></li>
                <li>Favourite Language <?= $this->session->userdata('language');?></li>
                <li>Comment <?= $this->session->userdata('ta');?></li> 
            </div>
    </body>
</html>
