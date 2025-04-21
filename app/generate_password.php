<?php

// สร้างรหัสผ่านที่เข้ารหัสจากข้อความ "123456"
$password = "123456";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo "รหัสผ่านต้นฉบับ: {$password}\n";
echo "รหัสผ่านที่เข้ารหัสแล้ว: {$hashed_password}\n";
echo "\nคุณสามารถใช้รหัสผ่านที่เข้ารหัสนี้ในการอัปเดตฐานข้อมูล\n";
echo "\nตัวอย่างคำสั่ง SQL:\n";
echo "UPDATE employees SET password = '{$hashed_password}' WHERE username = 'ชื่อผู้ใช้ที่ต้องการอัปเดต';\n";
echo "\nหรือใช้ Model ใน CodeIgniter:\n";
echo "\n// ตัวอย่างโค้ดสำหรับอัปเดตรหัสผ่านผู้ใช้\n";
echo "// \$model = new \\App\\Models\\EmployeeModel();\n";
echo "// \$user_id = 1; // ID ของผู้ใช้ที่ต้องการอัปเดต\n";
echo "// \$model->update(\$user_id, ['password' => '{$hashed_password}']);\n";
?>