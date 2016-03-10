<?php
	function showMessage($message, $count=1){
		for ($i = 1 ; $i <= $count ; $i++){
				echo "<h{$i}>$message</h{$i}>";
			}
	}