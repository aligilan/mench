<?php 
    $player0=$p0Kind=$player1=$p1Kind=$player2=$p2Kind=$player3=$p3Kind=$difficulty=$speed="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $player0 = $_POST['p0Name'];
        $p0Kind = $_POST['p0Kind'];
        $player1 = $_POST['p1Name'];
        $p1Kind = $_POST['p1Kind'];
        $player2 = $_POST['p2Name'];
        $p2Kind = $_POST['p2Kind'];
        $player3 = $_POST['p3Name'];
        $p3Kind = $_POST['p3Kind'];
        $difficulty = $_POST['difficulty'];
        $speed=$_POST['speed'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>شروع بازی</title>
	<style type="text/css">
		.out{
			border-radius: 20px;
			background-color: rgb(247, 247, 255);
			border: 1px solid #ddbdff;
			position: relative;
			margin: 0 auto;
            right: 0;
			width: 605px;height: 605px;
			box-shadow: 0px 0px 20px #ddbdff;
		}
		/*-----------------------------------------------------player 0*/
		#player0{
			border: 1px solid red;
			box-shadow: 0 0 20px red;
			border-radius: 20px;
			width: 130px;height: 130px;
			position: absolute;
			bottom: 0;left: 0;
		}
		#mohre0_p0{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;left: 0;
		}
		#mohre1_p0{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;left: 0;
		}
		#mohre2_p0{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;right: 0;
		}
		#mohre3_p0{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;right: 0;
		}
		/*-----------------------------------------------------player 1*/
		#player1{
			border: 1px solid blue;
			box-shadow: 0 0 20px blue;
			border-radius: 20px;
			width: 130px;height: 130px;
			position: absolute;
			top: 0;left: 0;
		}
		#mohre0_p1{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;left: 0;
		}
		#mohre1_p1{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;left: 0;
		}
		#mohre2_p1{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;right: 0;
		}
		#mohre3_p1{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;right: 0;
		}
		/*-----------------------------------------------------player 2*/
		#player2{
			border: 1px solid green;
			box-shadow: 0 0 20px green;
			border-radius: 20px;
			width: 130px;height: 130px;
			position: absolute;
			top: 0;right: 0;
		}
		#mohre0_p2{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;left: 0;
		}
		#mohre1_p2{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;left: 0;
		}
		#mohre2_p2{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;right: 0;
		}
		#mohre3_p2{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;right: 0;
		}
		/*-----------------------------------------------------player 3*/
		#player3{
			border: 1px solid yellow;
			box-shadow: 0 0 20px yellow;
			border-radius: 20px;
			width: 130px;height: 130px;
			position: absolute;
			bottom: 0;right: 0;
		}
		#mohre0_p3{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;left: 0;
		}
		#mohre1_p3{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;left: 0;
		}
		#mohre2_p3{
			width: 55px;height: 55px;
			position: absolute;
			top: 0;right: 0;
		}
		#mohre3_p3{
			width: 55px;height: 55px;
			position: absolute;
			bottom: 0;right: 0;
		}
		/*-----------------place H---------------------*/
		.bordH{
			position: absolute;
			width: 605px;
			top: 220px;left: 0;
			height: 160px;
		}
		.row0{
			height: 55px;
			position: absolute;
			left: 0;top: 0;
		}
		.row1{
			height: 55px;
			position: absolute;
			left: 0;top: 55px;
		}
		.row2{
			height: 55px;
			position: absolute;
			left: 0;top: 110px;
		}
		.row0 div,.row1 div,.row2 div{
			border-radius: 50px;
			background-color: white;
			width: 55px;height: 55px;
			float: left;
			box-shadow: 1px 1px 1px black;
		}
		/*-----------------place V---------------------*/
		.bordV{
			position: absolute;
			height: 605px;
			left: 220px;top: 0;
			width: 160px;
		}
		.col0{
			width: 55px;
			position: absolute;
			left: 0;top: 0;
		}
		.col1{
			width: 55px;
			position: absolute;
			left: 55px;
			top: 0;
		}
		.col2{
			width: 60px;
			position: absolute;
			left: 110px;
			top: 0;
		}
		.col0 div,.col1 div,.col2 div{
			border-radius: 50px;
			background-color: white;
			width: 55px;height: 55px;
			box-shadow: 1px 1px 1px black;
		}
		/*---------------players name------------------*/
		label{
			font-size: 20px;
			font-family: tahoma;
			color: red;
			position: absolute;
			top: -30px;
			width: 130px;
			overflow: hidden;
			display: inline-block;
			text-align: center;
			text-shadow: 2px 2px 5px darkred;
		}
		#p1Name{
			color: blue;
			top: 130px;
			text-shadow: 2px 2px 5px darkblue;
		}
		#p2Name{
			color: green;
			top: 130px;
			text-shadow: 2px 2px 5px darkgreen;
		}
		#p3Name{
			color: goldenrod;
			text-shadow: 2px 2px 5px darkorange;
		}
		/*----------------------------------------vector-------*/
		.vector0{
			position: absolute;
			bottom: 20px;left: 200px;
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
			border-bottom: 10px solid red;
		}
		.vector0 div{
			border: 1px solid red;
			position: absolute;
			top: 10px;
			left: -1px;
			height: 10px;
		}
		.vector1{
			transform: rotate(90deg);
			position: absolute;
			top: 200px;left: 20px;
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
			border-bottom: 10px solid blue;
		}
		.vector1 div{
			border: 1px solid blue;
			position: absolute;
			top: 10px;
			left: -1px;
			height: 10px;
		}
		.vector2{
			transform: rotate(180deg);
			position: absolute;
			top: 20px;right: 200px;
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
			border-bottom: 10px solid green;
		}
		.vector2 div{
			border: 1px solid green;
			position: absolute;
			top: 10px;
			left: -1px;
			height: 10px;
		}
		.vector3{
			transform: rotate(270deg);
			position: absolute;
			right: 20px;bottom: 200px;
			border-left: 5px solid transparent;
			border-right: 5px solid transparent;
			border-bottom: 10px solid yellow;
		}
		.vector3 div{
			border: 1px solid yellow;
			position: absolute;
			top: 10px;
			left: -1px;
			height: 10px;
		}     
		/*----------------------------------------------*/
		img{
			width: 53px;
			height: 53px;
            z-index: 91;
		}
		img:hover{
			opacity: 0.5;
		}
		.diceBtn{
			font-family: tahoma;
			font-size: 15px;
			text-align: center;
			color: white;
			background-color: darkgrey;
			border-style: none;
			box-shadow: 0 0 5px black;
			position: absolute;
			bottom: 0;left: 140px;
			width: 50px;height: 50px;
			border-radius: 10px;
		}
		.diceBtn:hover{
			box-shadow: 0px 0px 10px black;
		}
		#diceBtn1{
			top: 0;
			visibility: hidden;
		}
		#diceBtn2{
			margin-left: 275px;
			top: 0;
			visibility: hidden;

		}
		#diceBtn3{
			margin-left: 275px;
			visibility: hidden;
		}
		.makeBold{
			box-shadow:	inset 0 0 30px rgba(158,0,155,1) !important;
            z-index: 90;
		}
        .end{
            background-color: black;
            opacity: .9;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 0;
        }
        .message{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            /*left: 50%;*/
            /*margin-left: -350px;*/
            width: 700px;
            height: 100px;
            background-color: #3366FF;
            color: lime;
            text-align: center;
            direction: rtl;
            font-size: 30px;
            border-radius: 20px;
            line-height: 100px;
            z-index: 2;
            display: none;
            font-family: Tahoma;
        }
        /*------------------------------------------*/
        .cssload-container *, .cssload-container *:before, .cssload-container *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .cssload-container *:before, .cssload-container *:after {
            content: "";
        }

        .cssload-container, .cssload-container *, .cssload-container *:before, .cssload-container *:after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
        }

        .cssload-thing {
            width: 21em;
            height: 21em;
        }
        .cssload-thing:before, .cssload-thing:after {
            width: 0.33333em;
            height: 0;
        }
        .cssload-thing:before {
            margin-top: 21em;
            bottom: auto;
            background: rgb(39,39,39);
        }
        .cssload-thing:after {
            top: auto;
            background: rgb(39,39,39);
        }
        .cssload-thing:nth-child(1) {
            transform: rotateZ(0deg);
            -o-transform: rotateZ(0deg);
            -ms-transform: rotateZ(0deg);
            -webkit-transform: rotateZ(0deg);
            -moz-transform: rotateZ(0deg);
        }
        .cssload-thing:nth-child(1):before, .cssload-thing:nth-child(1):after {
            animation: cssload-thing 1.31s -0s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -0s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -0s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -0s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -0s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(1):before {
            background: rgba(255,77,77,0.1);
            animation: cssload-thing 1.75s -0s linear infinite;
        }
        .cssload-thing:nth-child(1):after {
            background: rgba(255,77,77,0.75);
        }
        .cssload-thing:nth-child(2) {
            transform: rotateZ(12deg);
            -o-transform: rotateZ(12deg);
            -ms-transform: rotateZ(12deg);
            -webkit-transform: rotateZ(12deg);
            -moz-transform: rotateZ(12deg);
        }
        .cssload-thing:nth-child(2):before, .cssload-thing:nth-child(2):after {
            animation: cssload-thing 1.31s -0.44s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -0.44s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -0.44s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -0.44s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -0.44s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(2):before {
            background: rgba(255,112,77,0.1);
            animation: cssload-thing 1.75s -0.06s linear infinite;
            -o-animation: cssload-thing 1.75s -0.06s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.06s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.06s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.06s linear infinite;
        }
        .cssload-thing:nth-child(2):after {
            background: rgba(255,112,77,0.75);
        }
        .cssload-thing:nth-child(3) {
            transform: rotateZ(24deg);
            -o-transform: rotateZ(24deg);
            -ms-transform: rotateZ(24deg);
            -webkit-transform: rotateZ(24deg);
            -moz-transform: rotateZ(24deg);
        }
        .cssload-thing:nth-child(3):before, .cssload-thing:nth-child(3):after {
            animation: cssload-thing 1.31s -0.88s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -0.88s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -0.88s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -0.88s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -0.88s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(3):before {
            background: rgba(255,148,77,0.1);
            animation: cssload-thing 1.75s -0.12s linear infinite;
            -o-animation: cssload-thing 1.75s -0.12s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.12s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.12s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.12s linear infinite;
        }
        .cssload-thing:nth-child(3):after {
            background: rgba(255,148,77,0.75);
        }
        .cssload-thing:nth-child(4) {
            transform: rotateZ(36deg);
            -o-transform: rotateZ(36deg);
            -ms-transform: rotateZ(36deg);
            -webkit-transform: rotateZ(36deg);
            -moz-transform: rotateZ(36deg);
        }
        .cssload-thing:nth-child(4):before, .cssload-thing:nth-child(4):after {
            animation: cssload-thing 1.31s -1.31s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -1.31s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -1.31s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -1.31s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -1.31s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(4):before {
            background: rgba(255,184,77,0.1);
            animation: cssload-thing 1.75s -0.18s linear infinite;
            -o-animation: cssload-thing 1.75s -0.18s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.18s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.18s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.18s linear infinite;
        }
        .cssload-thing:nth-child(4):after {
            background: rgba(255,184,77,0.75);
        }
        .cssload-thing:nth-child(5) {
            transform: rotateZ(48deg);
            -o-transform: rotateZ(48deg);
            -ms-transform: rotateZ(48deg);
            -webkit-transform: rotateZ(48deg);
            -moz-transform: rotateZ(48deg);
        }
        .cssload-thing:nth-child(5):before, .cssload-thing:nth-child(5):after {
            animation: cssload-thing 1.31s -1.75s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -1.75s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -1.75s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -1.75s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -1.75s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(5):before {
            background: rgba(255,219,77,0.1);
            animation: cssload-thing 1.75s -0.23s linear infinite;
        }
        .cssload-thing:nth-child(5):after {
            background: rgba(255,219,77,0.75);
        }
        .cssload-thing:nth-child(6) {
            transform: rotateZ(60deg);
            -o-transform: rotateZ(60deg);
            -ms-transform: rotateZ(60deg);
            -webkit-transform: rotateZ(60deg);
            -moz-transform: rotateZ(60deg);
        }
        .cssload-thing:nth-child(6):before, .cssload-thing:nth-child(6):after {
            animation: cssload-thing 1.31s -2.19s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -2.19s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -2.19s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -2.19s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -2.19s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(6):before {
            background: rgba(255,255,77,0.1);
            animation: cssload-thing 1.75s -0.29s linear infinite;
            -o-animation: cssload-thing 1.75s -0.29s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.29s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.29s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.29s linear infinite;
        }
        .cssload-thing:nth-child(6):after {
            background: rgba(255,255,77,0.75);
        }
        .cssload-thing:nth-child(7) {
            transform: rotateZ(72deg);
            -o-transform: rotateZ(72deg);
            -ms-transform: rotateZ(72deg);
            -webkit-transform: rotateZ(72deg);
            -moz-transform: rotateZ(72deg);
        }
        .cssload-thing:nth-child(7):before, .cssload-thing:nth-child(7):after {
            animation: cssload-thing 1.31s -2.63s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -2.63s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -2.63s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -2.63s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -2.63s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(7):before {
            background: rgba(219,255,77,0.1);
            animation: cssload-thing 1.75s -0.35s linear infinite;
            -o-animation: cssload-thing 1.75s -0.35s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.35s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.35s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.35s linear infinite;
        }
        .cssload-thing:nth-child(7):after {
            background: rgba(219,255,77,0.75);
        }
        .cssload-thing:nth-child(8) {
            transform: rotateZ(84deg);
            -o-transform: rotateZ(84deg);
            -ms-transform: rotateZ(84deg);
            -webkit-transform: rotateZ(84deg);
            -moz-transform: rotateZ(84deg);
        }
        .cssload-thing:nth-child(8):before, .cssload-thing:nth-child(8):after {
            animation: cssload-thing 1.31s -3.06s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -3.06s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -3.06s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -3.06s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -3.06s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(8):before {
            background: rgba(184, 255, 77, 0.1);
            animation: cssload-thing 1.75s -0.41s linear infinite;
            -o-animation: cssload-thing 1.75s -0.41s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.41s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.41s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.41s linear infinite;
        }
        .cssload-thing:nth-child(8):after {
            background: rgba(184, 255, 77, 0.75);
        }
        .cssload-thing:nth-child(9) {
            transform: rotateZ(96deg);
            -o-transform: rotateZ(96deg);
            -ms-transform: rotateZ(96deg);
            -webkit-transform: rotateZ(96deg);
            -moz-transform: rotateZ(96deg);
        }
        .cssload-thing:nth-child(9):before, .cssload-thing:nth-child(9):after {
            animation: cssload-thing 1.31s -3.5s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -3.5s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -3.5s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -3.5s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -3.5s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(9):before {
            background: rgba(148, 255, 77, 0.1);
            animation: cssload-thing 1.75s -0.47s linear infinite;
            -o-animation: cssload-thing 1.75s -0.47s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.47s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.47s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.47s linear infinite;
        }
        .cssload-thing:nth-child(9):after {
            background: rgba(148, 255, 77, 0.75);
        }
        .cssload-thing:nth-child(10) {
            transform: rotateZ(108deg);
            -o-transform: rotateZ(108deg);
            -ms-transform: rotateZ(108deg);
            -webkit-transform: rotateZ(108deg);
            -moz-transform: rotateZ(108deg);
        }
        .cssload-thing:nth-child(10):before, .cssload-thing:nth-child(10):after {
            animation: cssload-thing 1.31s -3.94s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -3.94s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -3.94s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -3.94s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -3.94s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(10):before {
            background: rgba(112, 255, 77, 0.1);
            animation: cssload-thing 1.75s -0.53s linear infinite;
            -o-animation: cssload-thing 1.75s -0.53s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.53s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.53s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.53s linear infinite;
        }
        .cssload-thing:nth-child(10):after {
            background: rgba(112, 255, 77, 0.75);
        }
        .cssload-thing:nth-child(11) {
            transform: rotateZ(120deg);
            -o-transform: rotateZ(120deg);
            -ms-transform: rotateZ(120deg);
            -webkit-transform: rotateZ(120deg);
            -moz-transform: rotateZ(120deg);
        }
        .cssload-thing:nth-child(11):before, .cssload-thing:nth-child(11):after {
            animation: cssload-thing 1.31s -4.38s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -4.38s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -4.38s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -4.38s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -4.38s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(11):before {
            background: rgba(77, 255, 77, 0.1);
            animation: cssload-thing 1.75s -0.58s linear infinite;
            -o-animation: cssload-thing 1.75s -0.58s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.58s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.58s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.58s linear infinite;
        }
        .cssload-thing:nth-child(11):after {
            background: rgba(77, 255, 77, 0.75);
        }
        .cssload-thing:nth-child(12) {
            transform: rotateZ(132deg);
            -o-transform: rotateZ(132deg);
            -ms-transform: rotateZ(132deg);
            -webkit-transform: rotateZ(132deg);
            -moz-transform: rotateZ(132deg);
        }
        .cssload-thing:nth-child(12):before, .cssload-thing:nth-child(12):after {
            animation: cssload-thing 1.31s -4.81s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -4.81s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -4.81s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -4.81s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -4.81s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(12):before {
            background: rgba(77, 255, 112, 0.1);
            animation: cssload-thing 1.75s -0.64s linear infinite;
            -o-animation: cssload-thing 1.75s -0.64s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.64s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.64s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.64s linear infinite;
        }
        .cssload-thing:nth-child(12):after {
            background: rgba(77, 255, 112, 0.75);
        }
        .cssload-thing:nth-child(13) {
            transform: rotateZ(144deg);
            -o-transform: rotateZ(144deg);
            -ms-transform: rotateZ(144deg);
            -webkit-transform: rotateZ(144deg);
            -moz-transform: rotateZ(144deg);
        }
        .cssload-thing:nth-child(13):before, .cssload-thing:nth-child(13):after {
            animation: cssload-thing 1.31s -5.25s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -5.25s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -5.25s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -5.25s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -5.25s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(13):before {
            background: rgba(77, 255, 148, 0.1);
            animation: cssload-thing 1.75s -0.7s linear infinite;
            -o-animation: cssload-thing 1.75s -0.7s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.7s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.7s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.7s linear infinite;
        }
        .cssload-thing:nth-child(13):after {
            background: rgba(77, 255, 148, 0.75);
        }
        .cssload-thing:nth-child(14) {
            transform: rotateZ(156deg);
            -o-transform: rotateZ(156deg);
            -ms-transform: rotateZ(156deg);
            -webkit-transform: rotateZ(156deg);
            -moz-transform: rotateZ(156deg);
        }
        .cssload-thing:nth-child(14):before, .cssload-thing:nth-child(14):after {
            animation: cssload-thing 1.31s -5.69s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -5.69s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -5.69s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -5.69s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -5.69s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(14):before {
            background: rgba(77, 255, 184, 0.1);
            animation: cssload-thing 1.75s -0.76s linear infinite;
            -o-animation: cssload-thing 1.75s -0.76s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.76s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.76s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.76s linear infinite;
        }
        .cssload-thing:nth-child(14):after {
            background: rgba(77, 255, 184, 0.75);
        }
        .cssload-thing:nth-child(15) {
            transform: rotateZ(168deg);
            -o-transform: rotateZ(168deg);
            -ms-transform: rotateZ(168deg);
            -webkit-transform: rotateZ(168deg);
            -moz-transform: rotateZ(168deg);
        }
        .cssload-thing:nth-child(15):before, .cssload-thing:nth-child(15):after {
            animation: cssload-thing 1.31s -6.13s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -6.13s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -6.13s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -6.13s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -6.13s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(15):before {
            background: rgba(77, 255, 219, 0.1);
            animation: cssload-thing 1.75s -0.82s linear infinite;
            -o-animation: cssload-thing 1.75s -0.82s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.82s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.82s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.82s linear infinite;
        }
        .cssload-thing:nth-child(15):after {
            background: rgba(77, 255, 219, 0.75);
        }
        .cssload-thing:nth-child(16) {
            transform: rotateZ(180deg);
            -o-transform: rotateZ(180deg);
            -ms-transform: rotateZ(180deg);
            -webkit-transform: rotateZ(180deg);
            -moz-transform: rotateZ(180deg);
        }
        .cssload-thing:nth-child(16):before, .cssload-thing:nth-child(16):after {
            animation: cssload-thing 1.31s -6.56s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -6.56s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -6.56s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -6.56s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -6.56s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(16):before {
            background: rgba(77, 255, 255, 0.1);
            animation: cssload-thing 1.75s -0.88s linear infinite;
            -o-animation: cssload-thing 1.75s -0.88s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.88s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.88s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.88s linear infinite;
        }
        .cssload-thing:nth-child(16):after {
            background: rgba(77, 255, 255, 0.75);
        }
        .cssload-thing:nth-child(17) {
            transform: rotateZ(192deg);
            -o-transform: rotateZ(192deg);
            -ms-transform: rotateZ(192deg);
            -webkit-transform: rotateZ(192deg);
            -moz-transform: rotateZ(192deg);
        }
        .cssload-thing:nth-child(17):before, .cssload-thing:nth-child(17):after {
            animation: cssload-thing 1.31s -7s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -7s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -7s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -7s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -7s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(17):before {
            background: rgba(77, 219, 255, 0.1);
            animation: cssload-thing 1.75s -0.93s linear infinite;
            -o-animation: cssload-thing 1.75s -0.93s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.93s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.93s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.93s linear infinite;
        }
        .cssload-thing:nth-child(17):after {
            background: rgba(77, 219, 255, 0.75);
        }
        .cssload-thing:nth-child(18) {
            transform: rotateZ(204deg);
            -o-transform: rotateZ(204deg);
            -ms-transform: rotateZ(204deg);
            -webkit-transform: rotateZ(204deg);
            -moz-transform: rotateZ(204deg);
        }
        .cssload-thing:nth-child(18):before, .cssload-thing:nth-child(18):after {
            animation: cssload-thing 1.31s -7.44s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -7.44s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -7.44s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -7.44s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -7.44s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(18):before {
            background: rgba(77, 184, 255, 0.1);
            animation: cssload-thing 1.75s -0.99s linear infinite;
            -o-animation: cssload-thing 1.75s -0.99s linear infinite;
            -ms-animation: cssload-thing 1.75s -0.99s linear infinite;
            -webkit-animation: cssload-thing 1.75s -0.99s linear infinite;
            -moz-animation: cssload-thing 1.75s -0.99s linear infinite;
        }
        .cssload-thing:nth-child(18):after {
            background: rgba(77, 184, 255, 0.75);
        }
        .cssload-thing:nth-child(19) {
            transform: rotateZ(216deg);
            -o-transform: rotateZ(216deg);
            -ms-transform: rotateZ(216deg);
            -webkit-transform: rotateZ(216deg);
            -moz-transform: rotateZ(216deg);
        }
        .cssload-thing:nth-child(19):before, .cssload-thing:nth-child(19):after {
            animation: cssload-thing 1.31s -7.88s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -7.88s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -7.88s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -7.88s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -7.88s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(19):before {
            background: rgba(77, 148, 255, 0.1);
            animation: cssload-thing 1.75s -1.05s linear infinite;
            -o-animation: cssload-thing 1.75s -1.05s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.05s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.05s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.05s linear infinite;
        }
        .cssload-thing:nth-child(19):after {
            background: rgba(77, 148, 255, 0.75);
        }
        .cssload-thing:nth-child(20) {
            transform: rotateZ(228deg);
            -o-transform: rotateZ(228deg);
            -ms-transform: rotateZ(228deg);
            -webkit-transform: rotateZ(228deg);
            -moz-transform: rotateZ(228deg);
        }
        .cssload-thing:nth-child(20):before, .cssload-thing:nth-child(20):after {
            animation: cssload-thing 1.31s -8.31s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -8.31s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -8.31s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -8.31s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -8.31s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(20):before {
            background: rgba(77, 112, 255, 0.1);
            animation: cssload-thing 1.75s -1.11s linear infinite;
            -o-animation: cssload-thing 1.75s -1.11s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.11s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.11s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.11s linear infinite;
        }
        .cssload-thing:nth-child(20):after {
            background: rgba(77, 112, 255, 0.75);
        }
        .cssload-thing:nth-child(21) {
            transform: rotateZ(240deg);
            -o-transform: rotateZ(240deg);
            -ms-transform: rotateZ(240deg);
            -webkit-transform: rotateZ(240deg);
            -moz-transform: rotateZ(240deg);
        }
        .cssload-thing:nth-child(21):before, .cssload-thing:nth-child(21):after {
            animation: cssload-thing 1.31s -8.75s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -8.75s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -8.75s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -8.75s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -8.75s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(21):before {
            background: rgba(77, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.17s linear infinite;
            -o-animation: cssload-thing 1.75s -1.17s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.17s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.17s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.17s linear infinite;
        }
        .cssload-thing:nth-child(21):after {
            background: rgba(77, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(22) {
            transform: rotateZ(252deg);
            -o-transform: rotateZ(252deg);
            -ms-transform: rotateZ(252deg);
            -webkit-transform: rotateZ(252deg);
            -moz-transform: rotateZ(252deg);
        }
        .cssload-thing:nth-child(22):before, .cssload-thing:nth-child(22):after {
            animation: cssload-thing 1.31s -9.19s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -9.19s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -9.19s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -9.19s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -9.19s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(22):before {
            background: rgba(112, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.23s linear infinite;
            -o-animation: cssload-thing 1.75s -1.23s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.23s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.23s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.23s linear infinite;
        }
        .cssload-thing:nth-child(22):after {
            background: rgba(112, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(23) {
            transform: rotateZ(264deg);
            -o-transform: rotateZ(264deg);
            -ms-transform: rotateZ(264deg);
            -webkit-transform: rotateZ(264deg);
            -moz-transform: rotateZ(264deg);
        }
        .cssload-thing:nth-child(23):before, .cssload-thing:nth-child(23):after {
            animation: cssload-thing 1.31s -9.63s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -9.63s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -9.63s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -9.63s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -9.63s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(23):before {
            background: rgba(148, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.28s linear infinite;
            -o-animation: cssload-thing 1.75s -1.28s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.28s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.28s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.28s linear infinite;
        }
        .cssload-thing:nth-child(23):after {
            background: rgba(148, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(24) {
            transform: rotateZ(276deg);
            -o-transform: rotateZ(276deg);
            -ms-transform: rotateZ(276deg);
            -webkit-transform: rotateZ(276deg);
            -moz-transform: rotateZ(276deg);
        }
        .cssload-thing:nth-child(24):before, .cssload-thing:nth-child(24):after {
            animation: cssload-thing 1.31s -10.06s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -10.06s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -10.06s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -10.06s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -10.06s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(24):before {
            background: rgba(184, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.34s linear infinite;
            -o-animation: cssload-thing 1.75s -1.34s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.34s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.34s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.34s linear infinite;
        }
        .cssload-thing:nth-child(24):after {
            background: rgba(184, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(25) {
            transform: rotateZ(288deg);
            -o-transform: rotateZ(288deg);
            -ms-transform: rotateZ(288deg);
            -webkit-transform: rotateZ(288deg);
            -moz-transform: rotateZ(288deg);
        }
        .cssload-thing:nth-child(25):before, .cssload-thing:nth-child(25):after {
            animation: cssload-thing 1.31s -10.5s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -10.5s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -10.5s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -10.5s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -10.5s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(25):before {
            background: rgba(219, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.4s linear infinite;
            -o-animation: cssload-thing 1.75s -1.4s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.4s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.4s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.4s linear infinite;
        }
        .cssload-thing:nth-child(25):after {
            background: rgba(219, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(26) {
            transform: rotateZ(300deg);
            -o-transform: rotateZ(300deg);
            -ms-transform: rotateZ(300deg);
            -webkit-transform: rotateZ(300deg);
            -moz-transform: rotateZ(300deg);
        }
        .cssload-thing:nth-child(26):before, .cssload-thing:nth-child(26):after {
            animation: cssload-thing 1.31s -10.94s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -10.94s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -10.94s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -10.94s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -10.94s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(26):before {
            background: rgba(255, 77, 255, 0.1);
            animation: cssload-thing 1.75s -1.46s linear infinite;
            -o-animation: cssload-thing 1.75s -1.46s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.46s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.46s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.46s linear infinite;
        }
        .cssload-thing:nth-child(26):after {
            background: rgba(255, 77, 255, 0.75);
        }
        .cssload-thing:nth-child(27) {
            transform: rotateZ(312deg);
            -o-transform: rotateZ(312deg);
            -ms-transform: rotateZ(312deg);
            -webkit-transform: rotateZ(312deg);
            -moz-transform: rotateZ(312deg);
        }
        .cssload-thing:nth-child(27):before, .cssload-thing:nth-child(27):after {
            animation: cssload-thing 1.31s -11.38s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -11.38s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -11.38s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -11.38s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -11.38s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(27):before {
            background: rgba(255, 77, 219, 0.1);
            animation: cssload-thing 1.75s -1.52s linear infinite;
            -o-animation: cssload-thing 1.75s -1.52s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.52s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.52s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.52s linear infinite;
        }
        .cssload-thing:nth-child(27):after {
            background: rgba(255, 77, 219, 0.75);
        }
        .cssload-thing:nth-child(28) {
            transform: rotateZ(324deg);
            -o-transform: rotateZ(324deg);
            -ms-transform: rotateZ(324deg);
            -webkit-transform: rotateZ(324deg);
            -moz-transform: rotateZ(324deg);
        }
        .cssload-thing:nth-child(28):before, .cssload-thing:nth-child(28):after {
            animation: cssload-thing 1.31s -11.81s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -11.81s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -11.81s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -11.81s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -11.81s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(28):before {
            background: rgba(255, 77, 184, 0.1);
            animation: cssload-thing 1.75s -1.58s linear infinite;
            -o-animation: cssload-thing 1.75s -1.58s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.58s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.58s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.58s linear infinite;
        }
        .cssload-thing:nth-child(28):after {
            background: rgba(255, 77, 184, 0.75);
        }
        .cssload-thing:nth-child(29) {
            transform: rotateZ(336deg);
            -o-transform: rotateZ(336deg);
            -ms-transform: rotateZ(336deg);
            -webkit-transform: rotateZ(336deg);
            -moz-transform: rotateZ(336deg);
        }
        .cssload-thing:nth-child(29):before, .cssload-thing:nth-child(29):after {
            animation: cssload-thing 1.31s -12.25s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -12.25s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -12.25s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -12.25s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -12.25s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(29):before {
            background: rgba(255, 77, 148, 0.1);
            animation: cssload-thing 1.75s -1.63s linear infinite;
            -o-animation: cssload-thing 1.75s -1.63s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.63s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.63s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.63s linear infinite;
        }
        .cssload-thing:nth-child(29):after {
            background: rgba(255, 77, 148, 0.75);
        }
        .cssload-thing:nth-child(30) {
            transform: rotateZ(348deg);
            -o-transform: rotateZ(348deg);
            -ms-transform: rotateZ(348deg);
            -webkit-transform: rotateZ(348deg);
            -moz-transform: rotateZ(348deg);
        }
        .cssload-thing:nth-child(30):before, .cssload-thing:nth-child(30):after {
            animation: cssload-thing 1.31s -12.69s ease-in-out infinite alternate-reverse;
            -o-animation: cssload-thing 1.31s -12.69s ease-in-out infinite alternate-reverse;
            -ms-animation: cssload-thing 1.31s -12.69s ease-in-out infinite alternate-reverse;
            -webkit-animation: cssload-thing 1.31s -12.69s ease-in-out infinite alternate-reverse;
            -moz-animation: cssload-thing 1.31s -12.69s ease-in-out infinite alternate-reverse;
        }
        .cssload-thing:nth-child(30):before {
            background: rgba(255, 77, 112, 0.1);
            animation: cssload-thing 1.75s -1.69s linear infinite;
            -o-animation: cssload-thing 1.75s -1.69s linear infinite;
            -ms-animation: cssload-thing 1.75s -1.69s linear infinite;
            -webkit-animation: cssload-thing 1.75s -1.69s linear infinite;
            -moz-animation: cssload-thing 1.75s -1.69s linear infinite;
        }
        .cssload-thing:nth-child(30):after {
            background: rgba(255, 77, 112, 0.75);
        }



        @keyframes cssload-thing {
            100% {
                padding: 2em 0;
            }
        }

        @-o-keyframes cssload-thing {
            100% {
                padding: 2em 0;
            }
        }

        @-ms-keyframes cssload-thing {
            100% {
                padding: 2em 0;
            }
        }

        @-webkit-keyframes cssload-thing {
            100% {
                padding: 2em 0;
            }
        }

        @-moz-keyframes cssload-thing {
            100% {
                padding: 2em 0;
            }
        }
        #jelve1{
            display: none;
        }
        /*--------------------------------------------------------*/
        .button{
            text-decoration: none;
            color: white;
            background-color: #3366FF;
            border-radius: 10px;
            padding: 15px;
            font-family: Tahoma;
        }
        .button:hover{
            background-color: forestgreen;
        }
	</style>
	<script type="text/javascript">
		var pKind=["<?php echo $p0Kind; ?>","<?php echo $p1Kind; ?>","<?php echo $p2Kind; ?>","<?php echo $p3Kind; ?>"];//-----------------------------0=cpu 1=player
		var turn=-1;//-------------------------------------0-3
		var roll='تاس';//--------------------------------------1-6
		var place=[[-1,-1,-1,-1],[-1,-1,-1,-1],[-1,-1,-1,-1],[-1,-1,-1,-1]];//[[player0],[player1],[player2],[player3]]
		var move=[-1,-1,-1,-1];//--------------------------player legal move
		var attackAble=[-1,-1,-1,-1];//--------------------attack ability
		var difficulty="<?php echo $difficulty; ?>";//-----easy/normal
        var lap2=[[1,1,1,1],[0,0,0,0],[0,0,0,0],[0,0,0,0]];//
        var speed=<?php echo $speed; ?>;
        var name = ['<?php echo $player0; ?>','<?php echo $player1; ?>','<?php echo $player2; ?>','<?php echo $player3; ?>'];

		window.onload=Main;
		function Main(){
		    for(var i=0;i<4;i++) {
                document.getElementById('diceBtn' + i).value = roll;
            }
			Turn();//who is turn?
			//-----------------check humanity
			if (pKind[turn] == "1") {//human
                if (CheckHomes()){
                    //enable dice for this player
                    document.getElementById('diceBtn'+turn).disabled=false;
                }else{
                    document.getElementById('diceBtn'+turn).removeAttribute('onClick');
                }
			}else{//cpu
				while (CheckHomes() === true){//------while one player home become full
					RollAgain(document.getElementById('diceBtn'+turn));//roll
					Core();//game function
					if (move[0]==-1 && move[1]==-1 && move[2]==-1 && move[3]==-1) {
						if (roll == 6) {
							RollAgain(document.getElementById('diceBtn'+turn));
						}else{
//                            Main();
                            setTimeout(Main,speed);
                            break;
                        }
					}else{
						MakeAvailable();
						if (difficulty == 'normal') {
                            var max = Math.max(move[0], move[1], move[2], move[3]);
                            for (i = 0; i < 4; i++) {
                                if (move[i] > 39) {//1-near the home go home
                                    rMove = i;
                                    break;
                                } else if (attackAble[i] > -1) {//2-attackable attack
                                    rMove = i;
                                    break;
                                } else {
                                    if (max == move[i])//3-play grater number
                                        rMove = i;
                                }
                            }
                        }else if (difficulty == 'easy') {
                            var rMove = Math.floor(Math.random() * 4);//random move
                            while (move[rMove] == '-1') {
                                rMove = Math.floor(Math.random() * 4);
                            }
                        }
                        var placeName='';//---------------------if mohre is near the home or is out or not near the home ,we should know this place is home ,not simple place
                        var opponent='';
                        if (document.getElementById('mohre'+rMove+'_p'+turn).parentNode.id.slice(0, 1) == 'k' || document.getElementById('mohre'+rMove+'_p'+turn).parentNode.id.slice(0, 1) == 'm'){
                            placeName='k';
                        }
                        if(move[rMove] >= 0 && move[rMove] < 6){//۳۹ را رد کرده است
                            lap2[turn][rMove]=1;
                        }
                        if(move[rMove] > 39){//با این کار دفعه دوم که خواست بره به خانه اش اجازه خواهد داشت
                            if(placeName == 'k' && lap2[turn][rMove] == 0) {// اتفاق نمیفتد !بیشتر از ۳۹ و میخواهد از ۰ عبور کند
                                if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                                    opponent = document.getElementById(placeName + move[rMove]).firstElementChild;//----opponent id
                                    place[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = -1;//change opponent mohre place
                                    lap2[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = 0;//مهره ای که بیرون رفته باید لپش ریست بشه
                                    document.getElementById(opponent.id + '_out').appendChild(opponent); //move out opponent mohre
                                    document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                                    place[turn][rMove] = move[rMove];
                                    ResetAvailable();
                                    if (roll == 6) {
                                        RollAgain(document.getElementById('diceBtn' + turn));
                                    } else {
//                                            Main();
                                        setTimeout(Main,speed);
                                        break;
                                    }
                                } else {//-----------------------------------------------------------this place is vacant
                                    document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                                    place[turn][rMove] = move[rMove];
                                    ResetAvailable();
                                    if (roll == 6) {
                                        RollAgain(document.getElementById('diceBtn' + turn));
                                    } else {
//                                            Main();
                                        setTimeout(Main,speed);
                                        break;
                                    }
                                }
                            }else{//بیشتر از ۳۹ و میخواهد در خانه جابجا شود یا بیشتر از ۳۹ و میخواهد وارد خانه شود
                                if (turn == 0)
                                    placeName = 'redHome';
                                if (turn == 1)
                                    placeName = 'blueHome';
                                if (turn == 2)
                                    placeName = 'greenHome';
                                if (turn == 3)
                                    placeName = 'yellowHome';
                                if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                                    ResetAvailable();
                                    if (roll == 6) {
                                        RollAgain(document.getElementById('diceBtn' + turn));
                                    } else {
//                                            Main();
                                        setTimeout(Main,speed);
                                        break;
                                    }
                                } else {//-----------------------------------------------------------this place is vacant
                                    document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                                    place[turn][rMove] = move[rMove];
                                    ResetAvailable();
                                    if (roll == 6) {
                                        RollAgain(document.getElementById('diceBtn' + turn));
                                    } else {
//                                            Main();
                                        setTimeout(Main,speed);
                                        break;
                                    }
                                }
                            }
                        }else{//(< 40 )
                            placeName='k';
                            if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                                opponent = document.getElementById(placeName + move[rMove]).firstElementChild;//----opponent id
                                place[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = -1;//change opponent mohre place
                                lap2[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = 0;//مهره ای که بیرون رفته باید لپش ریست بشه
                                document.getElementById(opponent.id + '_out').appendChild(opponent); //move out opponent mohre
                                document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                                place[turn][rMove] = move[rMove];
                                ResetAvailable();
                                if (roll == 6) {
                                    RollAgain(document.getElementById('diceBtn' + turn));
                                } else {
//                                        Main();
                                    setTimeout(Main,speed);
                                    break;
                                }
                            } else {//-----------------------------------------------------------this place is vacant
                                document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                                place[turn][rMove] = move[rMove];
                                ResetAvailable();
                                if (roll == 6) {
                                    RollAgain(document.getElementById('diceBtn' + turn));
                                } else {
//                                        Main();
                                    setTimeout(Main,speed);
                                    break;
                                }
                            }
                        }
					}
				}//end while
                if(CheckHomes() !== true){
                    var w = window.innerWidth;
                    var h = window.innerHeight;
                    document.getElementById('endWindow').style.width = w + "px";
                    document.getElementById('endWindow').style.height = h + "px";
                    document.getElementById('out').style.zIndex='0';
                    document.getElementById('message').style.display = 'block';
                    document.getElementById('jelve1').style.display = 'block';
                    for(i=0; i<4; i++){
                        if(CheckHomes() ==='player'+i){
                            document.getElementById('message').getElementsByTagName('p')[0].textContent = 'تبریک '+name.split(',')[i]+' عزیز شما برنده شدید';
                        }
                    }
                }
			}
		}
		function PlayMove(rMove){
            var placeName='';//---------------------if mohre is near the home or is out or not near the home ,we should know this place is home ,not simple place
            var opponent='';
            if (document.getElementById('mohre'+rMove+'_p'+turn).parentNode.id.slice(0, 1) == 'k' || document.getElementById('mohre'+rMove+'_p'+turn).parentNode.id.slice(0, 1) == 'm'){
                placeName='k';
            }
            if(move[rMove] >= 0 && move[rMove] < 6){//۳۹ را رد کرده است
                lap2[turn][rMove]=1;
            }
            if(move[rMove] > 39){//با این کار دفعه دوم که خواست بره به خانه اش اجازه خواهد داشت
                if(placeName == 'k' && lap2[turn][rMove] == 0) {// اتفاق نمیفتد !بیشتر از ۳۹ و میخواهد از ۰ عبور کند
                    if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                        opponent = document.getElementById(placeName + move[rMove]).firstElementChild;//----opponent id
                        place[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = -1;//change opponent mohre place
                        lap2[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = 0;//مهره ای که بیرون رفته باید لپش ریست بشه
                        document.getElementById(opponent.id + '_out').appendChild(opponent); //move out opponent mohre
                        document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                        place[turn][rMove] = move[rMove];
                        ResetAvailable();
                        if (roll != 6) {
                            Main();
                        }
                    } else {//-----------------------------------------------------------this place is vacant
                        document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                        place[turn][rMove] = move[rMove];
                        ResetAvailable();
                        if (roll != 6) {
                            Main();
                        }
                    }
                }else{//بیشتر از ۳۹ و میخواهد در خانه جابجا شود یا بیشتر از ۳۹ و میخواهد وارد خانه شود
                    if (turn == 0)
                        placeName = 'redHome';
                    if (turn == 1)
                        placeName = 'blueHome';
                    if (turn == 2)
                        placeName = 'greenHome';
                    if (turn == 3)
                        placeName = 'yellowHome';
                    if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                        ResetAvailable();
                        if (roll != 6) {
                            Main();
                        }
                    } else {//-----------------------------------------------------------this place is vacant
                        document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                        place[turn][rMove] = move[rMove];
                        ResetAvailable();
                        if (roll != 6) {
                            Main();
                        }
                    }
                }
            }else{//(< 40 )
                placeName='k';
                if (document.getElementById(placeName + move[rMove]).childElementCount > 0) {//another player mohre is here
                    opponent = document.getElementById(placeName + move[rMove]).firstElementChild;//----opponent id
                    place[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = -1;//change opponent mohre place
                    lap2[opponent.id.slice(8, 9)][opponent.id.slice(5, 6)] = 0;//مهره ای که بیرون رفته باید لپش ریست بشه
                    document.getElementById(opponent.id + '_out').appendChild(opponent); //move out opponent mohre
                    document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                    place[turn][rMove] = move[rMove];
                    ResetAvailable();
                    if (roll != 6) {
                        Main();
                    }
                } else {//-----------------------------------------------------------this place is vacant
                    document.getElementById(placeName + move[rMove]).appendChild(document.getElementById('mohre' + rMove + '_p' + turn));//---replace mohre
                    place[turn][rMove] = move[rMove];
                    ResetAvailable();
                    if (roll != 6) {
                        Main();
                    }
                }
            }
            var btnOb=document.getElementById('diceBtn' + turn);
            btnOb.disabled=false;//enable dice for the next click
        }
		function ManageHumanBehav(btnOb){
            for(var i=0;i<4;i++) {
                document.getElementById('diceBtn' + i).style.fontSize = '30px';
            }
            btnOb.disabled=true;
		    RollAgain(btnOb);
		    Core();
            if (move[0]==-1 && move[1]==-1 && move[2]==-1 && move[3]==-1) {
                if (roll == 6) {
                    btnOb.disabled=false;//now can roll again
                }else{
//                    btnOb.disabled=false;//enable roll dice for the next time
//                    Main();
                    setTimeout(Main,speed);
                }
            }else{//have some legal move
                MakeAvailable();
            }
        }
        function  ResetAvailable() {
            //-----------------------------disable all element for drop
            var dropAble=document.getElementsByTagName('div');
            for (var i = dropAble.length - 1; i >= 0; i--) {
                if (dropAble[i].getAttribute('ondrop') != null) {
                    dropAble[i].removeAttribute('ondrop');
                    dropAble[i].removeAttribute('ondragover');
                    dropAble[i].removeAttribute('class');
                }
            }
        }
		function MakeAvailable(){
            ResetAvailable();
		    var placeName='';
			//---------------------------------------------------------make drop able that place for that mohre should be
			for (var i = 0; i < 4; i++) {
			    if(move[i] > -1 && move[i] < 40)
			        placeName='k';
			    else{
			        if(turn == 0)
			            placeName='redHome';
			        else if(turn == 1)
			            placeName='blueHome';
			        else if(turn == 2)
			            placeName='greenHome';
			        else
			            placeName='yellowHome';
                }
				if (move[i] > -1 && move[i] < 44) {//make available move[i] place for this mohre
					var mohreName='mohre'+i+'_p'+turn;
					document.getElementById(placeName+move[i]).setAttribute("ondrop", "drop(event,"+mohreName+")");
					document.getElementById(placeName+move[i]).setAttribute("ondragover", "allowDrop(event)");
					//highlight available place and mohre
					document.getElementById(placeName+move[i]).setAttribute('class', 'makeBold');
					//---------------------------------
				}
			}
		}
		function CheckHomes() {
            //-------------------------player0 homes
           if (document.getElementById('redHome40').childElementCount > 0 &&
               document.getElementById('redHome41').childElementCount > 0 &&
               document.getElementById('redHome42').childElementCount > 0 &&
               document.getElementById('redHome43').childElementCount > 0) {
               return 'player0';
           }else if(document.getElementById('blueHome40').childElementCount > 0 &&
               document.getElementById('blueHome41').childElementCount > 0 &&
               document.getElementById('blueHome42').childElementCount > 0 &&
               document.getElementById('blueHome43').childElementCount > 0){
               return 'player1';
           }else if(document.getElementById('greenHome40').childElementCount > 0 &&
               document.getElementById('greenHome41').childElementCount > 0 &&
               document.getElementById('greenHome42').childElementCount > 0 &&
               document.getElementById('greenHome43').childElementCount > 0){
               return 'player2';
           }else if(document.getElementById('yellowHome40').childElementCount > 0 &&
               document.getElementById('yellowHome41').childElementCount > 0 &&
               document.getElementById('yellowHome42').childElementCount > 0 &&
               document.getElementById('yellowHome43').childElementCount > 0){
               return 'player3';
           }else{
               return true;
           }
        }
		function Core(){
			for (var i = 0; i < 4; i++) {
				if (place[turn][i] == '-1') {//mohre i is out
					if (roll == '6') {
						//--------------------check this player start place
						//-----for player0
						if (turn == '0') {//start place is vacant
							if (document.getElementById('k0').childElementCount == 0) {
								move[i]=0;
								attackAble[i]=-1;
							}else{//-------------------------------------------------------------------------------is not vacant
								if (document.getElementById('k0').firstElementChild.name == 'p0Mohre') {//--is this player mohre?
									move[i]=-1;
									attackAble[i]=-1;
								}else{//-------------------------------------------------------------------is another player mohre?
									move[i]=0;
									attackAble[i]=0;
								}
							}
						}
						//-----for player1
						if (turn == '1') {//start place is vacant
							if (document.getElementById('k10').childElementCount == 0) {
								move[i]=10;
								attackAble[i]=-1;
							}else{//-------------------------------------------------------------------------------is not vacant
								if (document.getElementById('k10').firstElementChild.name == 'p1Mohre') {//--is this player mohre?
									move[i]=-1;
									attackAble[i]=-1;
								}else{//-------------------------------------------------------------------is another player mohre?
									move[i]=10;
									attackAble[i]=10;
								}
							}
						}
						//-----for player2
						if (turn == '2') {//start place is vacant
							if (document.getElementById('k20').childElementCount == 0) {
								move[i]=20;
								attackAble[i]=-1;
							}else{//-------------------------------------------------------------------------------is not vacant
								if (document.getElementById('k20').firstElementChild.name == 'p2Mohre') {//--is this player mohre?
									move[i]=-1;
									attackAble[i]=-1;
								}else{//-------------------------------------------------------------------is another player mohre?
									move[i]=20;
									attackAble[i]=20;
								}
							}
						}
						//-----for player3
						if (turn == '3') {//start place is vacant
							if (document.getElementById('k30').childElementCount == 0) {
								move[i]=30;
								attackAble[i]=-1;
							}else{//-------------------------------------------------------------------------------is not vacant
								if (document.getElementById('k30').firstElementChild.name == 'p3Mohre') {//--is this player mohre?
									move[i]=-1;
									attackAble[i]=-1;
								}else{//-------------------------------------------------------------------is another player mohre?
									move[i]=30;
									attackAble[i]=30;
								}
							}
						}
						//--------------------
					}else{
						move[i]=-1;
						attackAble[i]=-1;
					}
				}else{//----------------------mohre i in game
					//-----------------------------------------------------------------------player0
					if(turn == '0'){
                        if (place[turn][i]+roll < 40) {
                            if (document.getElementById('k' + (place[turn][i] + roll)).childElementCount == 0) {//this place is vacant
                                move[i] = place[turn][i] + roll;
                                attackAble[i] = -1;
                            } else {//----------------------------------------------------------------------this place is full
                                if (document.getElementById('k' + (place[turn][i] + roll)).firstElementChild.name == 'p' + turn + 'Mohre') {//this player mohre
                                    move[i] = -1;
                                    attackAble[i] = -1;
                                } else {//------------------------------------------------------------------------------------------another player mohre
                                    move[i] = place[turn][i] + roll;
                                    attackAble[i] = place[turn][i] + roll;
                                }
                            }
                        }else if(place[turn][i]+roll > 39 && place[turn][i]+roll < 44){
                            if (document.getElementById('redHome' + (place[turn][i] + roll)).childElementCount == 0) {//this place is vacant
                                move[i] = place[turn][i] + roll;
                                attackAble[i] = -1;
                            } else {//----------------------------------------------------------------------this place is full
                                move[i] = -1;
                                attackAble[i] = -1;
                            }
                        }else if(place[turn][i]+roll > 43){//----------have not legal move because passed home, keep pre move
                            move[i] = -1;
                            attackAble[i] = -1;
                        }
                    }//end turn0 if
                    //-----------------------------------------------------------------------player1
                    if(turn == '1'){
                        if (place[1][i]+roll > 9 && place[1][i]+roll < 14) {
                            if(lap2[1][i] == 0) {//(9, 14)
                                if (document.getElementById('k' + (place[1][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[1][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[1][i] + roll)).firstElementChild.name == 'p1Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[1][i] + roll;
                                        attackAble[i] = place[1][i] + roll;
                                    }
                                }
                            }else{//-------------------------------with next move will go home
                                if (place[1][i]+roll < 14){//(9 ,14)=(39, 44)
                                    if (document.getElementById('blueHome' + ((place[1][i] + roll)+30)).childElementCount == 0) {//this place is vacant
                                        move[i] = (place[1][i] + roll)+30;
                                        attackAble[i] = -1;
                                    } else {//----------------------------------------------------------------------this place is full
                                            move[i] = -1;
                                            attackAble[i] = -1;
                                    }
                                }else{//-----------------------------------like situation player0 passed place43,
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if (place[1][i]+roll > 13 && place[1][i]+roll < 40){//(13, 40)
                            if(lap2[1][i] == 0){//تازه شروع به حرکت کردن داره
                                if (document.getElementById('k' + (place[1][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[1][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[1][i] + roll)).firstElementChild.name == 'p1Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[1][i] + roll;
                                        attackAble[i] = place[1][i] + roll;
                                    }
                                }
                            }else{//اگر بخواهد به داخل خانه برود از خانه رد خواهد شد
                                move[i]=-1;
                                attackAble[i]=-1;
                            }
                        }else if (place[1][i]+roll > 39) {
                            //چون در خانه اش نیست و حال اگر k39 برایش مجاز بشود به مسیر خودش ادامه بدهد و داخل خانه player0 نشود
                            if (document.getElementById('mohre'+i+'_p1').parentNode.id.slice(0,1) == 'k' && lap2[1][i] == 0) {//نزدیک 39 است ومیخواد از 0 عبور کنه
                                if (document.getElementById('k' + ((place[1][i] + roll) - 40)).childElementCount == 0) {
                                    move[i] = (place[1][i] + roll) - 40;
                                    attackAble[i] = -1;
                                } else {
                                    if (document.getElementById('k' + ((place[1][i] + roll) - 40)).firstElementChild.name == 'p1Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = (place[1][i] + roll) - 40;
                                        attackAble[i] = (place[1][i] + roll) - 40;
                                    }
                                }
                            }else if(document.getElementById('mohre'+i+'_p1').parentNode.id.slice(0,1) != 'k' && lap2[1][i] == 1){//این مهره در خانه اش است و میخواهد جابجا شودیانزدیک 39 است و میخواد وارد خانه بشه
                                if (place[1][i]+roll < 44){//این مهره با این حرکت در خانه اش حرکت میکند
                                    if (document.getElementById('blueHome' + ((place[1][i] + roll))).childElementCount == 0) {//با این حرکت به یک خانه خالی خواهد رفت
                                        move[i] = place[1][i] + roll;
                                        attackAble[i] = -1;
                                    }else{//با این حرکت به یک خانه پر خواهد رفت
                                            move[i]=-1;
                                            attackAble[i]=-1;
                                    }
                                }else{//این مهره با این حرکت خانه اش را رد خواهد کرد پس این حرکت مجاز نیست
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if (place[1][i]+roll < 10){
                            if (document.getElementById('k' + (place[1][i] + roll)).childElementCount == 0) {//this place is vacant
                                move[i] = place[turn][i] + roll;
                                attackAble[i] = -1;
                            } else {//----------------------------------------------------------------------this place is full
                                if (document.getElementById('k' + (place[1][i] + roll)).firstElementChild.name == 'p1Mohre') {//this player mohre
                                    move[i] = -1;
                                    attackAble[i] = -1;
                                } else {//------------------------------------------------------------------------------------------another player mohre
                                    move[i] = place[1][i] + roll;
                                    attackAble[i] = place[1][i] + roll;
                                }
                            }
                        }
                    }
                    //-----------------------------------------------------------------------player2
                    if(turn == '2'){
                        if (place[2][i]+roll > 19 && place[2][i]+roll < 24) {
                            if(lap2[2][i] == 0) {//(19, 24)
                                if (document.getElementById('k' + (place[2][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[2][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[2][i] + roll)).firstElementChild.name == 'p2Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[2][i] + roll;
                                        attackAble[i] = place[2][i] + roll;
                                    }
                                }
                            }else{//-------------------------------with next move will go home
                                if (place[2][i]+roll < 24){//(19 ,24)=(39, 44)
                                    if (document.getElementById('greenHome' + ((place[2][i] + roll)+20)).childElementCount == 0) {//this place is vacant
                                        move[i] = (place[2][i] + roll)+20;
                                        attackAble[i] = -1;
                                    } else {//----------------------------------------------------------------------this place is full
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    }
                                }else{//-----------------------------------like situation player0 passed place43
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if (place[2][i]+roll > 23 && place[2][i]+roll < 40){//(23, 40)
                            if(lap2[2][i] == 0){//ابتدای بازی است میخواهد حرکت کند
                                if (document.getElementById('k' + (place[2][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[2][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[2][i] + roll)).firstElementChild.name == 'p2Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[2][i] + roll;
                                        attackAble[i] = place[2][i] + roll;
                                    }
                                }
                            }else{//اگر بخواهد به داخل خانه برود از خانه رد خواهد شد
                                move[i]=-1;
                                attackAble[i]=-1;
                            }
                        }else if (place[2][i]+roll > 39) {
                            //چون در خانه اش نیست و حال اگر k39 برایش مجاز بشود به مسیر خودش ادامه بدهد و داخل خانه player0 نشود
                            if (document.getElementById('mohre'+i+'_p2').parentNode.id.slice(0,1) == 'k' && lap2[2][i] == 0){//این مهره در خانه اش نیست
                                if(document.getElementById('k' + ((place[2][i] + roll) - 40)).childElementCount == 0){
                                    move[i] = (place[2][i] + roll) - 40;
                                    attackAble[i] = -1;
                                }else {
                                    if (document.getElementById('k' + ((place[2][i] + roll) - 40)).firstElementChild.name == 'p2Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = (place[2][i] + roll) - 40;
                                        attackAble[i] = (place[2][i] + roll) - 40;
                                    }
                                }
                            }else if(document.getElementById('mohre'+i+'_p2').parentNode.id.slice(0,1) != 'k' && lap2[2][i] == 1){//این مهره در خانه اش است و میخواهد جابجا شودیانزدیک 39 است و میخواد وارد خانه بشه
                                if (place[2][i]+roll < 44){//این مهره با این حرکت در خانه اش حرکت میکند
                                    if (document.getElementById('greenHome' + ((place[2][i] + roll))).childElementCount == 0) {//با این حرکت به یک خانه خالی خواهد رفت
                                        move[i] = place[2][i] + roll;
                                        attackAble[i] = -1;
                                    }else{//با این حرکت به یک خانه پر خواهد رفت
                                        move[i]=-1;
                                        attackAble[i]=-1;
                                    }
                                }else{//این مهره با این حرکت خانه اش را رد خواهد کرد پس این حرکت مجاز نیست
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if (place[2][i]+roll < 20){
                            if (document.getElementById('k' + (place[2][i] + roll)).childElementCount == 0) {//this place is vacant
                                move[i] = place[2][i] + roll;
                                attackAble[i] = -1;
                            } else {//----------------------------------------------------------------------this place is full
                                if (document.getElementById('k' + (place[2][i] + roll)).firstElementChild.name == 'p2Mohre') {//this player mohre
                                    move[i] = -1;
                                    attackAble[i] = -1;
                                } else {//------------------------------------------------------------------------------------------another player mohre
                                    move[i] = place[2][i] + roll;
                                    attackAble[i] = place[2][i] + roll;
                                }
                            }
                        }
                    }
                    //-----------------------------------------------------------------------player3
                    if(turn == '3'){
                        if (place[3][i]+roll > 29 && place[3][i]+roll < 34) {//(29 ,34)
                            if(lap2[3][i] == 0) {//(29, 34)
                                if (document.getElementById('k' + (place[3][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[3][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[3][i] + roll)).firstElementChild.name == 'p3Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[3][i] + roll;
                                        attackAble[i] = place[3][i] + roll;
                                    }
                                }
                            }else{//-------------------------------with next move will go home
                                if (place[3][i]+roll < 34){//  (29, 34)=(39, 44)
                                    if (document.getElementById('yellowHome' + ((place[3][i] + roll)+10)).childElementCount == 0) {//this place is vacant
                                        move[i] = (place[3][i] + roll)+10;
                                        attackAble[i] = -1;
                                    } else {//با حرکت بعدی به خانه ای میرود که پر است و چون این خانه اش است پس حتما مهره خودی خانه را اشغال کزده است
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    }
                                }else{//-----------------------------------like situation player0 passed place43
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if(place[3][i]+roll > 33 && place[3][i]+roll < 40){
                            if(lap2[3][i] == 0) {//تازه شروع به حرکت کرده
                                if (document.getElementById('k' + (place[3][i] + roll)).childElementCount == 0) {//this place is vacant
                                    move[i] = place[3][i] + roll;
                                    attackAble[i] = -1;
                                } else {//----------------------------------------------------------------------this place is full
                                    if (document.getElementById('k' + (place[3][i] + roll)).firstElementChild.name == 'p3Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = place[3][i] + roll;
                                        attackAble[i] = place[3][i] + roll;
                                    }
                                }
                            }else{//اگر بخواهد به داخل خانه برود از خانه رد خواهد شد
                                move[i]=-1;
                                attackAble[i]=-1;
                            }
                        }else if (place[3][i]+roll > 39) {
                            //چون در خانه اش نیست و حال اگر k39 برایش مجاز بشود به مسیر خودش ادامه بدهد و داخل خانه player0 نشود
                            if (document.getElementById('mohre'+i+'_p3').parentNode.id.slice(0,1) == 'k' && lap2[3][i] == 0){//این مهره در خانه اش نیست
                                if(document.getElementById('k' + ((place[3][i] + roll) - 40)).childElementCount == 0){
                                    move[i] = (place[3][i] + roll) - 40;
                                    attackAble[i] = -1;
                                }else {
                                    if (document.getElementById('k' + ((place[3][i] + roll) - 40)).firstElementChild.name == 'p3Mohre') {//this player mohre
                                        move[i] = -1;
                                        attackAble[i] = -1;
                                    } else {//------------------------------------------------------------------------------------------another player mohre
                                        move[i] = (place[3][i] + roll) - 40;
                                        attackAble[i] = (place[3][i] + roll) - 40;
                                    }
                                }
                            }else if(document.getElementById('mohre'+i+'_p3').parentNode.id.slice(0,1) != 'k' && lap2[3][i] == 1){//این مهره در خانه اش است و میخواهد جابجا شودیانزدیک 39 است و میخواد وارد خانه بشه
                                if (place[3][i]+roll < 44){//این مهره با این حرکت در خانه اش حرکت میکند
                                    if (document.getElementById('yellowHome' + (place[3][i] + roll)).childElementCount == 0) {//با این حرکت به یک خانه خالی خواهد رفت
                                        move[i] = place[3][i] + roll;
                                        attackAble[i] = -1;
                                    }else{//با این حرکت به یک خانه پر خواهد رفت
                                        move[i]=-1;
                                        attackAble[i]=-1;
                                    }
                                }else{//این مهره با این حرکت خانه اش را رد خواهد کرد پس این حرکت مجاز نیست
                                    move[i]=-1;
                                    attackAble[i]=-1;
                                }
                            }
                        }else if (place[3][i]+roll < 30){
                            if (document.getElementById('k' + (place[3][i] + roll)).childElementCount == 0) {//this place is vacant
                                move[i] = place[3][i] + roll;
                                attackAble[i] = -1;
                            } else {//----------------------------------------------------------------------this place is full
                                if (document.getElementById('k' + (place[3][i] + roll)).firstElementChild.name == 'p3Mohre') {//this player mohre
                                    move[i] = -1;
                                    attackAble[i] = -1;
                                } else {//------------------------------------------------------------------------------------------another player mohre
                                    move[i] = place[3][i] + roll;
                                    attackAble[i] = place[3][i] + roll;
                                }
                            }
                        }
                    }
                    //------------------------------------------------------------------------------
				}
			}
		}
		function Turn(){
			//-----------------change game turn
			turn++;
			if (turn>3) {
				turn=0;
			}
			//-----------------show dice for next player
			for (var i = 3; i >= 0; i--) {
				document.getElementsByClassName('diceBtn')[i].style.visibility='hidden';
			}
			document.getElementById('diceBtn'+turn).style.visibility='visible';	
			//--------------------------------------------
            if(pKind[turn] == "1") {
                document.getElementById('diceBtn' + turn).disabled = false;
            }else {
                document.getElementById('diceBtn' + turn).disabled = true;
            }
		}
		function RollAgain(btn){
			roll=Math.floor((Math.random() * 6) + 1);
			btn.value=roll;
			btn.style.fontSize='30px';
		}
		var obDrag;//data transfer do not work
		function drag(ev){
            ev.dataTransfer.setData("text", ev.target.id);
            obDrag=ev.target.id;
		}
		function allowDrop(ev){
			ev.preventDefault();
		}
		function drop(ev,mohre){
			ev.preventDefault();
			var ob=obDrag;//that element who is dragged
			if (mohre.id == ob) {//that element who is dragged should be the same mohre who should be in this place
                var opponent;
				if(ev.target.id.slice(0,1) == 'k') {
                    place[turn][mohre.id.slice(5, 6)] = parseInt(ev.target.id.slice(1));//from second word to end is place number
                    document.getElementById(ev.target.id).appendChild(document.getElementById(ob));
                }else if(ev.target.id.slice(0,1) == 'r' || ev.target.id.slice(0,1) == 'b' || ev.target.id.slice(0,1) == 'g' || ev.target.id.slice(0,1) == 'y') {
                    place[turn][mohre.id.slice(5, 6)] = parseInt(ev.target.id.slice(-2));//2 last digit word is place number
                    document.getElementById(ev.target.id).appendChild(document.getElementById(ob));
                }else{//مهره حریف در این مکان بود او را به بیرون هدایت کن
                    opponent = document.getElementById(ev.target.id);
                    var opponentFather=opponent.parentElement;
                    place[ev.target.id.slice(8, 9)][ev.target.id.slice(5, 6)] = -1;//change opponent mohre place
                    lap2[ev.target.id.slice(8, 9)][ev.target.id.slice(5, 6)] = 0;//مهره ای که بیرون رفته باید لپش ریست بشه
                    document.getElementById(ev.target.id + '_out').appendChild(opponent); //move out opponent mohre
                    opponentFather.appendChild(document.getElementById(ob));
                    place[turn][mohre.id.slice(5, 6)] = parseInt(opponentFather.id.slice(1));//from second word to end is place number
                }

                ResetAvailable();
				var btnOb=document.getElementById('diceBtn' + turn);
                btnOb.disabled=false;//enable dice for the next click
                if (roll != 6) {
                    Main();
                }
            }
		}
	</script>
</head>
<body>
	<div id="out" class="out">
		<div class="vector0">
			<div></div>
		</div>
		<div class="vector1">
			<div></div>
		</div>
		<div class="vector2">
			<div></div>
		</div>
		<div class="vector3">
			<div></div>
		</div>
		<div class="bordH">
			<div class="row0">
				<div id="k10" style="box-shadow: 1px 1px 1px blue;position: relative;"></div>
				<div id="k11" style="position: relative;"></div>
				<div id="k12" style="position: relative;"></div>
				<div id="k13" style="position: relative;"></div>
				<div></div>
				<div></div>
				<div></div>
				<div id="k25" style="position: relative;"></div>
				<div id="k26" style="position: relative;"></div>
				<div id="k27" style="position: relative;"></div>
				<div id="k28" style="position: relative;"></div>
			</div>

			<div class="row1">
				<div id="k9" style="position: relative;"></div>
				<div id="blueHome40" style="box-shadow: 1px 1px 1px blue, inset 0 0 5px blue;position: relative;"></div>
				<div id="blueHome41" style="box-shadow: 1px 1px 1px blue, inset 0 0 5px blue;position: relative;"></div>
				<div id="blueHome42" style="box-shadow: 1px 1px 1px blue, inset 0 0 5px blue;position: relative;"></div>
				<div></div>
				<div></div>
				<div></div>
				<div id="yellowHome42" style="box-shadow: 1px 1px 1px yellow, inset 0 0 5px yellow;position: relative;"></div>
				<div id="yellowHome41" style="box-shadow: 1px 1px 1px yellow, inset 0 0 5px yellow;position: relative;"></div>
				<div id="yellowHome40" style="box-shadow: 1px 1px 1px yellow, inset 0 0 5px yellow;position: relative;"></div>
				<div id="k29" style="position: relative;"></div>
			</div>

			<div class="row2">
				<div id="k8" style="position: relative;"></div>
				<div id="k7" style="position: relative;"></div>
				<div id="k6" style="position: relative;"></div>
				<div id="k5" style="position: relative;"></div>
				<div></div>
				<div></div>
				<div></div>
				<div id="k33" style="position: relative;"></div>
				<div id="k32" style="position: relative;"></div>
				<div id="k31" style="position: relative;"></div>
				<div id="k30" style="box-shadow: 1px 1px 1px yellow;position: relative;"></div>
			</div>
		</div>
		<div class="bordV">
			<div class="col0">
				<div id="k18" style="position: relative;"></div>
				<div id="k17" style="position: relative;"></div>
				<div id="k16" style="position: relative;"></div>
				<div id="k15" style="position: relative;"></div>
				<div id="k14" style="position: relative;"></div>
				<div id="blueHome43" style="box-shadow: 1px 1px 1px blue, inset 0 0 5px blue;position: relative;"></div>
				<div id="k4" style="position: relative;"></div>
				<div id="k3" style="position: relative;"></div>
				<div id="k2" style="position: relative;"></div>
				<div id="k1" style="position: relative;"></div>
				<div id="k0" style="box-shadow: 1px 1px 1px red;position: relative;"></div>
			</div>

			<div class="col1">
				<div id="k19" style="position: relative;"></div>
				<div id="greenHome40" style="box-shadow: 1px 1px 1px green, inset 0 0 5px green;position: relative;"></div>
				<div id="greenHome41" style="box-shadow: 1px 1px 1px green, inset 0 0 5px green;position: relative;"></div>
				<div id="greenHome42" style="box-shadow: 1px 1px 1px green, inset 0 0 5px green;position: relative;"></div>
				<div id="greenHome43" style="box-shadow: 1px 1px 1px green, inset 0 0 5px green;position: relative;"></div>
				<div></div>
				<div id="redHome43" style="box-shadow: 1px 1px 1px red, inset 0 0 5px red;position: relative;"></div>
				<div id="redHome42" style="box-shadow: 1px 1px 1px red, inset 0 0 5px red;position: relative;"></div>
				<div id="redHome41" style="box-shadow: 1px 1px 1px red, inset 0 0 5px red;position: relative;"></div>
				<div id="redHome40" style="box-shadow: 1px 1px 1px red, inset 0 0 5px red;position: relative;"></div>
				<div id="k39" style="position: relative;"></div>
			</div>

			<div class="col2">
				<div id="k20" style="box-shadow: 1px 1px 1px green;position: relative;"></div>
				<div id="k21" style="position: relative;"></div>
				<div id="k22" style="position: relative;"></div>
				<div id="k23" style="position: relative;"></div>
				<div id="k24" style="position: relative;"></div>
				<div id="yellowHome43" style="box-shadow: 1px 1px 1px yellow, inset 0 0 5px yellow;position: relative;"></div>
				<div id="k34" style="position: relative;"></div>
				<div id="k35" style="position: relative;"></div>
				<div id="k36" style="position: relative;"></div>
				<div id="k37" style="position: relative;"></div>
				<div id="k38" style="position: relative;"></div>
			</div>
		</div>

		<div id="player0">
			<label for="player0" id="p0Name"><?php echo $player0; ?></label>
			<div id="mohre0_p0_out"><img id="mohre0_p0" name="p0Mohre" src="image/mohreRed.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(0)"></div>
			<div id="mohre1_p0_out"><img id="mohre1_p0" name="p0Mohre" src="image/mohreRed.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(1)"></div>
			<div id="mohre2_p0_out"><img id="mohre2_p0" name="p0Mohre" src="image/mohreRed.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(2)"></div>
			<div id="mohre3_p0_out"><img id="mohre3_p0" name="p0Mohre" src="image/mohreRed.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(3)"></div>
		</div>
		<div id="player1">
			<label for="player1" id="p1Name"><?php echo $player1; ?></label>
			<div id="mohre0_p1_out"><img id="mohre0_p1" name="p1Mohre" src="image/mohreBlue.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(0)"></div>
			<div id="mohre1_p1_out"><img id="mohre1_p1" name="p1Mohre" src="image/mohreBlue.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(1)"></div>
			<div id="mohre2_p1_out"><img id="mohre2_p1" name="p1Mohre" src="image/mohreBlue.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(2)"></div>
			<div id="mohre3_p1_out"><img id="mohre3_p1" name="p1Mohre" src="image/mohreBlue.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(3)"></div>
		</div>
		<div id="player2">
			<label for="player2" id="p2Name"><?php echo $player2; ?></label>
			<div id="mohre0_p2_out"><img id="mohre0_p2" name="p2Mohre" src="image/mohreGreen.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(0)"></div>
			<div id="mohre1_p2_out"><img id="mohre1_p2" name="p2Mohre" src="image/mohreGreen.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(1)"></div>
			<div id="mohre2_p2_out"><img id="mohre2_p2" name="p2Mohre" src="image/mohreGreen.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(2)"></div>
			<div id="mohre3_p2_out"><img id="mohre3_p2" name="p2Mohre" src="image/mohreGreen.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(3)"></div>
		</div>
		<div id="player3">
			<label for="player3" id="p3Name"><?php echo $player3; ?></label>	
			<div id="mohre0_p3_out"><img id="mohre0_p3" name="p3Mohre" src="image/mohreYellow.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(0)"></div>
			<div id="mohre1_p3_out"><img id="mohre1_p3" name="p3Mohre" src="image/mohreYellow.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(1)"></div>
			<div id="mohre2_p3_out"><img id="mohre2_p3" name="p3Mohre" src="image/mohreYellow.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(2)"></div>
			<div id="mohre3_p3_out"><img id="mohre3_p3" name="p3Mohre" src="image/mohreYellow.png" draggable="true" ondragstart="drag(event)" onclick="PlayMove(3)"></div>
		</div>
		<input type="button" class="diceBtn" id="diceBtn0" value="تاس" onclick="ManageHumanBehav(this)">
		<input type="button" class="diceBtn" id="diceBtn1" value="تاس" onclick="ManageHumanBehav(this)">
		<input type="button" class="diceBtn" id="diceBtn2" value="تاس" onclick="ManageHumanBehav(this)">
		<input type="button" class="diceBtn" id="diceBtn3" value="تاس" onclick="ManageHumanBehav(this)">
	</div>
    <div class="end" id="endWindow">
        <div class="message" id="message">
            <p style="margin: 0;"></p>
            <div style="z-index: 3;font-size: 30px;">
                <a href="#" onclick="location.reload()" class="button">بازی مجدد</a>
                <a href="index.html" class="button">منوی اصلی</a>
            </div>
        </div>
        <div id="jelve1" class="cssload-container">
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
            <div class="cssload-thing"></div>
        </div>
    </div>
</body>
</html>
<?php 
	}else{
		header('refresh:0;url=index.html');
	}
 ?>
