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
<h1 style="text-align: center">Danh sách mặt hàng</h1>
<form method="post">
    Nhập tên hàng: <input type="text" name="search">
    <button type="submit" class="btn btn-success">Search</button>
</form>
<button><a href="index.php?page=add-product">Create</a></button>
<table style="text-align: center" class="table table-bordered">
    <tr>
        <th>#</th>
        <td>ID</td>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Created Date</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    <?php if (empty($products)) { ?>
        <tr>
            <td colspan="8">No Data</td>
        </tr>
    <?php } ?>
    <?php if (isset($products)){
    foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $product->getId() ?></td>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getCategory() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><?php echo $product->getAmount() ?></td>
            <td><?php echo $product->getCreatedDate() ?></td>
            <td><?php echo $product->getDescription() ?></td>
            <td>
                <button><a href="index.php?page=delete&id=<?php echo $product->getId() ?>" onclick="return confirm('Do you want to delete this product?')">Delete</a></button>
            </td>
            <td>
                <button><a href="index.php?page=edit-product&id=<?php echo $product->getId() ?>">Edit</a></button>
            </td>
        </tr>
    <?php endforeach;
    }?>
</table>
</body>
</html>