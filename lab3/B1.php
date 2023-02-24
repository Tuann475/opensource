<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, td {
  border: 1px solid black;
}
div.a {
	text-align: center;
}
</style>
<body>
    <center>
<h1>TÌM HIỂU KỸ THUẬT DOM TRONG JAVASCRIPT</h1>
<H1>(DOM: Document Object Model)</H1>

số dòng<input id="num1">  
<br>
số cột<input id="num2">  

<tr align="center">
<br>
<input type="button" id="show" value="Hiển thị">
<td colspan="12">
<input type="button" value="Xóa" onClick="refresh">
</td>




<div id="tablez"></div>

<script>document.querySelector('input[type]').addEventListener('click', () => {
  const num1 = document.querySelector('#num1').value;
  const num2 = document.querySelector('#num2').value;

  if (isNaN(num1) || isNaN(num2)) {
    alert("nhập số giúp tuấn");
    return false;
  }

  if ((num1 < 1 || num1 > 10) || (num2 < 1 || num2 > 10)) {
    alert("đừng nhập nhiều hơn 10 làm ơn");
    return false;
  }

  let html = '<table border="1">';

  for (let i = 1; i <= num1; i++) {
    const label = i === 1 ? "" : i;
    html += `<tr><td>${label}</td>`;
    const multipler = i === 1 ? 2 : i;

    for (let j = 1; j <= num2; j++) {
      html += `<td>${multipler * j}</td>`;
    }

    html += "</tr>";
  }
  document.getElementById("tablez").innerHTML = html + '</table>';


});</script>
    </center>


</body>
</html>