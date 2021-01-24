<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="text-align: center">Chỉnh sửa mặt hàng</h1>
<form method="post">
    <div class="form-group">
        <label>Tên hàng: </label>
        <input type="text" name="product-name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Loại hàng:</label>
        <select name="product-category" required>
            <option>Đồ công nghệ</option>
            <option>Gia dụng</option>
            <option>Cơ khí</option>
            <option>Vật liệu xây dựng</option>
            <option>Đồ handmade</option>
            <option>Đồ thủ công mỹ nghệ</option>
            <option>Văn phòng phẩm</option>
        </select>
    </div>
    <div class="form-group">
        <label>Đơn giá:</label>
        <input type="number" name="product-price" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Số lượng:</label>
        <input type="number" name="product-amount" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Mô tả:</label>
        <textarea name="product-desc" class="form-control" required></textarea>
    </div>
    <button class="btn btn-success">Sửa mặt hàng</button>
    <button><a href="index.php">Thoát</a></button>
</form>
</body>
</html>