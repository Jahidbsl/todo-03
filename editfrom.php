<?php
include "action/db.php";

$sql = sprintf("SELECT * FROM `sms` WHERE `id` =%s", $_GET['id']);
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div style="width: 50%; margin: auto; padding: 20px; " class="card">
        <form action="action/updatetask.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="Text" value="<?php echo $row['name'] ?>" name="name" class="form-control"
                    id="exampleInputname" aria-describedby="namelHelp" placeholder="Enter your name:">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="<?php echo $row['email'] ?>" name="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="phone" value="<?php echo $row['phone'] ?>" name="num" class="form-control"
                    id="exampleInputEmail1" pattern="\d{11}" aria-describedby="emailHelp" maxlength="15">
                <div id="emailHelp" class="form-text">We'll never share your Phone number with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course</label>
                <input type="Text" value="<?php echo $row['course'] ?>" name="cours" class="form-control"
                    id="exampleInputname" aria-describedby="namelHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputDob1" class="form-label">DOB</label>
                <input name="dob" value="<?php echo $row['dob'] ?>" type="date" class="form-control"
                    id="exampleInputDob1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>