<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function ajoutercat()
    {
        $this->load->model('CategorieModel');
        $aCategories = $this->CategorieModel->ListCategorie();
        $aView["categories"] = $aCategories;
        $this->load->library('upload');
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

            if ($this->form_validation->run() == FALSE) {
                var_dump($data);
                var_dump($this->form_validation);
            
                $this->load->view('ajoutercat', $aView);
            } else {
                $data = $this->input->post();
                var_dump($data);
                $aCategories = $this->CategorieModel->AjouterC($data);
                $aView["categories"] = $aCategories;
                redirect('produits/liste');
            }
        } else {
            $this->load->view('ajoutercat', $aView);
        }
    }

// public function GetCategorie()
// {
//             $this->load->model('CategorieModel');
//         $aListe = $this->CategorieModel->ListCategorie();
//         $aView["ListCategorie"] = $aListe;
// }
    public function ListCategorie()
    {
        $this->load->model('CategorieModel');
        $aListe = $this->CategorieModel->ListCategorie();
        $aView["ListCategorie"] = $aListe;
        $this->load->view('ListCategorie', $aView);
    }



    public function modifcat($id)
    {
        $this->load->model('CategorieModel');
        $aCategories = $this->CategorieModel->ListCategorie();
        $aView["categories"] = $aCategories;
        $this->load->model('CategorieModel');
        $aModif = $this->CategorieModel->Categorie($id);
        $aView["cat"] = $aModif;
        var_dump($aModif);
        $this->load->library('upload');
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

            if ($this->form_validation->run() == FALSE) {
                var_dump($data);
                var_dump($this->form_validation);
            
                $this->load->view('modifcat', $aView);
            } else {
                $data = $this->input->post();
                var_dump($data);
                $aCategories = $this->CategorieModel->ModifC($data);
                $aView["categories"] = $aCategories;
                redirect('Categories/ListCategorie');
            }
        } else {
            $this->load->view('modifcat', $aView);
        }
    }
}
