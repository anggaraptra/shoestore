<?php
class Shop extends Controller
{
    public function index()
    {
        $data['status1'] = '';
        $data['status2'] = 'aktif';
        $data['judul'] = 'Shoestore';
        $data['shoes'] = $this->model('Shoes_model')->getAllShoesSorted();
        $this->view('templates/header', $data);
        $this->view('shop/index', $data);
        $this->view('templates/footer');
    }

    public function sneakers()
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['sneakers'] = $this->model('Shoes_model')->getSneakers();
        $data['judul'] = 'Shoestore | Sneakers';
        $this->view('templates/header', $data);
        $this->view('shop/sneakers', $data);
        $this->view('templates/footer');
    }

    public function oxfords()
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['oxfords'] = $this->model('Shoes_model')->getOxfords();
        $data['judul'] = 'Shoestore | Oxfords';
        $this->view('templates/header', $data);
        $this->view('shop/oxfords', $data);
        $this->view('templates/footer');
    }

    public function loafers()
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['loafers'] = $this->model('Shoes_model')->getLoafers();
        $data['judul'] = 'Shoestore | Loafers';
        $this->view('templates/header', $data);
        $this->view('shop/loafers', $data);
        $this->view('templates/footer');
    }

    public function canvas()
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['canvas'] = $this->model('Shoes_model')->getClassicCanvas();
        $data['judul'] = 'Shoestore | Classic Canvas';
        $this->view('templates/header', $data);
        $this->view('shop/canvas', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['status1'] = '';
        $data['status2'] = 'aktif';
        $data['judul'] = 'Shoestore | Shop';
        $data['shoes'] = $this->model('Shoes_model')->cariShoes();
        $this->view('templates/header', $data);
        $this->view('shop/index', $data);
        $this->view('templates/footer');
    }

    public function getShoes()
    {
        echo json_encode($this->model('Shoes_model')->getShoesById($_POST['id']));
    }
}
