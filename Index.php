<?php
    include('config/constants.php');
?>
<html>
    <head>
    <Title>Task Manager with help of php and mysql</Title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
	body{
		background-image: url('images/1.jpg');

		background-repeat: no-repeat;
		background-size: 1366px 700px;
	}
</style>
    </head>
 <body>   
<h1>Task Manager</h1>
<h6>(best money bank)</h6>

<!-- Menu Starts Here -->
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
          <a class="dropdown-item" href="add-lists.php">Add list</a>
          <a class="dropdown-item" href="deletelist.php">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="add-task.php">Add Task</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Menu Ends Here -->

<!-- Tasks Starts Here -->

<div class="All-Tasks">


   <table class="table table-bordered table-light table-striped table-hover" >
  <thead>
    <tr>
  
                        <th scope="col">ID</th>
                        <th scope="col">Task Name</th>
                       
                        <th scope="col">Description</th>
                        <th scope="col">List Name</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Deadline</th>
                        <th   >Action</th>

    </tr>
  </thead>
  <tbody>
 <?php 
 include './config/constants.php';
 $selectquery ="select tt.task_id, tl.list_name, tt.task_name, tt.task_description, tt.priority, tt.deadline from tbl_tasks tt , tbl_list tl where tt.list_id=tl.list_id";
 $query = mysqli_query($con,$selectquery);


 while($result = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $result['task_id'] ; ?></td>
    <td><?php echo $result['task_name'] ; ?></td>
    <td><?php echo $result['task_description'] ; ?></td>
<td><?php echo $result['list_name'] ; ?></td>    
    <td><?php echo $result['priority'] ; ?></td>
    <td><?php echo $result['deadline'] ; ?></td>
    <td><a href='./deletetask.php?idd=<?php echo $result['id']  ?>'  class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
 }
 ?>
  </tbody>
</div>
<!-- Tasks Ends Here -->
</body>
</html>
 