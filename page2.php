<!DOCTYPE html>
<html>
<head>
<title>page2</title>
<script type="text/javascript" src="page2.js"></script>
</head>
<body>


<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" onsubmit="return isValid()" name="mForm" id="nForm">
    <fieldset>
    
    <label for="page1">Page 2 [Conversion Rate]</label>
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
   

    <label for="value">Convetersion Rate:</label>
    <br>
    <input type="text" id="ftoi" name="ftoi"> <input type="text" id="box1" name="box1"><input type="text" id="box2" name="box2">
    <br><br>
    
    </fieldset>
    <br><br>
    <button type="submit">Submit</button>
      
    </form>

    <br>

</body>
</html>