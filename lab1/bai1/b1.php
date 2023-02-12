<!DOCTYPE html>
<html>
<head>
<style>   
h2{
  padding:1em;
  text-align: center;
}
form{
  padding:2em;
  margin: auto;
  max-width: 370px;
}
input{
  padding: 4px 5px;
  width: 96%;
}
button{
  padding: 4px 5px;
  width: 100%;
  margin: 10px 0;
  font-weight: 600;
}

</style>   
</head>
<body>
<form method="post">
<h2>CHÀO THEO GIỜ</h2>
<input type="Number" name="txtGio">
<br>
<?php
    if (isset($_POST["txtGio"]))
    {
        $gio = $_POST["txtGio"];
        
        if ($gio <12 )
             $chao = "chào buổi sáng";
        else if ($gio <17)
            $chao = "chào buổi chiều";
        else 
             $chao = "Chào buổi tối";
        echo $chao;
    }
?>
<br>
<button type="submit">CHÀO</button>
</form>



</body>
</html>

