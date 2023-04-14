<?php

class Admin extends Controller
{
    public function index()
    {
        // title
        $data['judul'] = 'Shoestore | Admin Dashboard';

        // model
        $data['pesanan'] = $this->model('Pesanan_model')->getAllPesananSorted();

        // view
        $this->view('templates/admin-header', $data, 'dashboard');
        $this->view('admin/index', $data);
        $this->view('templates/admin-footer');
    }

    public function profile()
    {
        // title
        $data['judul'] = 'Shoestore | Admin Profile';

        // model
        $data['user_admin'] = $this->model('User_model')->getAllAdmin();

        // view
        $this->view('templates/admin-header', $data, 'profile');
        $this->view('admin/pages-profile', $data);
        $this->view('templates/admin-footer');
    }

    public function signIn()
    {
        // title
        $data['judul'] = 'Shoestore | Admin Sign In';

        // view
        $this->view('admin/pages-sign-in', $data);
    }

    public function signUp()
    {
        // title
        $data['judul'] = 'Shoestore | Admin Sign Up';

        // view
        $this->view('admin/pages-sign-up', $data);
    }

    public function shoes()
    {
        // title
        $data['judul'] = 'Shoestore | Admin Shoes';

        // model
        $data['shoes'] = $this->model('Shoes_model')->getAllShoesSorted();

        // view
        $this->view('templates/admin-header', $data, 'shoes');
        $this->view('admin/pages-shoes', $data);
        $this->view('templates/admin-footer');
    }

    public function tambah()
    {
        if ($this->model('Shoes_model')->tambahShoes($_POST) > 0) {
            Flasher::setFlash('Added');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('Failed to add');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }

    public function getEdit($id)
    {
        // title
        $data['judul'] = 'Shoestore | Edit Shoes';

        // model
        $data['shoes'] = $this->model('Shoes_model')->getShoesById($id);

        // view
        $this->view('templates/admin-header', $data, 'shoes');
        $this->view('admin/pages-edit', $data);
        $this->view('templates/admin-footer');
    }

    public function edit()
    {
        if ($this->model('Shoes_model')->editShoes($_POST) > 0) {
            Flasher::setFlash('Edited');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        } else {
            Flasher::setFlash('Failed to edit');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Shoes_model')->deleteShoes($id) > 0) {
            Flasher::setFlash('Deleted');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        } else {
            Flasher::setFlash('Failed to delete');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }
}
