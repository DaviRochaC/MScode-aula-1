<?php 

class Cliente {

    public function __construct(
        public readonly int $id,
        public readonly string $nome,
        private string $telefone,
        public readonly string $cpf, 
        private float $saldoDevedor
    ){}


    public function getId(): int
    {
        return $this->id;
    }
}