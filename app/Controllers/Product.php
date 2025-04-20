<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index() {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('product/index', $data);
    }

    public function create() {
        return view('product/create');
    }

    public function store()
    {
        $model = new \App\Models\ProductModel();

        $model->save([
            'name'    => $this->request->getPost('name'),
            'barcode' => $this->request->getPost('barcode'),
            'qty'     => $this->request->getPost('qty'),
            'price'   => $this->request->getPost('price'),
            'unit'    => $this->request->getPost('unit'),
        ]);

        return redirect()->to('/product')->with('message', 'เพิ่มสินค้าสำเร็จ');
    }

    public function edit($id)
    {
        $model = new \App\Models\ProductModel();
        $data['product'] = $model->find($id);

        if (!$data['product']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('ไม่พบสินค้า');
        }

        return view('product/edit', $data);
    }

    public function update($id)
    {
        $model = new \App\Models\ProductModel();

        $model->update($id, [
            'name'    => $this->request->getPost('name'),
            'barcode' => $this->request->getPost('barcode'),
            'qty'     => $this->request->getPost('qty'),
            'price'   => $this->request->getPost('price'),
            'unit'    => $this->request->getPost('unit'),
        ]);

        return redirect()->to('/product')->with('message', 'แก้ไขสินค้าสำเร็จ');
    }

}
