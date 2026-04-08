<?php

class Veiculo{
    
   private string $modelo;
   private string $marca;
   private string $combust;

   public function getCombustDesc() {
     if ($this->combust == "G"){
      return "Gasolina";
     }

     if ($this->combust == "A"){
      return "Álcool";
     }

     if ($this->combust == "F"){
      return "Flex";
     }
   }
   

   /**
    * Get the value of modelo
    */
   public function getModelo(): string
   {
      return $this->modelo;
   }

   /**
    * Set the value of modelo
    */
   public function setModelo(string $modelo): self
   {
      $this->modelo = $modelo;

      return $this;
   }

   /**
    * Get the value of marca
    */
   public function getMarca(): string
   {
      return $this->marca;
   }

   /**
    * Set the value of marca
    */
   public function setMarca(string $marca): self
   {
      $this->marca = $marca;

      return $this;
   }

   /**
    * Get the value of combust
    */
   public function getCombust(): string
   {
      return $this->combust;
   }

   /**
    * Set the value of combust
    */
   public function setCombust(string $combust): self
   {
      $this->combust = $combust;

      return $this;
   }
}