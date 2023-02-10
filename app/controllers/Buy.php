<?php

class Buy extends Controller
{
    public function index($id)
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['judul'] = $this->model('Shoes_model')->getShoesById($id)['nama_shoes'];
        $data['shoes'] = $this->model('Shoes_model')->getShoesById($id);
        $this->view('templates/header', $data);
        $this->view('buy/index', $data);
        $this->view('templates/footer');
    }
}
