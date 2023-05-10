<?php
include('../lib/function.php');
$options = array(
    'order_by' => 'id ASC'
);
$list_user = get_all('danhsach', $options);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách câu hỏi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/Huy_Hiệu_Đoàn.png" type="image/gif" sizes="16x16">
</head>

<body>
    <div class="container">
        <h2>Danh sách</h2>
        <br>
        <a href="edit.php" class="btn btn-primary">Thêm mới </a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-6">stt</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Câu hỏi</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list_user as $user) : ?>
                    <tr>
                        <th scope="row"><?php echo $user['name'] ?></th>
                        <td style="color: red; font-weight: bold;"><?= $user['ds_name'] ?></td>
                        <td><?= $user['ds_address'] ?></td>
                        <td><?= $user['ds_desc'] ?></td>
                        <td>
                            <a href="delete.php?user_id=<?php echo $user['id']; ?>">Sửa</a> |
                            <a onclick="return confirm('Are you sure to delete?')" href="delete.php?user_id=<?php echo $user['name']; ?>">Xóa </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
