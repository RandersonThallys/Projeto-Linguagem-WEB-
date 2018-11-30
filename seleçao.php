<?php
//seleção
$seleção =  mysql_query('SELECT * FROM projetoweb');

while($linha = mysql_fetch_array($seleção)) ;


   echo $linha ['nome'], '<br />';
   echo $linha ['usuario'],'<br />;
   echo $linha ['senha'], '<br  />;
?>