<?php 

class Email implements CanalComunicacao {

    public function enviar(string $destinatario, string $mensagem): bool
    {
       return mail(
       $destinatario, 
        'Compra Finalizada Simonetti',
         $mensagem
        );
    }
    
    public function nome(): string 
    {
        return 'Email';
    }
}