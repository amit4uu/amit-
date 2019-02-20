<?php
echo "<table border=2>";

for($i=1;$i<16;$i++)
{
echo "<td>";
for($j=1;$j<11;$j++)
		{
			echo $i."*".$j." = ".($i*$j)."</br>";	
			  }
	
	
	echo "</br>";

echo "</td>";

}

echo "</table>";
?>
