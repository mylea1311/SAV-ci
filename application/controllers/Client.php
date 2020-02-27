<?php


class Client extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->model('client_model');
   }


   // METHODE VUE
   public function views()
   {
      $data['clients'] =  $this->client_model->get_client();
      $data['title'] = 'Liste des clients';

      $this->load->view('templates/header', $data);
      $this->load->view('client/clientView', $data);
      $this->load->view('templates/footer');
   }
   // on recupe tout les client si id === 0 
   // sinon on retourne le client qui coorespond a l'id
   public function client($id)
   {
      $data['client'] = $this->client_model->get_client($id);
      $data['title'] = $data['client']['nomClient'];
      $this->load->view('templates/header', $data);
      $this->load->view('client/onClient', $data);
      $this->load->view('templates/footer');
   }

   public function create()
   {
      // Création du formulaire
      $this->load->helper('form');
      // checkez les erreurs faites dans le formulaire
      $this->load->library('form_validation');
      // mise en place des règles de champs
      $this->form_validation->set_rules('nomClient', 'NomClient', 'required');
      $this->form_validation->set_rules('numClient', 'NumClient', 'required');
      $this->form_validation->set_rules('adresse', 'Adresse', 'required');
      $this->form_validation->set_rules('numTel', 'NumTel', 'required');
      $this->form_validation->set_rules('mail', 'Mail', 'required');

      // condition qui servira à savoir si notre formulaire à bien était envoyer
      $data['title'] = "Formulaire clients";
      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('client/create');
         $this->load->view('templates/footer');
      } else {
         $this->client_model->setClient();
         $this->load->view('templates/success');
      }
   }

   public function update($id)
   {
   }
}
