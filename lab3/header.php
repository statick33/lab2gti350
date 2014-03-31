<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link href="style/frame.css" rel="stylesheet">
	<!--<link href="style/staticFrame.css" rel="stylesheet">-->
	<link href="style/main.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
</head>
<body>
	<div id="header">
		<?php 
		session_start();

			if(isset($_SESSION['auth'])){
				include('menu.php');
			 } 
			 else{
				include('menu2.php');
			 }
			  include('data/Data.php');
		?>
	<script type="text/javascript">
		function signup(form){
			if(validate(form)){
				alert("true");
				$.ajax( "auth.php" )
				  .done(function() {
					window.location.href ='http://localhost/lab3/lab2gti350/lab3/auth.php';
				  });
			}
		}
		
		function validate(form){
			var valide = true;
			for(var i=0; i<form.elements.length; i++){
				if(form.elements[i].value == ""){
					form.elements[i].parentNode.getElementsByClassName("error")[0].innerHTML = "<br />This input can't be empty!";
					valide = false;
				}
				else{
					form.elements[i].parentNode.getElementsByClassName("error")[0].innerHTML = "";
					form.elements[i].className = "";
				}
			}
			if(valide == false){
				return false;
			}
			return true;
		}
	</script>
	</div>
	<div id="content">
	
