<?php

class Login extends Controller
{
    public function index()
    {
        // title
        $data['judul'] = 'Shoestore | Login';

        // view
        $this->view('admin/pages-sign-in', $data);
    }

    public function process()
    {
        // cek apakah ada data yang dikirim
        if (@$_POST['username']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    }

    public function logout()
    {
    }
}
