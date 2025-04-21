<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $allowedFields = ['name', 'barcode', 'qty', 'price', 'unit'];

    // สำหรับบันทึกวันที่สร้าง/อัปเดตอัตโนมัติ (ถ้าใช้ field created_at, updated_at)
    protected $useTimestamps = true;

    // ถ้าต้องการกำหนดชนิดข้อมูลที่รับเข้า/ส่งออก
    protected $returnType = 'array';
}