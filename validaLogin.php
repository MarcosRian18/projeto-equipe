<?php
$usuario_valido = false;

$usuario_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => 123456),
    array('email' => 'user@teste.com.br', 'senha' => 987654)
);

foreach($usuario_app as $user) {
    if($user['email'] == $_POST['email']
    && $user['senha'] == $_POST['senha'] ) {
        $usuario_valido = true;
    }
}

if($usuario_valido) {
    echo 'Usuário válido!';
} else{
    header('Location: index.php?login=erro');
}










?>