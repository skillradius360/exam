<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input-1</title>
</head><link herf="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.main.css" rel="stylesheet">
<body>
   <div class="container p-3">
    <div class="col-md-auto">
        <h1>Welcome</h1>
        <h2><?php echo $_POST['name'];?></h2>
        <h1>Your phone number is</h1>
        <h2><?php echo $_POST['number'];?></h2>
    </div>
    </div>
</body>
</html>