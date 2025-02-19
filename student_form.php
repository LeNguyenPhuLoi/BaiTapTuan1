<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5 bg-secondary py-3" style="width: 700px">
        <h1>Đăng ký</h1>
        <form action="student_result.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" require>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" require>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="firstname" name="firstname" require>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" require>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">GPA</label>
                <input type="text" class="form-control" id="gpa" name="gpa" require>
            </div>
            <button type="submit" class="btn btn-warning">Đăng ký</button>
        </form>
    </div>
</body>

</html>