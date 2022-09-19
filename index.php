<html>
    <head>
        <title>Lista de Compras</title>
    </head>
    <body>
        <?php 
        $listaCompras = array('Leites' =>12,'Ovos' =>30,'Pães' =>10,'Nescau' =>'1 lata');
        ?>
        <h1>Lista de Compras</h1>
        <table border="1">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>
            <?php 
            foreach($listaCompras as $key => $quantidade){
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$quantidade</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>