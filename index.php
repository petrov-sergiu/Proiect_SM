<html>
<head>
<?php

if (isset($_POST['start'])) //Start
{
exec('sudo python /var/www/proiectSM.py');
}

if (isset($_POST['stop']))  //  Stop
{
exec('sudo python /var/www/led_On.py');
exec('sudo pkill -f /var/www/proiectSM.py');
}
?>

  <title>Alarma </title>
</head>
<body background="FX3.png">
<center>
<table witdh="400" border="1" bgcolor="silver">
<td>

<Font color='blue'><b>
<center>
Universitatea Tehnica 'Gh.Asachi' Iasi - Fac. Automatica si Calculatoare<br>
<br>
</Font><b>
<center> <h1> <Font color='navy'>
Alarma<br>

</h1></font>
<center>

<form method="post">
  <table
 style="width: 50%; text-align: left; margin-left: auto; margin-right: auto;"
 border="1" cellpadding="2" cellspacing="2">
      <tr>
        <td style="text-align: center;"><button name="start"><font face="impact" color="green">Start</button></td></font>
        <td style="text-align: center;"><button name="stop"><font face="impact" color="red">Stop </button></td> </font>
      </tr></font>
 </table>

</form>
<font color="navy">
<br>
&copy 2021 Fac. Automatica si Calculatoare

</td>
</table>

</body>
</html>
