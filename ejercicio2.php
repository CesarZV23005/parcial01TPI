<?php
#farenheit a c
# F = C * 9/5 + 32
#celcius  a F
# C = (F-32) 5/9
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONVERSOR DE TEMPERATURA</h1>
    <label for="temp">Ingrese el valor 1 a convertir</label>
    <input type="number" name="temp" step="0.01" required>
    <label for="temp2">Ingrese el valor 2 a convertir</label>
    <input type="number" name="temp2" step="0.01" required>
    <select name="tipo">
        <option value="farenheit">FARENHEIT</option>
        <option value="celcius">CELCIUS</option>
    </select>
</body>
</html>