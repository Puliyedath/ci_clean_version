<!doctype html>
<html>
    <head>
        <title></title>
        <style type="text/css" media="screen">
            *{
              margin: 0;
              padding: 0;
              border: 0;
            }
            table{
              border: 1px solid black;
              border-bottom: none;
              width: 1000px;
              margin: 10px auto;
            }

            thead{
              background: gray;
              text-align: center;
              font-style: bold;

            }
            thead >tr > td{
              border-bottom: 1px solid black;
            }

            tbody > tr > td{
              padding: 0 60px;
              border-bottom: 1px solid black;
              border-right: 1px solid black;

            }

            tbody > tr > td:last-child{
              border-right: none;
            }

            input[type="text"]{
              border: 0.5px solid black;
              padding: 3px;
              margin: 2px 0 2px 10px;
            }

            input[type="submit"]{
              padding: 5px 40px;
              font-size: 0.8em;
              margin: 5px 0px;
            }

            .link{
               border:none; 
               padding:0!important;
               font: inherit;
               /*border is optional*/
               border-bottom:1px solid #444; 
               cursor: pointer;
               background: none;
               color: blue;
            }

        </style>
    </head>
    <body>
    <form action="insert" method="post">
    <ul>
           <li><h1>Add a New Course</h1></li>
           <li>Name: <input type="text" name="name"></li>
           <li>Description<input type="text" name="description"></li>
           <li><input type="submit" name="add" value="add"></li>
    </ul>
    </form>
    <form action="delete" method="get">
        <table>
            <thead class="header">
                <td>Name</td>
                <td>Description</td>
                <td>Date Added</td>
                <td>Actions</td>
            </thead>
            <?php echo $this->session->userdata('courses') ; ?>
        </table>
    </form>
    </body>
</html>
