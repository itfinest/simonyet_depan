<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<style type="text/css">
			body,
			html {
			padding: 0;
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: rgba(255, 130, 45, 0.85);
			font-family: 'Montserrat', sans-serif;
			color: #fff
			}

			html {
			background-size: cover;
			background-position: bottom
			}

			.error {
			text-align: center;
			padding: 16px;
			position: relative;
			top: 50%;
			transform: translateY(-50%);
			-webkit-transform: translateY(-50%)
			}

			h1 {
			margin: -10px 0 -30px;
			font-size: calc(10vw + 20px);
			opacity: .8;
			letter-spacing: -17px;
			}

			h2 {
			margin: -10px 0 -30px;
			font-size: calc(2vw + 5px);
			opacity: .8;
			}

			p {
			opacity: .8;
			font-size: 20px;
			margin: 30px 0 38px 0;
			font-weight: bold
			}

			input,
			button,
			input:focus,
			button:focus {
			border: 0;
			outline: 0!important;
			}

			input {
			width: 300px;
			padding: 14px;
			max-width: calc(100% - 80px);
			border-radius: 6px 0 0 6px;
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
			}

			button {
			width: 40px;
			padding: 14.5px 16px 14.5px 12.5px;
			vertical-align: top;
			border-radius: 0 6px 6px 0;
			color: grey;
			background: silver;
			cursor: pointer;
			transition: all 0.4s
			}

			button:hover {
			color: white;
			background: #9A5C32
			}

			.fa-arrow-left {
			position: fixed;
			top: 30px;
			left: 30px;
			font-size: 2em;
			color:white;
			text-decoration:none
			}
		</style>

	</head>
	<body>
		<a href="" class="fa fa-arrow-left"></a>
		<div class="error">
			<h1><?= $type ?></h1>
			<h2><?= $message ?></h2>
			<p><?= $sub_message ?></p>
		</div>
	</body>
</html>