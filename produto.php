<?php 

class Produto {

    public function __construct(
        public readonly int $codigo,
        public readonly string $nome,
        public readonly string $descricao,
        private float $preco,
        private string $categoria,
        private string $caminhoImagem,
        private int $quantidade
    )
    {
        if($this->preco < 0) {
            throw new Exception("Preço não pode ser negativo");
        }
    }
    

}