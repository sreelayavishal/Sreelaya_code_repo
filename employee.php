<html>
     <head>
         <title>
             salary management
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
    
    <body>
        <center>
            <h2><u>employe INFO</u></h2>
            <form name="form" method="POST">
                <table>
                    
                    <tr>
                        <th>emp name : </th>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th>job name : </th>
                        <td><input type="text" name="auth"></td>
                    </tr>
                    <tr>
                        <th>manager id : </th>
                        <td><input type="text" name="edi"></td>
                    </tr>
                    <tr>
                        <th>salary : </th>
                        <td><input type="text" name="pub"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                           <center> <input type="submit" name="sub"></center>
                        </td>
                    </tr>
                </table>

               
               
             
                
            </form>
        </center>

        <?php

        if(isset($_POST['sub'])){
            $emp_name = $_POST['title'];  
            $job_name = $_POST['auth'];  
            $manager_id= $_POST['edi'];
            $salary= $_POST['pub'];  
            $con=mysqli_connect("localhost","root","","department");
            if($con)
            {
                echo("Successfully connected");
                echo "<br>";
            }
            else{
                echo("error");
            }
            $query="INSERT INTO employe(emp_name,job_name,manager_id,salary)VALUES('{$emp_name}','{$job_name}','{$manager_id}','{$salary}')";
            $dq=mysqli_query($con,$query);
           
        }
        $con=mysqli_connect("localhost","root","","department");
    $check="select * from employe where salary > 35000";   
    $c=mysqli_query($con,$check);
    ?><center>
    echo "<table  border=1px><tr><th>Name</th><th>Salary</th></tr>";
    if(mysqli_num_rows($c)!=0)
    {
    while($result=mysqli_fetch_array($c))
    {
        echo "<tr><td>{$result["emp_name"]}</td>";
        echo "<td>{$result["salary"]}</td>";
    }
    }
    mysqli_close($con);
    ?>
		</div>
	</center>

        
 </body>
</html>


