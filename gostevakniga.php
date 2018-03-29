
<form method="post">
	<input type="text" name="name" id="name"><br>
	<textarea name="mesag" id="mesag"></textarea><br>
	<input type="submit" name="">
</form>


<?php 
	
	if(isset($_POST['name'])) {
		intoFile($_POST['name'], $_POST['mesag']);
	}

	function intoFile($name, $mesag) {
		$write ="\n$name\n$mesag\n***";
		file_put_contents('www.txt', $write, FILE_APPEND | LOCK_EX);
	}

riedfile();
	function riedfile() {
		$data = file('www.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($data as $value) {
			if($value != '***') {
				echo $value."<br>";
			} else {
				echo "******<br><br>";
			}
		}
	}
 ?>