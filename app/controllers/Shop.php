<?php
class Shop extends Controller
{
    public function index()
    {
        // title
        $data['judul'] = 'Shoestore | Shop';

        // model
        $data['shoes'] = $this->model('Shoes_model')->getAllShoesSorted();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/index', $data);
        $this->view('templates/footer');
    }

    public function sneakers()
    {
        // title
        $data['judul'] = 'Shoestore | Sneakers';

        // model
        $data['sneakers'] = $this->model('Shoes_model')->getSneakers();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/sneakers', $data);
        $this->view('templates/footer');
    }

    public function oxfords()
    {
        // title
        $data['judul'] = 'Shoestore | Oxfords';

        // model
        $data['oxfords'] = $this->model('Shoes_model')->getOxfords();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/oxfords', $data);
        $this->view('templates/footer');
    }

    public function loafers()
    {
        // title
        $data['judul'] = 'Shoestore | Loafers';

        // model
        $data['loafers'] = $this->model('Shoes_model')->getLoafers();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/loafers', $data);
        $this->view('templates/footer');
    }

    public function canvas()
    {
        // title
        $data['judul'] = 'Shoestore | Classic Canvas';

        // model
        $data['canvas'] = $this->model('Shoes_model')->getClassicCanvas();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/canvas', $data);
        $this->view('templates/footer');
    }

    public function search()
    {
        // title
        $data['judul'] = 'Shoestore | Shop';

        // model
        $data['shoes'] = $this->model('Shoes_model')->searchShoes();

        // view
        $this->view('templates/header', $data, 'shop');
        $this->view('shop/index', $data);
        $this->view('templates/footer');
    }

    public function getShoes()
    {
        echo json_encode($this->model('Shoes_model')->getShoesById($_POST['id']));
    }
}
