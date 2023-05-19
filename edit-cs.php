<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update Data Customer</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
            }
            /* td {
                font-size: 0.8rem;
            }
            a {
                font-size: 1rem;
            } */
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <?php
                include "connection/db.php";
                $id = $_GET['id'];
                $query = $conn->query("SELECT * FROM customer WHERE id='$id'");

                while ($data = mysqli_fetch_array($query)) {
                    $id = $data["id"];
                    $first_name = $data["first_name"];
                    $last_name = $data["last_name"];
                    $email = $data["email"];
                    $phone = $data["phone"];
                    $address = $data["address"];
                }
            ?>
            <h3 class="text-center">FORM UPDATE CUSTOMER</h3>
            <form class="row g-3 mt-3" action="models/update.php?id=<?= $id ?>" method="post">
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="John" value="<?= $first_name ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Dehn" value="<?= $last_name ?>">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="admin@example.com" value="<?= $email ?>">
                </div>
                <div class="col-12">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="inputPhone" name="phone" value="<?= $phone ?>">
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3">
                        <?= $address ?>
                    </textarea>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-success" name="Submit">
                    <a class="btn btn-secondary" href="index.php" role="button">Cancel</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>