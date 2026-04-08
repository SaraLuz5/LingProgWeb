<?php

Class Produto{
    private string $descricao;
    private string $tipo;
    private string $marca;
    private string $valor;
    private string $linlImagem;
    private string $descDetalhada;

    


    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

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
     * Get the value of linlImagem
     */
    public function getLinlImagem(): string
    {
        return $this->linlImagem;
    }

    /**
     * Set the value of linlImagem
     */
    public function setLinlImagem(string $linlImagem): self
    {
        $this->linlImagem = $linlImagem;

        return $this;
    }

    /**
     * Get the value of descDetalhada
     */
    public function getDescDetalhada(): string
    {
        return $this->descDetalhada;
    }

    /**
     * Set the value of descDetalhada
     */
    public function setDescDetalhada(string $descDetalhada): self
    {
        $this->descDetalhada = $descDetalhada;

        return $this;
    }
}