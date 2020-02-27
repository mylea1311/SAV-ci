<?php

class ClientEntity
{
   private $clientId;
   private  $nomClient;
   private  $numClient;
   private  $adresse;
   private  $numTel;
   private  $mail;

   //CONSTRUCTEUR 
   public function __construct(array $data)
   {
      $this->hydrate($data);
   }

   public function hydrate(array $data)
   {
      foreach ($data as $property => $value) {
         $setterMethode = 'set' . ucfirst($property);
         if (method_exists($this, $setterMethode)) {
            $this->$setterMethode($value);
         };
      }
   }



   // GETTERS
   public function getClientId()
   {
      return $this->clientId;
   }
   public function getNomClient()
   {
      return $this->nomClient;
   }
   public function getNumClient()
   {
      return $this->numClient;
   }
   public function getAdresse()
   {
      return $this->adresse;
   }
   public function getNumTel()
   {
      return $this->numTel;
   }
   public function getMail()
   {
      return $this->mail;
   }

   //SETTERS 
   public function setNomClient(string $nomClient)
   {
      $this->nomClient = $nomClient;
   }
   public function setNumClient(int $numClient)
   {
      $this->numClient = $numClient;
   }
   public function setAdresse(string $adresse)
   {
      $this->adresse = $adresse;
   }
   public function setNumTel(string $numTel)
   {
      $this->numTel = $numTel;
   }
   public function setMail(string $mail)
   {
      $this->mail = $mail;
   }
}
