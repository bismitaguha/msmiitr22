<?php
echo "hrell";
for($i=1;$i<=7;$i++)
{
	for($j=1;$j<=9;$j++){
	   $file=fopen("./timetable/s3/".$i.$j.".txt","w");
	   fwrite($file, "No-Class");
	   fclose($file);
	}
}
?>