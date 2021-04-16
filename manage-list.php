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
    background-image: url('https://elearningindustry.com/wp-content/uploads/2016/03/conducting-a-successful-task-analysis-6-benefits-you-cannot-overlook-e1457012771169.jpg');
  }
</style>
     </head>
     <body>
          <h1>Task Manager</h1>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Index,.php">Menu</a>
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


        
          <h3>Manage Lists Page</h3>

          <p>
         
          </p>

          <!--Table to display lista enters here -->
          <div class="All-Lists">

             <a href="add-lists.php">Add List</a>
         <table class="table table-bordered table-light table-striped table-hover" >
  <thead>
    <tr>
  
                        <th scope="col">ID</th>
                        <th scope="col">List Name</th>
                       
                        <th scope="col">Description</th>
                       
                        <th   >Action</th>
                        <th   >Updation</th>

    </tr>
  </thead>
  <tbody>
 <?php 
 include './config/constants.php';
 $selectquery ="select * from tbl_list";
 $query = mysqli_query($con,$selectquery);

 while($result = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $result['list_id'] ; ?></td>
    <td><?php echo $result['list_name'] ; ?></td>
    <td><?php echo $result['list_description'] ; ?></td>
    
    <td><a href='./deletelist.php?idd=<?php echo $result['id']  ?>'  class="btn btn-danger">Delete</a></td>
    <td><a href='./updatelist.php?idd=<?php echo $result['id']  ?>'  class="btn btn-danger">Update</a></td>
    </tr>
    <?php
 }
 ?>
  </tbody>
          </div>
          <!--Table to dosplay lists ends here -->

     </body>
</html>