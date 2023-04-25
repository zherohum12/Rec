<DOCTYPE html><?php 
    $matriz = array(array("NEP5470","Preto","Importado","Celta","30.jpg"),
                    array("JHK6581","Vermelho","Nascional","Línea","sla.jpg"),
                    array("IAK4553","Preto","Nascional","Uno","4.jpg"),
                    array("JVZ7594","Preto","Nascional","Corsa","5.jpg"),
                    array("JUG8236","Branco","Nascional","Meriva","6.jpg"),
                    array("JVQ1761","Preto","Nascional","Celta","7.jpg"),
                    array("KKQ9187","Branco","Nascional","Corsa","8.jpg"),
                    array("CYK1660","Branco","Importado","Porche","9.jpg"),
                    array("HYO2696","Branco","Nascional","Mob","10.jpg"),
                    array("HUL5862","Branco","Nascional","Gol","11.jpg"),
                    array("JUT5916","Verde","Importado","Celta","12.jpg"),
                    array("HRZ3833","Vermelho","Nascional","Corsa","13.jpg"),
                    array("MXB7604","Branco","Nascional","Palio","14.jpg"),
                    array("LWM9174","Amarelo","Importado","Camaro","15.jpg"),
                    array("JVB0680","Preto","Nascional","Gol","16.jpg"),
                    array("HQI3646","Branco","Nascional","Palio","17.jpg"),
                    array("KAC2446","Cinza","Nascional","HB20","18.jpg"),
                    array("NBV5367","Cinza","Nascional","Celta","19.jpg"),
                    array("LWL0466","Cinza","Nascional","Fox","20.jpg"),
                    array("KIZ6235","Azul","Importado","Porche","21.jpg"),
                    array("MZU5178","Preto","Nascional","Siena","22.jpg"),
                    array("HPG4821","Branco","Nascional","Voyage","23.jpg"),
                    array("JZL4202","Vermelho","Nascional","Spacefox","24.jpg"),
                    array("IWR8006","Azul","Importado","Porche","25.jpg"),
                    array("MTG7335","Verde","Importado","I","26.jpg"),
                    array("NEX4728","Cinza","Nascional","Onix","27.jpg"),
                    array("LWF7954","Branco","Importado","Subaru","28.jpg"),
                    array("MTW1883","Preto","Nascional","Sandero","29.jpg"),
                    array("MEN5348","Vermelho","Nascional","Fiesta","30.jpg"),
                    array("LTJ2603","Laranja","Importado","Ferrari","carlos.jpg"),);

                    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
?>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Pesquisar">
        <br><br>
    </form>
    <table border="1">
        <tr><th>Placa do carro</th><th>Cor do Carro</th><th>Precendecia</th><th>Carro</th><th>proprietario</th></tr>
        <?php 
        foreach ($matriz as $linha) {
            if (empty($nome) || substr(strtolower($linha[0]), 0, strlen($nome)) == substr(strtolower($nome), 0, strlen($nome))){  
                echo "<tr>";
                $cont = 0;
                foreach ($linha as $item) {
                    if ($cont == 4) {
                        echo "<td><img width='150px' src='img/".$item. "'></td>";
                    } else {
                        echo "<td>".$item."</td>";
                    }
                    $cont++;
                }
                echo "</tr>";
            }
        }
    ?>
    </table>
    
</body>
</html>
