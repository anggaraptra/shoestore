<?php
class Home extends Controller
{
    public function index()
    {
        $data['status1'] = 'aktif';
        $data['status2'] = '';
        $data['shoes'] = $this->model('Shoes_model')->getLatestShoes();
        $data['judul'] = 'Shoestore';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
