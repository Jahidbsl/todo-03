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
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">
</head>

<body>
    <div style="width: 50%; margin: auto; padding: 20px; " class="card">
        <form action="action/addtask.php" method="post" id="form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="Text" name="name" class="form-control" id="exampleInputname" aria-describedby="namelHelp" placeholder="Enter your name:">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" name="num" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" maxlength="15">
                <div id="emailHelp" class="form-text">We'll never share your Phone number with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course</label>
                <input type="Text" name="cours" class="form-control" id="exampleInputname" aria-describedby="namelHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputDob1" class="form-label">DOB</label>
                <input name="dob" type="date" class="form-control" id="exampleInputDob1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <script>
        const form = document.getElementById("form");

        form.addEventListener('submit', function(stop) {
            stop.preventDefault();

            const sweet = Swal.fire({
                title: "Are you sure to submit?",
                text: "You won't be able to revert this submission!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Submit!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Cancel!",
                        text: "Your submission has been canceled.",
                        icon: "success",
                        
                    });

                    form.submit();
                }
            });
        })

    </script>
</body>

</html>