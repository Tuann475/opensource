<?php
require_once "QuadraticEquation.class.php";
?>
<html>
<head>

</head>
<body style="background:#2F4F2F;">
<table border="1" align="center" style="width:800px;margin-top:60px;font-size:1.4em">
<tr><td style="background:#CFD784;text-align:center;height:50px;">
<h2>giải phương trình bậc 2</h2>
</td></tr><tr>
<td valign="top" style="background:#E0EEE0;padding-left:20px;padding-top:10px;height:320px;">
<form method="POST" action="">
a= <input type="text" name="a" value="1" maxlength="10" size="10">
 &nbsp; b= <input type="text" name="b" value="2"  maxlength="10" size="10">
&nbsp; c= <input type="text" name="c" value="1" maxlength="10" size="10">
&nbsp;
<input type="hidden" name="seen" value="t">
<input type="submit" value="Tính">
</form><br/>
<?php
$a="";
$c="";
$d="";
$dec="";

if(isset($_POST['a'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

}else{
$a=1; $b=2; $c=1;
}
$e=new equation2($a,$b,$c,$dec);
echo "a = ".$e->p['a'].";&nbsp;&nbsp;&nbsp;&nbsp; b = ".$e->p['b'];
echo ";&nbsp;&nbsp;&nbsp;&nbsp; c = ".$e->p['c'].".<br/><hr/>";
$e->roots();
 switch($e->checkD()){
    case 1: {echo "phương trình có 2 nghiệm phân biệt<br/>";
	   $e->printReal();}
        break;
    case 0:{echo "phương trình có nghiệp kép<br/>";
	       $e->printReal();}
	     break;
    case -1:{echo "phương trình vô nghiệm<br/>";
	  $e->printComplex();
	}
        break;
	default:
		break;
}

?>
</td></tr></table>
</body>
</html>

