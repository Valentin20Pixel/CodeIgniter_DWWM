<?php
// application/controllers/Produits.php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function liste()
    {

        $this->load->model('CategoriesModel');
        $aCategories = $this->CategoriesModel->liste();
        $aView["categories"] = $aCategories;
        $this->load->view('categories', $aView);
    }
//     public function Categories()
//     {

//         $this->load->model('CategoriesModel');
//         $aCategorie = $this->CategoriesModel->Categories();
//         $aView["CCategorie"] = $aCategorie;
//         $this->load->view('CCategorie', $aView);
//     }

//     public function Cajouter()
//     {
//         $this->load->model('CategoriesModel');
//         $aCategorie = $this->CategoriesModel->Cajouter();
//     }
}
