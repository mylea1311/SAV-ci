<?php


class Produit extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->model('produit_model');
   }

   // METHODE VUE
   public function views()
   {
      $data['produits'] =  $this->produit_model->getProduit();
      $data['title'] = 'Liste des Produits';

      $this->load->view('templates/header', $data);
      $this->load->view('produit/produitView', $data);
      $this->load->view('templates/footer');
   }
   // on recupe tout les produit si id === 0 
   // sinon on retourne le produit qui coorespond a l'id
   public function produit($id)
   {
      $data['produit'] = $this->produit_model->getProduit($id);
      $data['title'] = $data['produit']['nomProduit'];
      $this->load->view('templates/header', $data);
      $this->load->view('produit/onProduit', $data);
      $this->load->view('templates/footer');
   }

   public function create()
   {
      // Création du formulaire
      $this->load->helper('form');
      // checkez les erreurs faites dans le formulaire
      $this->load->library('form_validation');
      // mise en place des règles de champs
      $this->form_validation->set_rules('nomProduit', 'NomProduit', 'required');
      $this->form_validation->set_rules('descriptProduit', 'DescriptProduit', 'required');
      $this->form_validation->set_rules('qttProduit', 'QttProduit', 'required');
      $this->form_validation->set_rules('isAvailable', 'IsAvailable', 'required');
      $this->form_validation->set_rules('prixProduit', 'PrixProduit', 'required');


      // condition qui servira à savoir si notre formulaire à bien était envoyer
      $data['title'] = "Formulaire produit";
      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('produit/create');
         $this->load->view('templates/footer');
      } else {
         $this->produit_model->setProduit();
         $this->load->view('templates/success');
      }
   }

   public function update($id)
   {

      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = "Modification sur le Produit";

      // recuperation des information produit afin d'appliquer notre méthode update 
      // et de pouvoir le modifier mise en place des regle du formulaire
      $data['produit'] = $this->produit_model->getProduit($id);
      $this->form_validation->set_rules('nomProduit', 'NomProduit', 'required');
      $this->form_validation->set_rules('descriptProduit', 'DescriptProduit', 'required');
      $this->form_validation->set_rules('qttProduit', 'QttProduit', 'required');
      $this->form_validation->set_rules('isAvailable', 'IsAvailable', 'required');
      $this->form_validation->set_rules('prixProduit', 'PrixProduit', 'required');



      // Vérification des regles faire si une regle est fause la methode qui suit

      if ($this->form_validation->run() === FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('produit/update_view', $data);
         $this->load->view('templates/footer');
      } else {
         $this->produit_model->setProduit($id);
         redirect(base_url("produits/$id"));
      }
   }
   public function delete($id)
   {
      $this->produit_model->delete($id);

      redirect(base_url('index.php'));
   }
}
