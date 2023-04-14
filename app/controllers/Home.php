<?php
class Home extends Controller
{
    public function index()
    {
        // title
        $data['judul'] = 'Shoestore';

        // model
        $data['shoes'] = $this->model('Shoes_model')->getLatestShoes();

        // view
        $this->view('templates/header', $data, 'home');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
