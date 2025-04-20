<!DOCTYPE html>
<html>
<head>
    <title>แก้ไขสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <h2 class="mb-4">✏️ แก้ไขข้อมูลสินค้า</h2>

    <form action="/product/update/<?= $product['id'] ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="name" class="form-label">ชื่อสินค้า</label>
            <input type="text" name="name" class="form-control" value="<?= esc($product['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="barcode" class="form-label">บาร์โค้ด</label>
            <input type="text" name="barcode" class="form-control" value="<?= esc($product['barcode']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">จำนวน</label>
            <input type="number" name="qty" class="form-control" value="<?= esc($product['qty']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" name="price" step="0.01" class="form-control" value="<?= esc($product['price']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="unit" class="form-label">หน่วย</label>
            <input type="text" name="unit" class="form-control" value="<?= esc($product['unit']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">💾 อัปเดต</button>
        <a href="/product" class="btn btn-secondary">ย้อนกลับ</a>
    </form>

</div>
</body>
</html>