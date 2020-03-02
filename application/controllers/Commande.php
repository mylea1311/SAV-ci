<?php


class Commande extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->model('commande_model');
   }

   // METHODE VUE
   public function views()
   {
      $data['commandes'] =  $this->commande_model->getCommande();
      $data['title'] = 'Liste des commandes';

      $this->load->view('templates/header', $data);
      $this->load->view('commande/commandeView', $data);
      $this->load->view('templates/footer');
   }
   // on recupe tout les commande si id === 0 
   // sinon on retourne le commande qui coorespond a l'id
   public function commande($id)
   {
      $data['commande'] = $this->commande_model->getCommande($id);
      $data['title'] = $data['commande']['nomcommande'];
      $this->load->view('templates/header', $data);
      $this->load->view('commande/onCommande', $data);
      $this->load->view('templates/footer');
   }

   public function create()
   {
      // Création du formulaire
      $this->load->helper('form');
      // checkez les erreurs faites dans le formulaire
      $this->load->library('form_validation');
      // mise en place des règles de champs
      $this->form_validation->set_rules('nomCommande', 'NomCommande', 'required');
      $this->form_validation->set_rules('dateCommande', 'DateCommande', 'required');
      $this->form_validation->set_rules('isDelivred', 'IsDelivred', 'required');
      $this->form_validation->set_rules('fk_clientId', 'Fk_clientId', 'required');


      // condition qui servira à savoir si notre formulaire à bien était envoyer
      $data['title'] = "Formulaire commannde";
      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('commande/create');
         $this->load->view('templates/footer');
      } else {
         $this->commande_model->setCommande();
         $this->load->view('templates/success');
      }
   }

   public function update($id)
   {

      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = "Modification sur le Commande";

      // recuperation des information Commande afin d'appliquer notre méthode update 
      // et de pouvoir le modifier mise en place des regle du formulaire
      $data['commande'] = $this->commande_model->getCommande($id);
      $this->form_validation->set_rules('nomCommande', 'NomCommande', 'required');
      $this->form_validation->set_rules('dateCommande', 'DateCommande', 'required');
      $this->form_validation->set_rules('isDelivred', 'IsDelivred', 'required');
      $this->form_validation->set_rules('fk_clientId', 'Fk_clientId', 'required');



      // Vérification des regles faire si une regle est fause la methode qui suit

      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('commande/update_view', $data);
         $this->load->view('templates/footer');
      } else {
         $this->commande_model->setCommande($id);
         redirect(base_url("commandes/$id"));
      }
   }
   public function delete($id)
   {
      $this->commande_model->delete($id);

      redirect(base_url('index.php'));
   }
}
