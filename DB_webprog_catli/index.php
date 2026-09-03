<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body>
    <h1>
<?php
    if(isset($_GET["info"])){
        echo $_GET["info"];
    }
?>
</h1>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Student Registration Form</h3>
        </div>

        <div class="card-body">

            <form method="POST" action="process_register.php">

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="student_number" class="form-label">
                            student_no
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="student_no"
                            name="student_no"
                            placeholder="Enter Student number">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="student name" class="form-label">
                            student name
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="student_name"
                            name="student_name"
                            placeholder="Enter Student name">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="last_name" class="form-label">
                           course
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="course"
                            name="course"
                            placeholder="Enter course">
                    </div>

                </div>

                <div class="d-grid">

                    <button 
                        type="submit"
                        class="btn btn-primary"
                        name="register">

                        Register Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>