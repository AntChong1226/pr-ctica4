#!php

<?php
function make_me_a_controller(array $args, string $file_content):void{
	if(isset($args[1])){
		$file = fopen("./$args[1].php","w");
		if($file){
      echo $args[1].PHP_EOL;
      echo $file_content;
			fwrite($file,$args[1]);
			fclose($file);
			echo "file created";
		}
		else
			echo "Opening file failed.";
	}else
		echo "Dude I need a name for the file";
}
$text = <<<HTML
<?php
	include "ejemplo/controllers.php";

	//set your custom function here :D
	class /NAME/ extends Controller{
		function main():void{}
		function failure():string{}
	}
?>
HTML;
make_me_a_controller($argv,$text);
?>
