<?php

class Carta {

    private string $nome;
    private string $link;
    private string $naipe;


    public function __toString()
    {
        $html = "<span style='font-weight: bold;'>Carta:</span>";
        $html .= $this->nome . " " . $this->naipe;
        $html .= "<br>";

        $html .= "<span style='font-weight: bold;'>Imagem:</span>";
        $html .= $this->link;
        return $html;
    }


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of naipe
     */
    public function getNaipe(): string
    {
        return $this->naipe;
    }

    /**
     * Set the value of naipe
     */
    public function setNaipe(string $naipe): self
    {
        $this->naipe = $naipe;

        return $this;
    }

}