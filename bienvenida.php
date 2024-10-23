<?php
// Array multidimensional amb la informació de cada casa
$casas_info = [
    "Gryffindor" => [
        "background_color" => "#740001",
        "text_color" => "#FFD700",
        "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
        "message_background" => "#D3A625",
        "image" => "images/gryffindor.jpg"
    ],
    "Hufflepuff" => [
        "background_color" => "#FFDB00",
        "text_color" => "#60605B",
        "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
        "message_background" => "#EEE117",
        "image" => "images/hufflepuff.jpg"
    ],
    "Ravenclaw" => [
        "background_color" => "#0E1A40",
        "text_color" => "#946B2D",
        "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
        "message_background" => "#5D5D5D",
        "image" => "images/ravenclaw.png"
    ],
    "Slytherin" => [
        "background_color" => "#1A472A",
        "text_color" => "#AAAAAA",
        "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
        "message_background" => "#5D5D5D",
        "image" => "images/slytherin.jpg"
    ]
];

//recoger valores de nombre y apellido(s)
$nom = $_POST['nom'];
$cognoms = $_POST['cognoms'];

//seleccionar la info de la casa elegida aleatoriamente
$casa_seleccionada = array_rand($casas_info);
$info_casa = $casas_info[$casa_seleccionada];

?>


<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        echo "
            <style>
                body {
                    background-color: " . $info_casa['background_color'] . ";
                    color: " . $info_casa['text_color'] . ";
                }
                .welcome-message {
                    background-color: " . $info_casa['message_background'] . ";
                    padding: 20px;
                    border-radius: 5px;
                }
            </style>
        ";
    ?>
    <div class="container text-center">
    <?php
        echo "
            <div class='welcome-message mt-4'>
                <h1>Benvingut a " . $casa_seleccionada . "</h1>
                <p>" . $info_casa['welcome_message'] . "</p>
                <p>Estimat/da " . $nom . " " . $cognoms . ", ens complau donar-te la benvinguda a " . $casa_seleccionada . "!</p>
                <img src='" . $info_casa['image'] . "' alt='Escut de " . $casa_seleccionada . "' class='mt-4' style='width: 200px;'>
            </div>
            
        ";
    ?>   
    </div>
</body>
</html>