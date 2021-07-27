<?php

include('Funcionarios.php');

$funcionarios = new Funcionarios();

$todos = $funcionarios->all();
$func = $funcionarios->find('321');

print_r($todos);
echo '<br><br>';
print_r($func);

?>