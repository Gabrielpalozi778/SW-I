<!DOCTYPE html>
<html>
<head>
    <title>Tabela com while</title>
</head>
<body>
    <form method="POST">
        Linhas: <input type="number" name="Linhas" required><br>
        Colunas: <input type="number" name="Colunas" required><br>
        <button type="submit">Criar Tabela</button>
    </form>

    <?php

        $Linhas = $_POST['Linhas'];
        $Colunas = $_POST['Colunas'];
        
        echo "<h3>Sua Tabela ($Linhas x $Colunas):</h3>";
        echo "<table border='1'>";
        
        $i = 0;
        while ($i < $Linhas) {
            echo "<tr>";
            $j = 0;
            while ($j < $Colunas) {
                echo "<td>($i, $j)</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    
    ?>
</body>
</html>