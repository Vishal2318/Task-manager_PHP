<?php
    include('config/constants.php');
?>
<html>
     <head>
          <titl>Task manager with Php and mysql</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  body{
     border: 2px solid black;
  padding: 25px;
    background-image: url('https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80');

  }
</style>
     </head>
     <body>
          <h1>Task Manager</h1>


          <a href ="#">Home</a>
          <a href="./manage-list.php">Manage Lists</a>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage-list.php">Manage list</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add-lists.php">Add List</a>
          
        </div>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

          <h3>Add Task Page</h3>

          <p>
      

          <!--Form to Add List Starts Here -->
          //bhatiavishal438@gmail.com
          <form method="POST" action="addtask_submit.php">
               <table>
                     <tr>
                        <td>Task Name: </td>
                        <td><input type="text" name="task_name" placeholder="Type task name here" required ="required"/></td>
                     </tr>

                     <tr>
                        <td>task Description:</td>
                        <td><textarea name="task_description" placeholder="Type task description here"></textarea></td>
                     </tr>
                      <tr>
                        <td>List_id
                        <td>
                                            <?php
                                            
            $query="SELECT * from tbl_list";
            $result=mysqli_query($con,$query);
            
            
                        echo "<select name='list_name'>

                        <option readonly>Select List</option>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option >" . $row['list_name'] . "</option>";
                        }
                        echo "</select>";
                        ?></td>
                      </tr>
<tr>
                        <td>Priority:</td>
                        <td><select name="priority"><option>High</option>
                          <option>Medium</option>
                          <option>Low</option>
                        </select></td>
                     </tr><tr>
                        <td>Deadline:</td>
                        <td>        <input type="date"  name="deadline">
</td>
                     </tr>
                     <tr>
                        <td><input type="submit" name="submit" value="SAVE" /></td>
                     </tr>
               </table>
          </form>
          <!--Form to Add List Ends Here -->

     </body>
</html>     
