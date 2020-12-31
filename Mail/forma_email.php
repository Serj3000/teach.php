<?php
echo '<br>======================================================================<br>';
echo '<b>Пример №# - mail.php </b> Функция mail( ) <br>';
echo '('.__FILE__.')'.'<br>';
?>
<form action="/Mail/mail.php" method="POST">
<lable>Text e-mail</label>
<input type="text" name="text" value="hello">
<lable>Send</label>
<input type="submit" value="Send email">
</form>