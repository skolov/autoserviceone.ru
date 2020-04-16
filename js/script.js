jQuery(document).ready(function($) {
	$('.menu-mob-btn').click(function() {
		$('.menu-mob').toggleClass("responsivemenu");
	});

	$('.btn-ok').click(function() {
		$arg = $(this).attr("data-id");
		$date = $(".cdate-input[data-id="+$arg+"]").val();
		$time = $(".ctime-input[data-id="+$arg+"]").val();

		$.post("/scripts/add.php", { date: $date, time: $time, id: $arg})
		.done(function (data) {
			location.reload();
		});
	});

	$('.btn-del').click(function() {
		$arg = $(this).attr("data-id");

		$.post( "/scripts/delete.php", {id: $arg})
		.done( function( data ) {
			location.reload();
		});
	});


	/*Валидация форм*/
	var arr = ["name", "email", "phone", "problem"];
	var $err = {
		"name" : false,
		"email" : false,
		"phone" : false,
		"problem" : false
	};

	function blockBtn($arg) {
		if ($arg) {
			$("button").attr('disabled', true);			
		}else{
			if(checkMis()) {
				$("button").attr('disabled', false);	
			}
		}
	}

	function checkIn($type, $content, $elem) {

		if($type == "name"){
			var regExp = /^[a-zA-Zа-яА-ЯЁ0-9\s]{3,100}$/;
			if(!regExp.test($content))
				addErr("wrongName", $elem)
			else
				delErr("name", $elem);
		}

		if($type == "email"){
			var regExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (!regExp.test($content)) 
				addErr("wrongEmail", $elem)
			else
				delErr("email", $elem);
		}

		if ($type == "phone") {
			var regExp = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,17}$/;
			if (!regExp.test($content)) 
				addErr("wrongPhone", $elem)
			else
				delErr("phone", $elem);
		}

		if ($type == "problem") {
			var regExp = /^[a-zA-Zа-яА-ЯЁё0-9!\-'/:();.,*_+=\s]{5,2000}$/;
			if (!regExp.test($content)) 
				addErr("wrongProblem", $elem)
			else
				delErr("problem", $elem);
		}
		
	}

	function checkLen(event) {
		arr.forEach(element => {	
			var text = $('.take[data-type="'+element+'"]')
			if(text.is(".take")){
				text = text.val();
				if(text.length == 0){
					event.preventDefault();
					if(!$("p").is(".error")) $("button").after('<p class="error">Заполните все обязательные поля!</p>');
				}
			}
		});
		if($("p").is(".error")) 
			return false;
		else
			return true;
	}

	function checkMis() {
		if ($err["name"] == true) return; 
		if ($err["email"] == true) return;
		if ($err["phone"] == true) return;
		if ($err["problem"] == true) return;
		return true;
	}

	function addErr($type, $elem) {
		$(document).ready(function () {
			var elemErr = $elem.next(".error");
			if ($type == "wrongName" && !elemErr.is("span")) {
				$elem.after('<span class="error">Некорректное имя!</span>');
				$err['name'] = true;
			}
			if ($type == "wrongEmail" && !elemErr.is("span")) {
				$elem.after('<span class="error">Некорректный e-mail!</span>');
				$err['email'] = true;
			}
			if ($type == "wrongPhone" && !elemErr.is("span")) {
				$elem.after('<span class="error">Некорректный номер телефона!</span>');
				$err['phone'] = true;
			}
			if ($type == "wrongProblem" && !elemErr.is("span")) {
				$elem.after('<span class="error">Некорректное описание!</span>');
				$err['problem'] = true;
			}
			blockBtn(true);
		})
	}

	function delErr($type, $elem) {
		$(document).ready(function () {
			var elemErr = $elem.next(".error");
			$(elemErr).remove();
			$err[$type] = false;
			blockBtn(false);
		})
	}


	$('.take').bind("keyup", function() {
		$arg = $(this).attr("data-type");
		$content = $(this).val();
		$elem = $(this);

		if($arg == "name")	checkIn("name", $content, $elem);
		if($arg == "phone")	checkIn("phone", $content, $elem);
		if($arg == "email")	checkIn("email", $content, $elem);
		if($arg == "problem") checkIn("problem", $content, $elem);
		
		if($("p").is(".error")) {
			$("p.error").remove();
		}
	})

	$("button").bind("click", function (event) {
		if(checkLen(event)){
			event.preventDefault();

			$name = $('.take[data-type="name"]').val();
			$email = $('.take[data-type="email"]').val();
			$phone = $('.take[data-type="phone"]').val();
			$street = $('.take[data-type="street"]').val();
			$problem = $('.take[data-type="problem"]').val();
			
			if (window.location.pathname == "/reviews/") {

				$.post("/scripts/newreview.php", 
				{ 
					name: $name, 
					problem: $problem
				})
				.done(function (data) {
					if(data){
						$('.bookmark-reg').children().fadeOut(0);
						$('.answer-suc').css("display", "block");
					}
				});

			}else{

				$.post("/scripts/newclient.php", 
				{ 
					name: $name, 
					email: $email, 
					phone: $phone,
					street: $street,
					problem: $problem
				})
				.done(function (data) {
					if(data){
						$('.bookmark-reg').children().fadeOut(0);
						$('.answer-suc').css("display", "block");
					}
				});

			}

			
		}
	})
});
