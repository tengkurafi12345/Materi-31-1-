<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
    <h2>Sign UP</h2>

    <form action="signup.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username">
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd"
            placeholder="Enter Password" name="pswd">
        </div>
        <div class="mb-3">
            <label for="Re-Enter-Password">Re Enter Password:</label>
            <input type="password" class="form-control" id="Re-Enter-Password" placeholder="Re Enter Password" name="pswd">
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email"
            placeholder="Enter Email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>

    </div>
</body>
</html>