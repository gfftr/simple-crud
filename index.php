<?php

include 'db_connect.php';

// sql select
$sql = "SELECT * FROM tasks";

$rows = $db->query($sql)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Crud</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


  <div class="container">
    <div class="row" style="margin-top: 70px;">

      <div class="col-md-10 col-md-offset-1">
        <table class="table">
          <button type="button" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">Add task</button>
          <button type="button" class="btn btn-default float-right">Print</button>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="add.php" method="post">
        <div class="form-group">
            <label for="">Task Name</label>
            <input type="text" required name="task" class="form-control">
        </div>
        <input type="submit" name="send" value="Add Task" class="btn btn-success">
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
          <p></p>


          <thead>
            <tr>
              <th scope="col">ID.</th>
              <th scope="col">Task</th>
            </tr>
          </thead>
          <tbody> <?php while($row = $rows->fetch_assoc()): ?>
            <tr>
             
              <th><?php echo $row['id'] ?></th>
              <td class="col-md-10"><?php echo $row['name'] ?></td>
              <td><a href="" class="btn btn-success">Edit</a></td>
              <td><a href="" class="btn btn-danger">Delete</a></td>
              
            </tr> <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>




</body>

</html>