<?php
class Commande_model extends CI_Model
{



   public function __construct()
   {
      $this->load->database();
   }

   /////////////////////////////////////////////////////
   //récupere les infos dans la bdd en fonction de l'id 
   ///////////////////////////////////////////////////
   public function getCommande($id = 0)
   {
      if ($id <= 0) {
         $query = $this->db->get('commande');
         return $query->result_array();
      }
      $query = $this->db->get_where('commande', array('commandeId' => $id));
      return $query->row_array();
   }

   public function setCommande($id = 0)
   {
      $data = array(
         'nomCommande' => $this->input->post('nomCommande'),
         'dateCommande' => $this->input->post('dateCommande'),
         'isDelivred' => $this->input->post('isDelivred'),
         'fk_clientId' => $this->input->post('fk_clientId'),
      );


      if ($id <= 0) {
         //insert 
         $query = $this->db->insert('commande', $data);
         return $query;
      }
      // update
      $this->db->where('commandeId', $id);
      $query = $this->db->update('commande', $data);
      return $query;
   }

   public function delete($id)
   {
      $query = $this->db->delete('commande', array('commandeId' => $id));
      return $query;
   }
}
