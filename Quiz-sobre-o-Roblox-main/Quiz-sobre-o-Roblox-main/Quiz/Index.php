
<?php
session_start();

if (isset($_POST['Nome']) && isset($_POST['Idade'])) {
    header("Location: Quiz.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vereficador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@406&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style> 
.cinzel-uniquifier {
  font-family: "Cinzel", serif;
  font-optical-sizing: auto;
  font-weight: 406;
  font-style: normal;
}
.montenegrin-gothic-one-regular {
  font-family: "Montenegrin Gothic One", serif;
  font-weight: 400;
  font-style: normal;
}
    body{
    font-family: Arial, sans-serif;
    background: #4a90e2;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 350px;
    text-align: center;
    }
    input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    }
    button {
    width: 100%;
    padding: 12px;
    background: #1877f2;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    }
    button:hover
    {
    background: #166fe5;
    }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<div class="box ">
<H3 class="montenegrin-gothic-one-regular">Quiz com tema do roblox</H3>
    <form method="POST" action="Quiz.php" class="cinzel-uniquifier">
    <label for="Campo"> Digite o seu nome </label>
    <input type="text" name="Nome" required>

    <label for="Campo"> Digite a sua idade </label>
    <input type="number" name="Idade" required>

    <button type="submit">Gerar</button>
</form>
</div>
</body>
</html>