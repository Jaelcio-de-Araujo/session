<?php
 session_start();
// cria variáveis de sessão e as inicializa com os dados do formulário:
 @$_SESSION['nome'] = $_POST['frm_nome'];
 @$_SESSION['sobrenome'] = $_POST['frm_sobrenome'];
?>
<form name="form1" action="index.php" method="POST">
 Digite seu nome:
 <input type="text" name="frm_nome"><br>
 Digite seu sobrenome:
 <input type="text" name="frm_sobrenome"><br>
 <input type="submit" value="Enviar">
</form>
<br>

<?php

 echo $_SESSION['nome']." ";
 echo $_SESSION['sobrenome'];
?>