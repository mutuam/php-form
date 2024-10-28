<?php
/*
require_once('submit.php');
$query= "select * from users";
$result= mysqli_query($conn,$query);
*/

require_once('submit.php');
require_once('functions.php');

$result = display_data();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple project</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch data from a database in PHP</h2>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="submit.php">
                            <div class="mb-3">
                                <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="country" placeholder="Country" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Add User</button>
                        </form>
                       <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>id</td>
                            <td>first name</td>
                            <td>last name</td>
                            <td>country</td>
                            <td>subject</td>
                            <td>Edit</td>
                            <td>delete</td>
                        </tr>

                        <tr>
                        <?php
                            
                            while($row = mysqli_fetch_assoc($result))
                             {
                          ?>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['first_name']; ?></td>
                          <td><?php echo $row['last_name']; ?></td>
                          <td><?php echo $row['country']; ?></td>
                          <td><?php echo $row['subject']; ?></td>
                          <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>

                          <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>


                        </tr>  
                          <?php
                             }
                           
                            ?>
                        
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


