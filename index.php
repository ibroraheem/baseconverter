<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Converter</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="frombase">Convert from Base</label>
       <select name="frombase" id="">
           <option value="2">Binary</option>
           <option value="8">Octal</option>
           <option value="10">Decimal</option>
           <option value="16">Hexadecimal</option>
       </select>
       <label for="tobase">Convert to Base</label>
       <select name="tobase" id="">
           <option value="2">Binary</option>
           <option value="8">Octal</option>
           <option value="10">Decimal</option>
           <option value="16">Hexadecimal</option>
       </select>
       <label for="number">Input Number</label>
       <input type="number" name="number" id="">
       <input type="submit" value="submit" name="submit">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $frombase = $_POST['frombase'];
        $number = $_POST['number'];
        $tobase = $_POST['tobase'];
        $result = base_convert($number, $frombase, $tobase);
        echo $number . " in base " . $frombase . " is ". $result . " in base " . $tobase;
        
    }

    ?>
</body>
</html>