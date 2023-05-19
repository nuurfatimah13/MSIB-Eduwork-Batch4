<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Customer</title>
        <script type="text/javascript" src="assets/js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container mt-5">
            <?php
                include "connection/db.php";
                $query = $conn->query("SELECT * FROM customer");
            ?>
            <h3 class="text-center">DATA CUSTOMER</h3>
            <a class="btn btn-primary btn-md mt-4 mb-3" href="add-cs.php" role="button">Add Customer</a>
            <table id="example" class="table table-striped" 
                style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(mysqli_num_rows($query)>0){ 
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                        
                    ?>
                    <tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $data["first_name"] ?></td>
                        <td><?= $data["last_name"] ?></td>
                        <td><?= $data["email"] ?></td>
                        <td><?= $data["phone"] ?></td>
                        <td><?= $data["address"] ?></td>
                        <td>
                        <a class="btn btn-danger btn-sm" href="models/destroy.php?id=<?= $data["id"] ?>" onclick="alert('Anda yakin ingin menghapus data ini?')">Delete</a>
                        |
                        <a class="btn btn-warning btn-sm" href="edit-cs.php?id=<?= $data["id"] ?>">Update</a>
                        </td>
                    </tr>
                    <?php 
                                $no++; 
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable({
                "aLengthMenu": [[5, 10, 15, 25, 50],[ 5, 10, 15, 25, 50]],
            });
        });
    </script>
</html>