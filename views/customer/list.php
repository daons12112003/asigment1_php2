<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <a href="?url=form_add" class="btn btn-success">Thêm</a>
    <table class="table table-hover mt-5">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Tuổi</td>
            <td>Action</td>
        </tr>
        <?php foreach($customers as $item=>$value) { ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['ten'] ?></td>
                <td><?php echo $value['tuoi'] ?></td>
                <td>
                    <a  href="?url=edit-customer&id= <?php echo $value['id'] ?>"><button class="btn btn-success">Sửa</button></a>
                    <a onclick="return confirm('Bạn có muốn xóa không')" href="?url=delete-customer&id= <?php echo $value['id'] ?>"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>