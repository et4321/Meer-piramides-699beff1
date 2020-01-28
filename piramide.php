<!DOCTYPE html>
<html>
    <head>
        <title>Piramiden</title>
        <link rel="stylesheet" type="text/css" href="stylemain.css">
    </head>

    <body>
        <table>
            <?php
                for ($i =0; $i <= 10; $i++){
            ?> 
            <tr> 
            <?php
                for($o =1; $o <= $i; $o++){
                ?>
                
                <td class="black">b</td>
                <?php    
            }
            ?>
            </tr>
            <?php
        }
        ?>
        </table>
    </body>
</html>