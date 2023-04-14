<?php

class Buy extends Controller
{
    public function index($id)
    {
        // model
        $data['judul'] = $this->model('Shoes_model')->getShoesById($id)['nama_shoes'];
        $data['shoes'] = $this->model('Shoes_model')->getShoesById($id);

        // view
        $this->view('templates/header', $data, 'buy');
        $this->view('buy/index', $data);
        $this->view('templates/footer');
    }
}
