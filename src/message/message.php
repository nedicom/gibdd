<!-- Онлайн консультация -->
<style>
.message-sent {
line-height: 18px;
font-size: 15px;
padding: 8px;
margin: 4px;
max-width: 85%;
background: #fff;
border-radius: 0px 5px 5px 5px;
}

.message-recieve {
line-height: 18px;
font-size: 15px;
padding: 8px;
margin: 4px;
max-width: 85%;
background: #e1ffc7;
border-radius: 5px 0px 5px 5px;
-webkit-line-clamp: 4; /* Число отображаемых строк */
display: -webkit-box; /* Включаем флексбоксы */
-webkit-box-orient: vertical; /* Вертикальная ориентация */
overflow: hidden;
}
</style>

			<div class="toast-container position-fixed m-2 bottom-0 end-0">
				<div class="toast show">
					<div class="toast-header">
						<div class="d-inline-flex justify-content-between w-100">
								<div class="d-flex align-items-center">
									<video class="rounded-circle" width="40" autoplay muted loop>
										  <source src="src/message/img/lawyer.mp4" type="video/mp4">
									</video>
								</div>
								<div class="d-flex align-items-center">
									<a role = "button" type="button" class="btn text-start w-100" data-bs-toggle="collapse" id="collapsebut"
								data-bs-target="#collapsetest" aria-expanded="false" aria-controls="collapsetest">Чат с юристом<i class="btn bi bi-list"></i> </a>
								</div>
								<div class="d-flex align-items-center d-md-none">
									<button type="button" class="btn btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
								</div>
						</div>
					</div>

					<div class="toast-body collapse m-1" id="collapsetest"
					style="background-image: url('src/message/img/whatsapp.jpg'); background-repeat: no-repeat, repeat; background-size: cover;">
						<div class="" style="min-height: 220px; max-height: 400px;">
							<div class="d-flex flex-row" id="message1">
								<div class="message-sent">
									Добрый день. Юрист на связи. Чем я могу помочь Вам?
								</div>
							</div>
							<div class="d-flex flex-row-reverse" id="message2">
							</div>
							<div class="d-flex flex-row" id="message3">
							</div>
							<div class="d-flex flex-row-reverse" id="message4">
							</div>
							<div class="d-flex flex-row" id="message5">
							</div>
						</div>
							<form class="input-group" id="messagebuttondiv">
								<textarea class="form-control" id="textmessage" name="message" aria-label="Ваше сообщение"></textarea>
								<button class="input-group-text" onclick="messagebutton()" id='messagesent' type='button'>отправить</button>
							</form>

					</div>

				</div>

			</div>


	  <!-- Скрипт онлайн консультации -->
		<script type="text/javascript">

		window.onload = function(){
				var button = document.getElementById('collapsebut');
				setTimeout(function(){
					button.click();
				},15000);
			};

		function printing3() {
				document.getElementById("message3").innerHTML = "<div class='message-sent'>печатает...</div>";
			}
		function printing5() {
				document.getElementById("message5").innerHTML = "<div class='message-sent'>печатает...</div>";
			}


		function messagebutton(){
			var message =  document.getElementById('textmessage').value;
			if (message !== ""){
				document.getElementById("message2").innerHTML =
				"<div class='message-recieve'>"+message+"</div>";
				document.getElementById("messagebuttondiv").innerHTML =
				"<textarea class='form-control' id='textmessage'></textarea><button class='input-group-text' onclick='messagebutton2()' type='button'>отправить</button>";
				setTimeout(printing3, 2000);
				function sayHi() {
					document.getElementById("message3").innerHTML =
					"<div class='message-sent'>Оставьте свой номер телефона для связи.</div>";
				}
				setTimeout(sayHi, 5000);
				}
				else{
					document.getElementById("message3").innerHTML = "<div class='message-sent'>Пожайлуйста, задайте вопрос</div>";
				}
			}

		function messagebutton2(){
			var message2 =  document.getElementById('textmessage').value;
			if (message2 !== ""){
				document.getElementById("message4").innerHTML = "<div class='message-recieve'>"+message2+"</div>";
				document.getElementById("messagebuttondiv").innerHTML =
				"<textarea class='form-control' id='message'></textarea><button name='messagesent' id='messagesent' class='input-group-text' type='button' disabled>отправить</button>";
				setTimeout(printing5, 1000);
				function sayHello() {
					document.getElementById("message5").innerHTML = "<div class='message-sent'>Спасибо. Я с Вами свяжусь, как только стану свободен.</div>";
				}
				setTimeout(sayHello, 5000);


				var message = document.getElementById("message2").innerHTML;

						$.ajax({
							type: 'POST',
							url: 'src/message/postform/mes.php',
							data: { mes: message, mes2: message2 }
						});
				}
				else{
					document.getElementById("message5").innerHTML = "<div class='message-sent'>Пожалуйста, укажите номер телефона</div>";
				}
			}
		</script>
