<?php 

class Produto {
    public int $codigo;
    public string $nome;
    public string $descricao;
    public float $preco;
    public string $categoria;
    public string $caminhoImagem;
    public int $quantidade;

    public function reporEstoque(int $quantidadeRepor): self
     {
        $this->quantidade += $quantidadeRepor;
        return $this;
    }
}