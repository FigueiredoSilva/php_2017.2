<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Exercício 02 Lista 00</title>
</head>
<body> 
    <fieldset> 
        <legend>Formulário</legend>
        <form action="#" method="post"> 
            <label for="distancia_">Distancia</label>
            <input type="number" name="distancia" id="distancia_">
            <label for="litros_">Litros</label>
            <input type="number" name="litros" id="litros_">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
    
    <!-- Codigo PHP -->
    <?php
            if(isset($_POST['distancia']) && isset($_POST['litros'])) {
                $distancia = $_POST['distancia'];
                $litros = $_POST['litros'];
            
            
            # Consumo Medio = Distancia / LitrosDeCombustivelConsumido
                    
                  $consumo = $distancia / $litros;
                  echo 'O consumo foi: $consumo';
            }
       ?>
</body>
</html>