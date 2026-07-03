<?php
session_start();

$perguntas = [
    1 => [
        "pergunta" => "1. Roblox foi Criado em qual ano?",
        "opcoes" => [
            "a" => "2010",
            "b" => "2008",
            "c" => "2000",
            "d" => "1999",
        ],                               
        "resposta" => "b"
    ],
    2 => [
        "pergunta" => "2. Qual é o nome da 2 moeda antigas usada no Roblox",
        "opcoes" => [
            "a" => "Robux e tix",
            "b" => "ticket e gems",
            "c" => "robux e diamantes",
            "d" => "gems e diamantes",
        ],
        "resposta" => "a"
    ],
    3 => [
        "pergunta" => "3. Qual dos jogos abaixo é o mais famoso e clássico do Roblox?",
        "opcoes" => [
            "a" => "lucky block",
            "b" => "blox fruit",
            "c" => "fisch",
            "d" => "meepcity",
        ],
        "resposta" => "a"
    ],
    4 => [
        "pergunta" => "4. Quem fundou o Roblox?",
        "opcoes" => [
            "a" => "Mark Zuckerberg",
            "b" => "David Baszucki e Erik Cassel",
            "c" => "Gabe Newell",
            "d" => "Shigeru Miyamoto",
        ],
        "resposta" => "b"
    ],
    5 => [
        "pergunta" => "5. O que significa “Noob”?",
        "opcoes" => [
            "a" => "Um jogador experiente",
            "b" => "Um glitch famoso",
            "c" => "Um tipo de item raro",
            "d" => "Um jogador novo ou iniciante",
        ],
        "resposta" => "d"
    ],
    6 => [
        "pergunta" => "6. Qual é o limite máximo de Robux que um jogador gratuito pode ganhar por dia no grupo de Robux?",
        "opcoes" => [
            "a" => "344 Milhões",
            "b" => "9283 trilhões",
            "c" => "não existe limite maximo",
            "d" => "99999999999 nonilhões",
        ],
        "resposta" => "c"
    ],
    7 => [
        "pergunta" => "7. Qual desses é um dos simuladores mais populares do Roblox?",
        "opcoes" => [
            "a" => "Pet Simulator X",
            "b" => "Arsenal",
            "c" => "Phantom Forces",
            "d" => "Tower of Hell",
        ],
        "resposta" => "a"
    ],
    8 => [
        "pergunta" => "8. O que é “DevEx”?",
        "opcoes" => [
            "a" => "Um evento de desenvolvimento",
            "b" => "Um tipo de avatar",
            "c" => "O programa que permite aos desenvolvedores trocar Robux por dinheiro real",
            "d" => "uma pessoa muito boa"
        ],
        "resposta" => "c"
    ],
    9 => [
        "pergunta" => "9. antes do David Baszucki e Erik Cassel pensa no nome do roblox, qual era o nome do projeto",
        "opcoes" => [
            "a" => "Robloxiano",
            "b" => "Mineblox",
            "c" => "bloxbattle",
            "d" => "Dynablocks",
        ],
        "resposta" => "d" 
    ],
    10 => [
        "pergunta" => "10. qual é o meu game preferido no roblox 😈🔥",
        "opcoes" => [
            "a" => "fisch",
            "b" => "brookheaven",
            "c" => "touck football",
            "d" => "phanton force",
        ],
        "resposta" => "a"
    ],
    
];

$Agora = isset($_GET['q']) ? (int)$_GET['q'] : 1;

if (!isset($perguntas[$Agora])) {
    header("Location: Resultado.php");
    exit;
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resposta = $_POST['resposta'] ?? '';
    $_SESSION['respostas'][$Agora] = $resposta;
    
    $proxima = $Agora + 1;
    header("Location: Quiz.php?q=$proxima");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@406&family=Geist+Pixel&family=Montenegrin+Gothic+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
.cinzel-uniquifier {
  font-family: "Cinzel", serif;
  font-optical-sizing: auto;
  font-weight: 777;
  font-style: normal;
}
        body {
            background: #4a90e2;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .quiz-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 90%;
        }
        label {
            display: block;
            margin: 15px 0;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="quiz-box">
    <h2><?= $perguntas[$Agora]['pergunta'] ?></h2>
    
    <form method="POST">
        <?php foreach($perguntas[$Agora]['opcoes'] as $letra => $texto): ?>
            <label class="cinzel-uniquifier">
                <input type="radio" name="resposta" value="<?= $letra ?>" 
                       onclick="this.form.submit()" required>
                <strong><?= $letra ?></strong> <?= $texto ?>
            </label>
        <?php endforeach; ?>
    </form>
</div>

</body>
</html>