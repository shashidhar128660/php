<?php
if(isset($_POST['submit']))
{
    $num = $_POST['num'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $m = $_POST['m'];
    $n = $_POST['n'];
    $number = $_POST['number'];
    $char = $_POST['char'];
    $ch = $_POST['ch'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Experiment-2 PHP Form</title>
</head>
<style>
body{
    background-color:  #073205;
    font-family: Arial;
}

form{
    margin:auto;
}

h2{
    text-align:center;
    font-weight:bold;
    font-size: 30px;
    font-family: 'Times New Roman', serif;
}

body{
    margin:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #d9619f, #8ed2ce);
}
</style>
<body >
<h2>Experiment-2 (Conditional & Looping)</h2>
<form method="post">
1] Enter Number to check (+, -, 0):
<input type="number" name="num"><br><br>
2 & 3] Enter Two Numbers:
<input type="number" name="a">
<input type="number" name="b"><br><br>
4] Enter Three Numbers:
<input type="number" name="x">
<input type="number" name="y">
<input type="number" name="z"><br><br>
5] Enter Two Numbers for Swapping:
<input type="number" name="m">
<input type="number" name="n"><br><br>
6] Enter Number (Odd/Even):
<input type="number" name="number"><br><br>
7] Enter Lowercase Character:
<input type="text" name="char"><br><br>
8] Enter Character (Vowel/Consonant):
<input type="text" name="ch"><br><br>
9] Arithmetic Operation:<br>
<input type="number" name="num1">
<select name="op">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="number" name="num2"><br><br>
10] Enter 5 Subject Marks:<br>
<input type="number" name="s1">
<input type="number" name="s2">
<input type="number" name="s3">
<input type="number" name="s4">
<input type="number" name="s5"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
if(isset($_POST['submit']))
{
    if($num > 0) echo "1) $num is Greater than Zero<br>";
    elseif($num < 0) echo "1) $num is Less than Zero<br>";
    else echo "1) Number is Zero<br>";
    echo "2) Maximum = ".(($a>$b)?$a:$b)."<br>";
    echo "3) Minimum = ".(($a<$b)?$a:$b)."<br>";
    if($x>$y && $x>$z) echo "4) Maximum = $x<br>";
    elseif($y>$x && $y>$z) echo "4) Maximum = $y<br>";
    else echo "4) Maximum = $z<br>";
    $temp=$m; $m=$n; $n=$temp;
    echo "5) After Swapping: m=$m , n=$n<br>";
    echo "6) ".(($number%2==0)?"Even":"Odd")."<br>";
    echo "7) Uppercase: ".strtoupper($char)."<br>";
    if(in_array(strtolower($ch),['a','e','i','o','u']))
        echo "8) $ch is Vowel<br>";
    else
        echo "8) $ch is Consonant<br>";
    if($op=='+') echo "9) Result = ".($num1+$num2)."<br>";
    elseif($op=='-') echo "9) Result = ".($num1-$num2)."<br>";
    elseif($op=='*') echo "9) Result = ".($num1*$num2)."<br>";
    elseif($op=='/') echo "9) Result = ".($num1/$num2)."<br>";

    $total=$s1+$s2+$s3+$s4+$s5;
    $per=$total/5;
    echo "10) Percentage = $per%<br>";

    if($per>=70) echo "Result: DISTINCTION";
    elseif($per>=60) echo "Result: FIRST CLASS";
    elseif($per>=50) echo "Result: SECOND CLASS";
    elseif($per>=40) echo "Result: PASS CLASS";
    else echo "Result: FAIL";
}
?>
</body>
</html>