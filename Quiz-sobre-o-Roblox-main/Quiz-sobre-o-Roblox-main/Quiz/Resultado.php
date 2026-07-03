<?php
session_start();

$perguntas = [
    1 => ["pergunta" =>
    "1. Roblox foi Criado em qual ano?", "resposta" => "b"],

    2 => ["pergunta" =>
     "2. Qual é o nome da 2 moeda antigas usada no Roblox", "resposta" => "a"],

    3 => ["pergunta" => 
    "3. Qual dos jogos abaixo é o mais famoso e clássico do Roblox?", "resposta" => "a"],

    4 => ["pergunta" => 
    "4. Quem fundou o Roblox?", "resposta" => "b"],

    5 => ["pergunta" => 
    "5. O que significa 'Noob'?", "resposta" => "d"],

    6 => ["pergunta" => 
    "6. Qual é o limite máximo de Robux que um jogador gratuito pode ganhar por dia no grupo de Robux?", "resposta" => "c"],

    7 => ["pergunta" => 
    "7. Qual desses é um dos simuladores mais populares do Roblox?", "resposta" => "a"],

    8 => ["pergunta" => 
    "8. O que é 'DevEx'?", "resposta" => "c"],

    9 => ["pergunta" => 
    "9. antes do David Baszucki e Erik Cassel pensa no nome do roblox, qual era o nome do projeto", "resposta" => "d"],

    10 => ["pergunta" => 
    "10. qual é o meu game preferido no roblox", "resposta" => "a"]
];

$respostasUsuario = $_SESSION['respostas'] ?? [];
$acertos = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@406&family=Geist+Pixel&family=Montenegrin+Gothic+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            
            background: #4a90e2;
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 700px;
            width: 95%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        h1 { color: #4a90e2; }
        .score {
            font-size: 60px;
            font-weight: bold;
            color: #27ae60;
            margin: 10px 0;
        }
        .resposta {
            padding: 15px;
            margin: 12px 0;
            border-radius: 10px;
            border: 3px solid #ccc;
            transition: all 0.3s;
        }
        .cinzel-uniquifier {
  font-family: "Cinzel", serif;
  font-optical-sizing: auto;
  font-weight:699;
  font-style: normal;
}
    </style>
</head>
<body>

<div class="box cinzel-uniquifier">


    <?php foreach($perguntas as $num => $p): 
        $Pessoa = $respostasUsuario[$num] ?? 'Não respondeu';
        $certa = $p['resposta'];
        $isCorrect = ($Pessoa === $certa);
        if ($isCorrect) $acertos++;
    ?>

        <div class="resposta" data-correct="<?= $isCorrect ? 'true' : 'false' ?>">
            <strong><?= $num ?>. <?= $p['pergunta'] ?></strong>
            <br>
            <br>
            Boa, pelo visto sabe o basico: <?= $Pessoa ?><br>
            <?php if (!$isCorrect): ?>
                <small>Errado bro, alternativa certa era essa: <?= $certa ?></small>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <a href="Quiz.php" style="display:inline-block; margin-top:20px; padding:12px 25px; background:#4a90e2; color:white; text-decoration:none; border-radius:8px;">
        Reiniciar Quiz
    </a>
</div>
<script>
    
    document.querySelectorAll('.resposta').forEach(div => {
        const isCorrect = div.getAttribute('data-correct') === 'true';
        
        if (isCorrect) {
            div.style.borderColor = '#00ff6a';
            div.style.backgroundColor = '#e8f5e9';           
        } else {
            div.style.borderColor = '#ff270f';
            div.style.backgroundColor = '#fce8e6';
        }
    });
</script>

</body>
</html>