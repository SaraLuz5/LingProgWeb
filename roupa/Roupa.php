<?php

class Roupa{
 private string $tipo;
 private string $tamanho;
 private string $marca;
 private string $valor;
 private string $composicao;
 private string $imagem;

 

 /**
  * Get the value of tipo
  */
 public function getTipo(): string
 {
  return $this->tipo;
 }

 /**
  * Set the value of tipo
  */
 public function setTipo(string $tipo): self
 {
  $this->tipo = $tipo;

  return $this;
 }

 /**
  * Get the value of tamanho
  */
 public function getTamanho(): string
 {
  return $this->tamanho;
 }

 /**
  * Set the value of tamanho
  */
 public function setTamanho(string $tamanho): self
 {
  $this->tamanho = $tamanho;

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
  * Get the value of valor
  */
 public function getValor(): string
 {
  return $this->valor;
 }

 /**
  * Set the value of valor
  */
 public function setValor(string $valor): self
 {
  $this->valor = $valor;

  return $this;
 }

 /**
  * Get the value of composicao
  */
 public function getComposicao(): string
 {
  return $this->composicao;
 }

 /**
  * Set the value of composicao
  */
 public function setComposicao(string $composicao): self
 {
  $this->composicao = $composicao;

  return $this;
 }

 /**
  * Get the value of imagem
  */
 public function getImagem(): string
 {
  return $this->imagem;
 }

 /**
  * Set the value of imagem
  */
 public function setImagem(string $imagem): self
 {
  $this->imagem = $imagem;

  return $this;
 }

}