<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="?url=update-customer" method="post">
        <input type="hidden" name="id" value="<?php echo $custom['id']?>" >
        <div class="mt-2">
         <label for="">Tên</label>
        <input type="text" class="form-control" name="ten" value="<?php echo $custom['ten'] ?>">
        </div>

        <div class="mt-2">
         <label for="">Tuổi</label>
        <input type="text" class="form-control" name="tuoi" value="<?php echo $custom['tuoi'] ?>">
        </div>
        
        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
    </form>
</body>
</html>