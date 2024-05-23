<?php
echo "Hola Mundo";
?>

<?php

//VARIABLES
$name = "Mauricio";
$age = 33;
$ocupation = "Programador";
$newAge = $age + 100;
$ocupationNumber = $age . 50; //Para concatenar se utiliza el punto .
$ocupationNumber .= 1000;
var_dump($name); //Para saber el tipo de variable
var_dump($ocupation);
gettype($age);

//Para escapar algún símbolo (para que se vea un símbolo com opor ejemplo el $, ponemos una barra diagonal invertida antes del símbolo  \$)
//Para forzar un tipo de dato (bolean) numero;


//CONSTANTES GLOBALES
define('EMPRESA', 'Terraza Miramar');

//CONSTANTES LOCALES
const APELLIDO = "Murcia";

//IF
if ($newAge < 1) {
    echo "<h1>Eres maduro</h1>";
} else {
    echo "<h2> Eres muy Jóven</h2>";
}

if ($ocupationNumber < 50) {
    echo "Eres un crack";
} elseif ($ocupationNumber == 100) {
    echo "No sé qué eres";
} else {
    echo "Nu aparece";
}
?>

<style>
    body {
        background-color: black;
        color: white;
        font-size: 25px;
        display: grid;
        place-content: center;
    }
</style>
<h1>
    <?= "Mi Primera App"; ?> <br>
    <?= "Mi nombre es $name"; ?>
    <?= "$newAge"; ?>
    <?= "$ocupationNumber"; ?><br>
    <?= EMPRESA; ?><br>
    <?= APELLIDO; ?><br>
</h1>

<script>
    console.log('ESTE ES EL TEXTO')
</script>

<?php

if ($age < 30) : ?>
    <h2>"Eres inexperto"</h2>
<?php
elseif ($age === 33) : ?>
    <h2>Tienes la edad de Cristo</h2>
<?php
else : ?>
    <h2>No sé qué edad tienes</h2>
<?php endif; ?>

<?php
//Para hacer una ternaria del ejemplo anterior:
$newAge = $age
    ? 'Eres inexeperto'
    : 'Eres cabrón'
?>

<?= $newAge; ?>

<?php

//Para hacer un match

$calificacion = 6;

$outputCalificacion = match (true) {
    $calificacion < 3 => "Estás expulsado del curso",
    $calificacion < 6 => "Has perdido el curso pero puedes repetirlo",
    $calificacion < 8 => "Felicitaciones!!, has aprobado el curso",
    $calificacion >= 8 => "Enhorabuena! tienes un resultado por encima del superior",
    $calificacion === 10 => "Eres la perfección!! Imparable",
    default => "No tienes una nota asignada"
}
?>
<?= "<h2>$outputCalificacion</h2>" ?>

<?php
//ARRAYS

$bestLanguages = ["PHP", "JavaScript", "Python"];

//Para agregar al array otro lenguaje al final:

$bestLanguages[] = "Java";

//Puedo poner dentro del paréntesis un número para reemplazarlo

$bestLanguages[2] = "C++"

//Para recorrer el array con un bucle forearch:
?>

<ul>
    <!-- para tener el índica, podemos poner $bestLanguages as $key => $language y abajo concatenamos con punto en cada li, ejemplo key . $language -->
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>

<?php
//Para hacer un objeto
$persona = [
    "nombre" => "Mauricio",
    "edad" => 78,
    "sexo" => "Hombre",
];
?>

<?php

//Llamar a una API con php

//Inicializar una nueva sesión 
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
# Indicar que queremos recibir el resultado y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);

curl_close($ch);

//var_dump($data);

?>

<head>

    <title>La Próxima Película de Marvel</title>
</head>

<main>
    <section>
        <h2><img src=<?= "$data[poster_url]" ?> alt=""></h2>
        <h2><?= $data["release_date"] ?></h2>
    </section>
</main>