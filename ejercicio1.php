<?php
$personajes = [
    ["personaje" =>"principe","categoria"=> "villanos"],
    ["personaje" =>"senora","categoria"=> "villanos"],
    ["personaje" =>"shrek","categoria"=> "principal"],
    ["personaje" =>"burro","categoria"=> "principal"],
    ["personaje" =>"galleta","categoria"=> "amigo"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MENU</h1>
    <h3>PERSONAJES DE SHERK</h3>
    <label>filtrar</label>
    <select name="categoria">
        <option value="principal">principal</option>
        <option value="villanos">villanos</option>
        <option value="amigo">amigos</option>
    </select>
</body>
</html>