<!DOCTYPE html>
<html>
<head>

		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
	<title>Latihan Blade Templates</title>


	<style>
		html, body {
				background-color: #fff;
				color: #636b6f;
				background-color: #f3f6f8;
				font-family: 'Raleway', sans-serif;
				font-weight: 100;
				height: 100vh;
				margin: 0;

		}
		.center-con{
			text-align: center;
			position: relative;
							top:50%;
							transform: translate(0, -60%);
		}
		.center-content{
			align-items: center;
			display: flex;
			justify-content: center;
		}
		.style-content label{
			color : #2c3e50;
			font-weight: bold;
		}
		.style-content input[type=text]{
			margin : 5px 0 10px 0;
			padding : 5px;
			width: 100%;
			border : 2px solid #f3f6f8;
			border-bottom: 3px solid #2980b9;
			border-radius: 5px;
		}
		.form-group button{
			background: rgba(27,158,228,1);
			background: -moz-linear-gradient(-45deg, rgba(27,158,228,1) 0%, rgba(23,127,196,1) 100%);
			background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(27,158,228,1)), color-stop(100%, rgba(23,127,196,1)));
			background: -webkit-linear-gradient(-45deg, rgba(27,158,228,1) 0%, rgba(23,127,196,1) 100%);
			background: -o-linear-gradient(-45deg, rgba(27,158,228,1) 0%, rgba(23,127,196,1) 100%);
			background: -ms-linear-gradient(-45deg, rgba(27,158,228,1) 0%, rgba(23,127,196,1) 100%);
			background: linear-gradient(135deg, rgba(27,158,228,1) 0%, rgba(23,127,196,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b9ee4', endColorstr='#177fc4', GradientType=1 );
			width : 120px;
			height: 100px;
			border: 1px solid #3498db;
			text-transform: uppercase;
			color: white;
			font-weight: bold;
			transition: .2s ease-in-out;
		}
		.form-group button:hover{
			-moz-box-shadow:     	0 0 10px #000000;
		   -webkit-box-shadow:  0 0 10px #000000;
			box-shadow: 					0px 0px 5px black;
			text-shadow: 					-2px 2px 3px black;
		}
		.form-group button:active{
			-moz-box-shadow:    inset 0 0 10px #000000;
   		-webkit-box-shadow: inset 0 0 10px #000000;
			box-sizing: 				inset 2px 2px 5px black;
		}
		.style-content{
			width: 250px;
			padding: 10px;
			border: 1px solid #3498db;
			background-color: white;
			border-radius: 5px;
		}

	</style>

</head>


<body>
	<div class='center-con'>
	  @include('templates.header')
			<div class='center-content'>
				<div class='style-content'>
	  			@yield('content')
				</div>
			</div>
	  @include('templates.footer')
	</div>
</body>
</html>
