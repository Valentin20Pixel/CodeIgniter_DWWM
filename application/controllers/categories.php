<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function ajoutercat()
    {

        $aCategories = $this->CategorieModel->ajouter();
        $aView["categories"] = $aCategories;
        $this->load->library('upload');
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
            var_dump($data);
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('ajouter', $aView);
            } else {
                redirect('categories/ajoutercat');
            }
        } else {
            $this->load->view('ajoutercat', $aView);

        }
    }
    public function Categories()
    {
        $aCategories = $this->CategorieModel->liste();
        $aView["categ"] = $aCategories;
        $this->load->view('categ', $aView);
    }
}
