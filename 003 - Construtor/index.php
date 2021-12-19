<?php
// O método construtor é iniciando sempre que instanciamos uma classe

class Login {
    private $email;
    private $senha;
    private $nome;

    // Construtor

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    // Get e Set

    public function getNome() {
        return $this->nome;
    }

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

$login = new Login("teste@teste.com", "123456", "breno");
echo $login->getEmail();
echo $login->getNome();
$login->Logar();

?>