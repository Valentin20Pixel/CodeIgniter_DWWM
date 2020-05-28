<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{
  public function registration()
  {
    $this->load->model('ConnexModel');
    $aListe = $this->ConnexModel->ListConnex();
    $aView["ListConnex"] = $aListe;

    if ($this->input->post()) {

      $dat = $this->input->post();
      $this->form_validation->set_rules("login", "password", "confpasswd");
      if ($this->form_validation->run() == FALSE){
        $this->load->view('registration', $aView);

      } else {
        $this->load->database();
        $data["login"] = $this->input->post("login");
        $data["password"] = $this->input->post("password");
        $data["role"] = "client";
        $this->load->model('ConnexModel');
        $aUser = $this->ConnexModel->inscription($data);
        $aView["inscription"] = $aUser;
        redirect('pages/home');
      }
    }else{
      $this->load->view('registration', $aView);
    }
  } // -- inscription() 

  public function signup()
  {
    $id = $this->input->post("login");
    $this->load->model('ConnexModel');
    $aUser = $this->ConnexModel->User($id);
    $aView["User"] = $aUser;
    if($this->input->post()){
      $dat = $this->input->post();
      $this->form_validation->set_rules("login", "password", "required");
      if($this->form_validation->run() == FALSE){
        $this->load->view('home', $aView);
      } else {
        $this->load->model('ConnexModel');
        $aProduit = $this->ConnexModel->User($id);
        $aView["user"] = $aProduit;
        $this->load->view("user", $aView);
        $this->input->post();
        redirect('pages/home');
      }
    }
  }
}
