<html>
<head>
<style>
h2
{
color:#1E90FF;
}
</style>
</head>
<?php


function show($mode,$title,$content,$href){
	if($mode=='1'){
	for($i=0;$i<count($title[1]);$i++){
		echo "<h2>".$title[1][$i]."</h2>";
		echo $content[1][$i]." ";	
		echo "<a href=".$href[$i][1]." target=\"_blank\">閱讀更多</a>"."<br><br>";	
		}
				}
				
	else if($mode=='2'){
	for($i=0;$i<count($title[1]);$i++){
		echo "<h2>".$title[1][$i]."</h2>";
		echo $content[1][$i]." ";	
		echo "<a href=".$href[1][$i]." target=\"_blank\">閱讀更多</a>"."<br><br>";
		}
				}			
}


?>

</html>