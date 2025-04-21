<!DOCTYPE html>
<html>
<head>
    <title>รายการสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <h2 class="mb-4">📦 รายการสินค้า</h2>

    <a href="/product/create" class="btn btn-primary mb-3">➕ เพิ่มสินค้า</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>ชื่อสินค้า</th>
                <th>Barcode</th>
                <th>จำนวน</th>
                <th>ราคา</th>
                <th>หน่วย</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= esc($product['name']) ?></td>
                        <td><?= esc($product['barcode']) ?></td>
                        <td><?= esc($product['qty']) ?></td>
                        <td><?= number_format($product['price'], 2) ?></td>
                        <td><?= esc($product['unit']) ?></td>
                        <td>
                            <a href="/product/edit/<?= $product['id'] ?>" class="btn btn-sm btn-warning">แก้ไข</a>
                            <a href="/product/delete/<?= $product['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('ยืนยันลบ?')">ลบ</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center">ไม่มีข้อมูลสินค้า</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>