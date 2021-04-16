
<?php
include './config/constants.php';
   //check whether the form is submitted or not
   if(isset($_POST['submit']))
   {
       //echo"Form Submitted";
       //Get the value from form and save it n variables
       $task_name = $_POST['task_name'];
      
       $task_description = $_POST['task_description'];
        $list_name = $_POST['list_name'];
       $date= date('Y-m-d' ,strtotime($_POST['deadline']));
       $priority = $_POST['priority'];

       //connect Database
       $conn = mysqli_connect ($server, $user, $password) or die(mysqli_error());
       //check connection
       
       //Check whether the database connected or not
       /*
       if($conn==true)
       {
          echo "Database Connected";
       }
       */
      //Select Database
      $db_select = mysqli_select_db($conn, $db);
       //Check whether the database connected or not
       /*
       if($db_select==true)
       {
          echo "Database Selected";
       }
       */
      //SQL Query to insert data into database
        $sql = "insert into tbl_task(task_name,task_description,list_name,priority,deadline) values('$task_name','$task_description','$list_name','$priority','$date')";

      //Execute Query and insert into database
        $res = mysqli_query($conn, $sql);

      //check weather the query executed successfully or not
        if($res==true) 
        {
          echo "<head><script>alert('Inserted successfuly')</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=./index.php'>";

          
        }
        else
        {
           //echo "Failed to insert data";

       echo "<head><script>alert('Failed')</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=./add-task.php'>";

        }
       
       
   }

?>