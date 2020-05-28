<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function ListCategorie()
    {
        $this->load->model('CategorieModel');
        $aListe = $this->CategorieModel->ListCategories();
        $aView["ListCategorie"] = $aListe;
        $btnaj = $this->input->post("ajoutcat");
        if ($btnaj) {
            $this->load->library('upload');
            $this->input->post();
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('ListCategorie', $aView);
            } else {
                $data["cat_nom"] = $this->input->post("cat_nom");
                if($this->input->post("cat_parent")!="")
                $data["cat_parent"] = $this->input->post("cat_parent");
                var_dump($data);
                $aCategories = $this->CategorieModel->AjouterC($data);
                $aView["categories"] = $aCategories;
                redirect('Categories/ListCategorie');

            }
        } else {
            $this->load->view('ListCategorie', $aView);
        }
    }



    public function modifcat($id)
    {
        $this->load->model('CategorieModel');
        $aCategories = $this->CategorieModel->ListCategories();
        $aView["categories"] = $aCategories;
        $this->load->model('CategorieModel');
        $aModif = $this->CategorieModel->Categorie($id);
        $aView["cat"] = $aModif;

        $this->load->library('upload');
        if ($this->input->post()) {
            $data = $this->input->post();
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('modifcat', $aView);
            } else {
                $data = $this->input->post();
                var_dump($data);
                $aCategories = $this->CategorieModel->ModifC($data, $id);
                $aView["categories"] = $aCategories;
                redirect('Categories/ListCategorie');
            }
        } else {

            $this->load->view('modifcat', $aView);
        }
    }



    public function supprimcat()
    {
        $this->load->model('CategorieModel');
        $aListC = $this->CategorieModel->ListCategories();
        $aView["categories"] = $aListC;
        $this->load->model('CategorieModel');
        $data = $this->input->post("btnsuppcat");
        // traitement du formulaire
        if ($data) {

            $id = $this->input->post('cat_id');
            $this->load->model('CategorieModel');
            $this->CategorieModel->SupprimerC($id);
            redirect("Categories/ListCategorie");
        } else {
            $this->load->view('supprimcat', $aView);
        }
    }
}

