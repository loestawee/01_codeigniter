<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <h2 class="mb-4">➕ เพิ่มสินค้า</h2>

    <div class="card">
        <div class="card-body">
            <form action="/product/store" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อสินค้า</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="mb-3">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="qty" class="form-label">จำนวน</label>
                        <input type="number" class="form-control" id="qty" name="qty" min="0" value="0" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="price" class="form-label">ราคา</label>
                        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" value="0.00" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="unit" class="form-label">หน่วย</label>
                        <input type="text" class="form-control" id="unit" name="unit" placeholder="ชิ้น, อัน, กล่อง" required>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="/product" class="btn btn-secondary">กลับ</a>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>