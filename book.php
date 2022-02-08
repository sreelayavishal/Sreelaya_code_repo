 <html>
     <head>
         <title>
             book management
         </title>
         <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            
            background-color: #ADABAB;
         }
         
         .form {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
        
         
         .form input[type="username"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h1{
            text-align: center;
            color: #017572;
         }

      </style>
    <head>
        <title>Book Information</title>
    </head>
    <body>
        <center>
            <h2><u>BOOK INFO</u></h2>
            <form name="form" method="POST">
                <table>
                    
                    <tr>
                        <th>Title : </th>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th>Author : </th>
                        <td><input type="text" name="auth"></td>
                    </tr>
                    <tr>
                        <th>Edition : </th>
                        <td><input type="text" name="edi"></td>
                    </tr>
                    <tr>
                        <th>Publisher : </th>
                        <td><input type="text" name="pub"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                           <center> <input type="submit" name="sub"></center>
                        </td>
                    </tr>
                </table>

                <hr>
                <h3>Search  book</h3>
                <center>Enter title  : <input type="text" name="srch"></center>
                <center> <input type="submit" value="Search" name="sub2"></center>
            </form>
        </center>

        <?php

        if(isset($_POST['sub'])){
            $title = $_POST['title'];  
            $authors = $_POST['auth'];  
            $edition = $_POST['edi'];
            $publisher = $_POST['pub'];  
            $con=mysqli_connect("localhost","root","","student");
            if($con)
            {
                echo("Successfully connected");
                echo "<br>";
            }
            else{
                echo("error");
            }
            $query="INSERT INTO book(title,authors,edition,publisher)VALUES('{$title}','{$authors}','{$edition}','{$publisher}')";
            $dq=mysqli_query($con,$query);
           
        }
        if(isset($_POST['sub2'])){
            
            $title1 = $_POST['srch'];  
             
            $con1=mysqli_connect("localhost","root","","student");
            
            $query1="SELECT * FROM book WHERE title='{$title1}'";
           $d= mysqli_query($con1,$query1);
           ?>
           <table border="1" align="center">
               
                <th>accession_number</th>
                <th>title</th>
                <th>author</th>
                <th>edition</th>
                <th>publisher</th>
                <?php
           while($res=mysqli_fetch_assoc($d))
            {
                ?>
               
                
                <tr >
                    <td><?php echo $res['accession_number'];?></td>
                    
                    <td><?php echo $res['title'];?></td>
                    
                    <td><?php echo $res['authors'];?></td>
                    
                    <td><?php echo $res['edition'];?></td>
                    
                    <td><?php echo $res['publisher'];?></td>
                </tr>
                </table>
            <?php
            }
        }
        ?>
        
 </body>
</html>