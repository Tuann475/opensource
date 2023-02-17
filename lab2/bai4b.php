<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Calculator</title>
    <style type="text/css">
    	html,
body{
 height: 100%;
}
.select_button{
	margin: 5px;
}
.container{
  padding: 20px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 3px;
  border:solid 1px;
  border-color: grey;
  font-weight: normal;
  box-shadow: 10px 10px 5px grey;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
div.equal {
  display: inline-block;
  border: 1px solid #3079ED;
  border-radius: 1px;
  width: 17%;
  text-align: center;
  padding: 127px 10px;
  margin: 10px 6px 10px 0;
  vertical-align: top;
  cursor: pointer;
  color: #FFF;
  background-color: #4d90fe;
  transition: all .2s ease-in-out;
}

div.equal:hover {
  background-color: #307CF9;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
  border-color: #1857BB;
}

div.equal:active {
  font-weight: bold;
}

    </style>
  </head>
  <body>

    
	<br>
	<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 text-center">
                    <div class="info-form">
                        <form action="" class="form-inline justify-content-center" name="calc">

	                        <input type="" name="" class="form-control col-sm-12" id="input_text" onkeyup="allowedChar(this);" >
                        	<div class="col-sm-10 ">
								<hr>
								<div class="text-center select_button">
									<a name="" class="btn btn-outline-primary col-sm-2">MC</a>
									<a name="" class="btn btn-outline-primary col-sm-2">MR</a>
									<a name="" class="btn btn-outline-primary col-sm-2">MS</a>
									<a name="" class="btn btn-outline-primary col-sm-2">M+</a>
									<a name="" class="btn btn-outline-primary col-sm-2">M-</a>
								
								</div>
								<div class="text-center select_button">
									<a name="" class="btn btn-outline-primary col-sm-2"><-</a>
									<a name="" class="btn btn-outline-primary col-sm-2">CE</a>
									<a name="" class="btn btn-outline-primary col-sm-2">C</a>
									<a name="" class="btn btn-outline-primary col-sm-2">Sqrt</a>
									<a name="" class="btn btn-outline-primary col-sm-2">%</a>
									
								</div>
								<div class="text-center select_button">
									<a name="" class="btn btn-outline-primary col-sm-2">7</a>
									<a name="" class="btn btn-outline-primary col-sm-2">8</a>
									<a name="" class="btn btn-outline-primary col-sm-2">9</a>
									<a name="" class="btn btn-outline-primary col-sm-2">/</a>
									<a name="" class="btn btn-outline-primary col-sm-2">1/X</a>
								</div>

								
								<div class="text-center select_button">
									<a name="" class="btn btn-outline-primary col-sm-2">4</a>
									<a name="" class="btn btn-outline-primary col-sm-2">5</a>
									<a name="" class="btn btn-outline-primary col-sm-2">6</a>
									<a name="" class="btn btn-outline-primary col-sm-2">*</a>
								</div>
								<div class="text-center select_button ">
									<a name="" class="btn btn-outline-primary col-sm-2">1</a>
									<a name="" class="btn btn-outline-primary col-sm-2">2</a>
									<a name="" class="btn btn-outline-primary col-sm-2">3</a>
									<a name="" class="btn btn-outline-primary col-sm-2">-</a>
									<button class="btn btn-outline- col-sm-2">=</button>
								</div>
								<div class="text-center select_button">
									<a name="" class="btn btn-outline-primary col-sm-2">0</a>
									<a name="" class="btn btn-outline-primary col-sm-4">.</a>
									<a name="" class="btn btn-outline-primary col-sm-2">+</a>

								</div>
								
							</div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
  </body>
</html>

<script type="text/javascript">

	function addText(txt)
	{
	document.getElementById("input_text").value+=txt;
	}
	function clearText(txt)
	{
	document.getElementById("input_text").value="";
	}
    function removelastText()
	{
	var strng=document.getElementById("input_text").value;
	document.getElementById("input_text").value=strng.substring(0,strng.length-1);
	}

	function answerText()
	{
	//easiest code "eval()"
		  
	try {
	    document.calc.input_text.value = eval(document.calc.input_text.value);; 
	} catch (e) {
	    if (e instanceof SyntaxError) {
	        alert(e.message);
	    }
	}

  function allowedChar(elem) {
                var validChars = /[0-9(). ]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }
</script> 