<?php 
	include 'connect.php';
	$random = mysqli_query($connect,"SELECT*FROM questions where rOrC=0 AND user_id = ".$_GET['user_id']." ORDER BY rand()");
	$rand = mysqli_query($connect,"SELECT*FROM questions where rOrC=1 AND user_id = ".$_GET['user_id']." ORDER BY rand()");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mix Russia:Yakutia</title>
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Mix Russia:Yakutia">
	<meta name="application-name" content="Mix Russia:Yakutia">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		.header {
			height: 10%
		}

		.auto {
			margin-left: auto;
			margin-right: auto;
		}

		.circleOfNumber {
			height: 100px;
			text-align: center;
			border-radius: 70px;
			color: white;
		}

		.s {
			margin-left: 10%
		}

		.questions {
			margin-top: 50px
		}

	</style>
</head>
<body>

	
	<div class="row header bg-light">
		<div class="col text-center">
			<img src="LOGO.png" style="width: 20%">
		</div>
	</div>
	<a class="text-white" target="_blank" href="https://www.yakutskhistory.net/%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F-%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0-%D1%8F%D0%BA%D1%83%D1%82%D1%81%D0%BA%D0%B0-%D0%B3-%D0%B0-%D0%BF%D0%BE%D0%BF%D0%BE%D0%B2%D0%B0/">
    	<div class="bg-warning" style="height:70px;text-align:center">
    	    <h1 class="h1">
    	        Больше знаний
    	   </h1>
    	</div>
	</a>
		<?php 
			echo "<a class='text-white' target='_blank'href=select.php?user_id=".$_GET['user_id']." >";
		?>
    	<div class="bg-primary" style="height:70px;text-align:center">
    	    <h1 class="h1">
    	        Создать свои вопросы
    	   </h1>
    	</div>
	</a>
	<div class="container bg-light" style="margin-top: 50px">
		<div class="time">


			<div class="row">
				<div class="col offset-4">
					<h2 class="h2">
						Счет времени:
					</h2>
				</div>
			</div>

			<div class="row">
				<div class="col s">
					<div class="row">
						<h3 class="h3">
							Игрок 1
						</h3>
					</div>
					<h1 class="h1">
						<div class="row">
							<div class="col-5 circleOfNumber number" style="background: red"></div>
						</div>
					</h1>
				</div>

				<div class="col">
					<div class="row">
						<h3 class="h3">
							Игрок 2
						</h3>
					</div>
					<h1 class="h1">
						<div class="row">
							<div class="col-5 circleOfNumber number2" style="background: blue"></div>
						</div>
					</h1>
				</div>

				<div class="col">
					<div class="row">
						<h3 class="h3">
							Игрок 3
						</h3>
					</div>
					<h1 class="h1">
						<div class="row">
							<div class="col-5 circleOfNumber number3" style="background: yellow"></div>
						</div>
					</h1>
				</div>

				<div class="col">
					<div class="row">
						<h3 class="h3">
							Игрок 4
						</h3>
					</div>
					<h1 class="h1">
						<div class="row">
							<div class="col-5 circleOfNumber number4" style="background: green"></div>
						</div>
					</h1>
				</div>
			</div>
		</div>

		<div class="questions">
			<div class="row">
				<div class="col offset-3" style="">
					<button class="btn knowledgeBtn">
						Вопросы о республике
					</button>
					<button class="btn logicBtn">
						Вопросы о стране
					</button>
				</div>
			</div>
			<div class="row" style="text-align: center;">
				<div class="col-8 knowledgeQuestion offset-2" style="display: none;">
					<div class="row" style="">
						<h3 class="question"></h3>
					</div>
					<div class="row">
						<button class="CreateQuestion btn offset-5" style="">
							Создать вопрос
						</button>
						<button class="CreateQuestion2 btn offset-5" style="display: none">
							Создать вопрос
						</button>
					</div>
					<div class="row" style="">
						<h3 class="answer" style=""></h3>
					</div>
					<div class="row">
						<button class="GiveAnswer btn offset-5" style="">
							Узнать ответ
						</button>
					</div>
				</div>

				<div class="col-8 logic offset-2" style="display: none;">
					<div class="row" style="">
						<h3 class="question1">
							
						</h3>
					</div>
					<div class="row">
						<button class="CreateQuestion1 btn offset-5" style="">
							Создать вопрос
						</button>
						<button class="CreateQuestion3 btn offset-5" style="display: none">
							Создать вопрос
						</button>
					</div>
					<div class="row" style="">
						<h3 class="answer1" style=""></h3>
					</div>
					<div class="row">
						<button class="GiveAnswer1 btn offset-5" style="">
							Узнать ответ
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="transport">


			<div class="row">
				<div class="col offset-4">
					<h2 class="h2">
						Создать транспорт
					</h2>
				</div>
			</div>

			<div class="row">
				<div class="col offset-1">
					<div class="row">
						<div id="11">
						</div>
					</div>
					<div class="row">
						<div id="12">
						</div>
					</div>
					<button class="btn12 btn btn-danger">
						Игрок 1
					</button>
				</div>


				<div class="col">

					<div class="row ">
						<div id="13">
							
						</div>
					</div>
					<div class="row">
						<div id="14">
							
						</div>
					</div>
					<button class="btn13 btn btn-primary">
						Игрок 2
					</button>
				</div>


				<div class="col">
					<div class="row">
						<div id="15">
							
						</div>
					</div>
					<div class="row">
						<div id="16">
							
						</div>
					</div>
					<button class="btn14 btn btn-warning">
						Игрок 3
					</button>
				</div>
				<div class="col">
					<div class="row">
						<div id="17">
							
						</div>
					</div>
					<div class="row">
						<div id="18">
							
						</div>
					</div>
					<button class="btn15 btn btn-success">
						Игрок 4
					</button>
				</div>

			</div>
		</div>
		<div class="footer bg-secondary" style="height:200px;width: 100%; margin-top: 50px">
			<footer class="page-footer grey ">
			    <div class="container">
			      <div class="row">
			        <div class="col">
			          <h5 class="text-white">КОНТАКТНАЯ ИНФОРМАЦИЯ</h5>
			          <ul>
			            <li class="text-white">г. Якутск</li>
			            <li class="text-white">к / т: 8 (914) 2917801</li>
			            <li class="text-white">e-mail: want74@rambler.ru</li>
			            <li class="text-white"><a class="text-white" target="_blank" href="https://m.vk.com/keker2281337">vk: vk.com/keker2281337/</a></li>
			            <li class="text-white"><a class="text-white" target="_blank" href="https://steamcommunity.com/id/want743/">steam: https://steamcommunity.com/id/want743/</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>

			    <div class="footer-copyright ">
			      <div class="container text-white">
			      © 2018 Created by Kychkin Andrey
			      </div>
			    </div>
  			</footer>
		</div>
	</div>
	<script type="text/javascript">
		var SummDok = document.querySelector(".number") 
		SummSumm= 0;
		SummDok.onclick = function(){
			SummSumm = SummSumm + 1
		SummDok.innerHTML = SummSumm
		}

		var SummDok2 = document.querySelector(".number2") 
		SummSumm2= 0;
		SummDok2.onclick = function(){
			SummSumm2 = SummSumm2 + 1
		SummDok2.innerHTML = SummSumm2
		}

		var SummDok3 = document.querySelector(".number3") 
		SummSumm3= 0;
		SummDok3.onclick = function(){
			SummSumm3 = SummSumm3 + 1
		SummDok3.innerHTML = SummSumm3
		}

		var SummDok4 = document.querySelector(".number4") 
		SummSumm4= 0;
		SummDok4.onclick = function(){
			SummSumm4 = SummSumm4 + 1
		SummDok4.innerHTML = SummSumm4
		}


		let knowledgeQuestion = document.querySelector('.knowledgeQuestion');
		let knowledgeBtn = document.querySelector('.knowledgeBtn')
		var dq = [<?php 
	 	for ($i=0; $i < $random->num_rows; $i++) 
	 	{ 
	 		$ad=$random->fetch_assoc();
			echo "'".$ad['question']."',";
			echo "'".$ad['answer']."',";
		} 
		?> ]
		let CreateQuestion = document.querySelector('.CreateQuestion')
		let CreateQuestion2 = document.querySelector('.CreateQuestion2')
		let GiveAnswer = document.querySelector('.GiveAnswer')
		let answer = document.querySelector('.answer')
		let question = document.querySelector('.question')
		var num = 0
		CreateQuestion.onclick = function() 
		{	
			answer.style.display = 'none'
			GiveAnswer.style.display = 'block'
			question.innerHTML = dq[num]
			GiveAnswer.onclick = function()
			{ 
					answer.style.display = 'block'
					num++
					answer.innerHTML = dq[num]
					CreateQuestion.style.display = 'none'
					CreateQuestion2.style.display = 'block'
			}
			
		}
		var num2 = dq.length-1
		CreateQuestion2.onclick = function() 
		{	
			if (num<num2) 
			{
				answer.style.display = 'none'
				GiveAnswer.style.display = 'block'
				num++
				question.innerHTML = dq[num]
				GiveAnswer.onclick = function()
				{ 
						answer.style.display = 'block'
						num++
						answer.innerHTML = dq[num]
						CreateQuestion.style.display = 'none'
						CreateQuestion2.style.display = 'block'
				}
				console.log(num)
			}else
			{
				alert('Вопросы кончились')
			}
			
		}



		let logic = document.querySelector('.logic');
		let logicBtn = document.querySelector('.logicBtn')
		var dqs = [<?php 
	 	for ($i=0; $i < $rand->num_rows; $i++) 
	 	{ 
	 		$ads=$rand->fetch_assoc();
			echo "'".$ads['question']."',";
			echo "'".$ads['answer']."',";
		} 
		?> ]
		let CreateQuestion1 = document.querySelector('.CreateQuestion1')
		let CreateQuestion3 = document.querySelector('.CreateQuestion3')
		let GiveAnswer1 = document.querySelector('.GiveAnswer1')
		let answer1 = document.querySelector('.answer1')
		let question1 = document.querySelector('.question1')
		var numb = 0
		CreateQuestion1.onclick = function() 
		{	
			answer1.style.display = 'none'
			GiveAnswer1.style.display = 'block'
			question1.innerHTML = dqs[numb]
			GiveAnswer1.onclick = function()
			{ 
					answer1.style.display = 'block'
					numb++
					answer1.innerHTML = dqs[numb]
					CreateQuestion1.style.display = 'none'
					CreateQuestion3.style.display = 'block'
			}
			
		}
		var numb2 = dqs.length-1
		CreateQuestion3.onclick = function() 
		{	
			if (numb<numb2) 
			{
				answer1.style.display = 'none'
				GiveAnswer1.style.display = 'block'
				numb++
				question1.innerHTML = dqs[numb]
				GiveAnswer1.onclick = function()
				{ 
						answer1.style.display = 'block'
						numb++
						answer1.innerHTML = dqs[numb]
						CreateQuestion1.style.display = 'none'
						CreateQuestion3.style.display = 'block'
				}
				console.log(numb)
			}else
			{
				alert('Вопросы кончились')
			}
			
		}


		var image=document.createElement('img');
		var img = document.createElement('img');
		var image2=document.createElement('img');
		var img2 = document.createElement('img');
		var image3=document.createElement('img');
		var img3 = document.createElement('img');
		var image4=document.createElement('img');
		var img4 = document.createElement('img');

		var div1 = document.getElementById('11');
		var div2 = document.getElementById('12');

		var div3 = document.getElementById('13');
		var div4 = document.getElementById('14');

		var div5 = document.getElementById('15');
		var div6 = document.getElementById('16');

		var div7 = document.getElementById('17');
		var div8 = document.getElementById('18');

		var btn12 = document.querySelector('.btn12');
		var btn13 = document.querySelector('.btn13');
		var btn14 = document.querySelector('.btn14');
		var btn15 = document.querySelector('.btn15');
		var di = ['vert.png','car.png','velosiped.png','chel.png','lodka.png','bus.png']
		btn12.onclick = function() {
			var random = Math.floor(Math.random() * di.length);
			var randm = Math.floor(Math.random() * di.length);
			image.src=di[random];
			img.src = di[randm]
			div1.appendChild(image);
			div2.appendChild(img);
		}

		btn13.onclick = function() {
			var random = Math.floor(Math.random() * di.length);
			var randm = Math.floor(Math.random() * di.length);
			image2.src=di[random];
			img2.src = di[randm]
			div3.appendChild(image2);
			div4.appendChild(img2);
		}

		btn14.onclick = function() {
			var random = Math.floor(Math.random() * di.length);
			var randm = Math.floor(Math.random() * di.length);
			image3.src=di[random];
			img3.src = di[randm]
			div5.appendChild(image3);
			div6.appendChild(img3);
		}

		btn15.onclick = function() {
			var random = Math.floor(Math.random() * di.length);
			var randm = Math.floor(Math.random() * di.length);
			image4.src=di[random];
			img4.src = di[randm];
			div7.appendChild(image4);
			div8.appendChild(img4);
		}
		logicBtn.onclick = function () {
			logic.style.display = 'block'
			knowledgeQuestion.style.display = 'none'
		}
	knowledgeBtn.onclick = function () {
			logic.style.display = 'none'
			knowledgeQuestion.style.display = 'block'
		}


		
	</script>
</body>
</html>