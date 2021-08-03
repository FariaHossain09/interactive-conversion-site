<!DOCTYPE html>
<html>
<head>
<title>page3</title>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <fieldset>
    
    <label for="page1">Page 3 [History]</label>
    <br><br>
    <label for="csite">Conversion Site</label>
    <br><br>
    <label>1.</label>
    <a href='page1.php '>Home </a>
    <label>2.</label>
    <a href='page2.php'>Conversion Rate </a>
    <label>3.</label>
    <a href='page3.php'>History </a>
   
    <br><br>
   

    <label for="value">Convetersion History:</label>

    <br>
  

  
  
    

        <center>
            <table border="1">
            <tr>
            <h3>
                <td >value</td>
                <td >output</td>

                
            </h3>
            </tr>
            <?php
                $myfile = fopen('text.json', 'r');
                $data = fread($myfile, filesize('text.json'));
                fclose($myfile);
                $all_time = json_decode($data,true);

                for($i = 0; $i < sizeof($all_time); $i++) {
                    ?>
                    <tr align="center" style="font-size: ">
                        <td><?=$all_time[$i]['value']?></td>
                        <td><?=$all_time[$i]['output']?></td>
                        
                        
                    </tr>
                <?php
            }
            ?>      
            </table>
        </center>
    </div>

    <br><br>
   
    </fieldset>
    <br><br>
      
    </form>

    <br>

</body>
</html>