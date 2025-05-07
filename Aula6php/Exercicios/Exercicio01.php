<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
    <table>
        <tr>
            <th>coluna 1</th>
            <th>coluna 2</th>
            <th>coluna 3</th>
            <th>coluna 4</th>
        </tr>
        <?php
            for ($i=1; $i <= 8 ; $i++) { 
                
                if($i % 2 ==0){
                 echo "
                     <tr>
                         <td style=background-color:blue;>coluna 1 da linha $i</td>
                         <td style=background-color:blue;>coluna 1 da linha $i</td>
                         <td style=background-color:blue;>coluna 1 da linha $i</td>
                         <td style=background-color:blue;>coluna 1 da linha $i</td>
                     </tr>   
                
                 ";
                }
                else{
                 echo"
                     <tr>
                         <td style=background-color:green;>coluna 1 da linha $i</td>
                         <td style=background-color:green;>coluna 1 da linha $i</td>
                         <td style=background-color:green;>coluna 1 da linha $i</td>
                         <td style=background-color:green;>coluna 1 da linha $i</td>
                     </tr>
                     ";

                }
            }
        ?>
    </table> 


    
</body>
</html>