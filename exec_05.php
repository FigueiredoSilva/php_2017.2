<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Exercício 05 Lista 00</title>
</head>
<body> 
    <fieldset> 
        <legend>Formulário</legend>
        <form action="#" method="post"> 
            <label for="eleitores_">Eleitores</label>
            <input type="number" name="eleitores" id="eleitores_">
            <label for="votosbrancos_">Votos Brancos</label>
            <input type="number" name="votosbrancos" id="votosbrancos_">
            <label for="votosnulos_">Votos Nulos</label>
            <input type="number" name="votosnulos" id="votosnulos_">
            <label for="votosvalidos_">Votos Validos</label>
            <input type="number" name="votosvalidas" id="votosvalidas_">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
    
    <!-- Codigo PHP -->
    <?php
            if(isset($_POST['eleitores']) &&
               isset($_POST['votosbrancos']) &&
               isset($_POST['votosnulos']) &&
               isset($_POST['votosvalidos'])) {
                  
                  $eleitores = $_POST['eleitores'];
                  $vBramcos = $_POST['votosbrancos'];
                  $vNulos = $_POST['votosnulos'];
                  $vValidos = $_POST['votosvalidos'];
                  
                  $pBrancos = ($vBrancos / $eleitores) * 100;
                  $pNulos = ($vNulos / $eleitores) * 100;
                  $pValidos = ($vValidos / $eleitores) * 100;
                  
                  echo "O percentual de brancos foi: $pBrancos%<br>";
                  echo "O percentual de nulos foi: $pNulos%<br>";
                  echo "O percentual de validos foi: $pValidos%<br>";
               }
       ?>
</body>
</html>