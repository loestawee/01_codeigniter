<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model {
    protected $table = 'employees';
    protected $allowedFields = ['username', 'password', 'fullname', 'role_id'];
}
