<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="send.php" method="post" class="p-5">
        
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        <label for="">Subject</label>
        <input type="text" name="subject" class="form-control">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
        <label for="">Message</label>
        <input type="text" name="message" class="form-control">
        <button class="btn btn-primary mt-3" name="btn_send">Send</button>
    </form>
</body>
</html>