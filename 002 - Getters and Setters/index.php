<?php

class Login {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        return $this->email = $e;
    }
    
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        return $this->senha = $s;
    }

    public function Logar() {
        if($this->email == 'teste@teste.com' && $this->senha == '123456'){
            echo "logado com sucesso";
        }else {
            echo "Dados inválidos";
        }
    }
}

$login = new Login();
$login->setEmail("teste@teste.com");
$login->setSenha("123456");
echo $login->getEmail();
$login->Logar();

?>