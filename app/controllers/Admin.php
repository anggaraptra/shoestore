<?php

class Admin extends Controller
{
    public function index()
    {
        $data['status1'] = 'active';
        $data['status2'] = '';
        $data['status3'] = '';
        $data['judul'] = 'Shoestore | Admin Dashboard';
        $data['pesanan'] = $this->model('Pesanan_model')->getAllPesananSorted();
        $this->view('templates/admin-header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/admin-footer');
    }

    public function profile()
    {
        $data['status1'] = '';
        $data['status2'] = 'active';
        $data['status3'] = '';
        $data['judul'] = 'Shoestore | Admin Profile';
        $data['user_admin'] = $this->model('Admin_model')->getAllAdmin();
        $this->view('templates/admin-header', $data);
        $this->view('admin/pages-profile', $data);
        $this->view('templates/admin-footer');
    }

    public function signIn()
    {
        $data['judul'] = 'Shoestore | Admin Sign In';
        $this->view('admin/pages-sign-in', $data);
    }

    public function signUp()
    {
        $data['judul'] = 'Shoestore | Admin Sign Up';
        $this->view('admin/pages-sign-up', $data);
    }

    public function shoes()
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['status3'] = 'active';
        $data['judul'] = 'Shoestore | Admin Shoes';
        $data['shoes'] = $this->model('Shoes_model')->getAllShoesSorted();
        $this->view('templates/admin-header', $data);
        $this->view('admin/pages-shoes', $data);
        $this->view('templates/admin-footer');
    }

    public function tambah()
    {
        if ($this->model('Shoes_model')->tambahShoes($_POST) > 0) {
            Flash_message::setFlash('Added');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flash_message::setFlash('Failed to add');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }

    public function getEdit($id)
    {
        $data['status1'] = '';
        $data['status2'] = '';
        $data['status3'] = '';
        $data['judul'] = 'Shoestore | Edit Shoes';
        $data['shoes'] = $this->model('Shoes_model')->getShoesById($id);
        $this->view('templates/admin-header', $data);
        $this->view('admin/pages-edit', $data);
        $this->view('templates/admin-footer');
    }

    public function edit()
    {
        if ($this->model('Shoes_model')->editShoes($_POST) > 0) {
            Flash_message::setFlash('Edited');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        } else {
            Flash_message::setFlash('Failed to edit');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Shoes_model')->deleteShoes($id) > 0) {
            Flash_message::setFlash('Deleted');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        } else {
            Flash_message::setFlash('Failed to delete');
            header('Location: ' . BASEURL . '/admin/shoes');
            exit;
        }
    }
}
