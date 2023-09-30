<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="?url=add_customer" method="post">
        <div class="mt-2">
         <label for="">Tên</label>
        <input type="text" class="form-control" name="ten">
        </div>

        <div class="mt-2">
         <label for="">Tuổi</label>
        <input type="text" class="form-control" name="tuoi">
        </div>
        
        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
    </form>
</body>
</html>