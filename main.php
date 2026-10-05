
```php
<?php

echo "Digite uma senha: ";
$senha = readline();

$valida = true;

// Verifica se tem pelo menos 8 caracteres
if (strlen($senha) < 8) {
    echo "A senha deve ter pelo menos 8 caracteres.\n";
    $valida = false;
}

// Verifica se tem letra maiúscula
if (!preg_match('/[A-Z]/', $senha)) {
    echo "A senha deve ter pelo menos uma letra maiúscula.\n";
    $valida = false;
}

// Verifica se tem letra minúscula
if (!preg_match('/[a-z]/', $senha)) {
    echo "A senha deve ter pelo menos uma letra minúscula.\n";
    $valida = false;
}

// Verifica se tem número
if (!preg_match('/[0-9]/', $senha)) {
    echo "A senha deve ter pelo menos um número.\n";
    $valida = false;
}

// Resultado final
if ($valida) {
    echo "Senha válida!\n";
} else {
    echo "Senha inválida!\n";
}

?>
```