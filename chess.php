<html>
<body>
<table width="270" cellpadding="20" border="1">'
<?php
for($i=1;$i<=8;$i++)
{
echo "<tr>";
for($j=1;$j<=8;$j++)
{
$s=$i+$j;
if($s%2==0)
{
echo "<td bgcolor='black'></td>";
}
else
{
echo "<td bgcolor='white'></td>";
}
}
echo "</tr>";
}?>
</table>
</body>
</html>