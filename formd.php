<?php

$result=mail("ren.baka@mail.ru","Письмо с сайта","Пользователь заполнил форму в которой указал следующую информацию: \nИмя - $_POST[name_form]; \nemail - $_POST[name_email]; \nТел - $_POST[name_tell]; \nОставил сообщение: $_POST[text]");

if ($result) {
echo "<p>Ваша форма успешно передана на обработку</p>"	;
	}
else {
	
echo "<p>Ваша форма НЕ передана на обработку</p>"	;	
};
?>