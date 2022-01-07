<?php
    require './dbConnect/db_connect.php';


    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $sql = "DELETE FROM `dummy` WHERE `id`=$id";
      $result = mysqli_query($conn, $sql);

    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if(isset($_POST['snoEdit'])){
        $id = $_POST['snoEdit'];
        $title = $_POST['titleEdit'];
        $description = $_POST['descriptionEdit'];

        $sql = "UPDATE `dummy` SET `title`= '$title', `description`= '$description' WHERE `dummy`.`id` = $id";
        $result = mysqli_query($conn, $sql);
        header("Location:/gph_webinar/frontend.php");
        
      }
      else{
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `dummy` (`title`,`description`) VALUES ('$title','$description')";
        $result = mysqli_query($conn, $sql);

        header("Location:/gph_webinar/frontend.php");
      }
  }

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Datatables CSS CDN -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>GPH ToDo App</title>

</head>

<body>
 

  <!-- Update Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="./frontend.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GPH ToDo App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

 <!-- Main Content -->
  <div class="container my-4">
    <h2>Add Tasks to GPH ToDo App</h2>
    <form action="./frontend.php" method="POST">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Insert Task</button>
    </form>
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          <!-- DATA TABLE -->
          <?php
            $sql = "SELECT * FROM `dummy`";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
              $sno = 0;
              while($row = mysqli_fetch_assoc($result)){
                $sno = $sno +1;
                  echo "<tr>
                    <th scope='row'>".$sno."</th>
                    <td>".$row['title']."</td>
                    <td>".$row['description']."</td>
                    <td><button class= 'edit btn btn-sm btn-warning' id=".$row['id'].">Update</button> <button class= 'delete btn btn-sm btn-danger' id=d".$row['id'].">Delete</button></td>
                    </tr>";
              }
          }
          ?>

      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

    <!-- Datatables JS CDN -->
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    // ADD EDIT BUTTON FUNCTIONALITY
    updates = document.getElementsByClassName('edit');
    Array.from(updates).forEach((element) => {
      element.addEventListener('click', (e) => {
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        
        titleEdit.value = title;
        descriptionEdit.value = description;

        snoEdit.value = e.target.id;
        $('#editModal').modal('toggle');

      })
    })

    // ADD DELETE BUTTON FUNCTIONALITY
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener('click', (e) => {
        console.log(e.target);
        id = e.target.id.substr(1);
        // console.log($id);
        if(confirm("Are sure you want to delete this task")){
          window.location = `/gph_webinar/frontend.php?delete=${id}`;
        }

      })
    })
  </script>
</body>

</html>