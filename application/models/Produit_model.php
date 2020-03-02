<?php
class Produit_model extends CI_Model
{



   public function __construct()
   {
      $this->load->database();
   }

   /////////////////////////////////////////////////////
   //récupere les infos dans la bdd en fonction de l'id 
   ///////////////////////////////////////////////////
   public function getProduit($id = 0)
   {
      if ($id <= 0) {
         $query = $this->db->get('produit');
         return $query->result_array();
      }
      $query = $this->db->get_where('produit', array('produitId' => $id));
      return $query->row_array();
   }

   public function setProduit($id = 0)
   {
      $data = array(
         'nomProduit' => $this->input->post('nomProduit'),
         'descriptProduit' => $this->input->post('descriptProduit'),
         'qttProduit' => $this->input->post('qttProduit'),
         'isAvailable' => $this->input->post('isAvailable'),
         'prixProduit' => $this->input->post('prixProduit'),
      );


      if ($id <= 0) {
         //insert 
         $query = $this->db->insert('produit', $data);
         return $query;
      }
      // update
      $this->db->where('produitId', $id);
      $query = $this->db->update('produit', $data);
      return $query;
   }

   public function delete($id)
   {
      $query = $this->db->delete('produit', array('produitId' => $id));
      return $query;
   }
}
