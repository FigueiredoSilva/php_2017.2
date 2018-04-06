<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Exercício 03 Lista 00</title>
</head>
<body> 
    <fieldset> 
        <legend>Formulário</legend>
        <form action="#" method="post"> 
            <label for="litros_">Litros</label>
            <input type="number" name="litros" id="litros_">
            <label for="distancia_">Distancia</label>
            <input type="number" name="distancia" id="distancia_">
            <label for="valor_">Valor do Litro</label>
            <input type="number" name="valor" id="valor_">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
    <!-- Codigo PHP -->
    <?php
            if(isset($_POST['litros']) && isset($_POST['distancia'])) {
                $litros = $_POST['litros'];
                $distancia = $_POST['distancia'];
                $valor = $_POST['valor'];
                
                # Consumo Médio * Valor do Litro
                
                    $consumo = $_distancia / ($_litros * $_valor);
                    echo 'O gasto de combustível em reais foi: $_consumo';
            }
         ?>
</body>
</html>
