<?php

class Auth extends Controller
{
    public function index()
    {
        // title
        $data['judul'] = 'Shoestore | Login';

        // view
        $this->view('admin/pages-sign-in', $data);
    }

    public function signIn()
    {
    }

    public function signUp()
    {
    }
}
