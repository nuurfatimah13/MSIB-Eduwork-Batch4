<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Data Customer</title>
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
        <script>
            function validate() {
                let fname = document.forms["addForm"]["first_name"].value;
                let lname = document.forms["addForm"]["last_name"].value;
                let email = document.forms["addForm"]["email"].value;
                let phone = document.forms["addForm"]["phone"].value;
                let address = document.forms["addForm"]["address"].value;

                if (fname == "") {
                    document.getElementById('fname').innerHTML = "Nama depan wajib diisi!";
                    document.getElementById("inputFirstName").style.border = "2px solid red";
                    return false;
                } else if (lname == "") {
                    document.getElementById('lname').innerHTML = "Nama belakang wajib diisi!";
                    document.getElementById("inputLastName").style.border = "2px solid red";
                    return false;
                } else if (email == "") {
                    document.getElementById('email').innerHTML = "Email wajib diisi!";
                    document.getElementById("inputEmail").style.border = "2px solid red";
                    return false;
                } else if (phone == "") {
                    document.getElementById('phone').innerHTML = "Phone wajib diisi!";
                    document.getElementById("inputPhone").style.border = "2px solid red";
                    return false;
                } else if (address == "") {
                    document.getElementById('address').innerHTML = "Alamat wajib diisi!";
                    document.getElementById("exampleFormControlTextarea1").style.border = "2px solid red";
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div class="container mt-4">
            <h3 class="text-center">FORM ADD CUSTOMER</h3>
            <form class="row g-3 mt-3" name="addForm" action="models/store.php" 
                onsubmit="return validate()" method="post">
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="John">
                    <span id="fname" style="color: red;"></span>
                </div>
                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Dehn">
                    <span id="lname" style="color: red;"></span>
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="admin@example.com">
                    <span id="email" style="color: red;"></span>
                </div>
                <div class="col-12">
                    <label for="inputPhone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="inputPhone" name="phone">
                    <span id="phone" style="color: red;"></span>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
                    <span id="address" style="color: red;"></span>
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