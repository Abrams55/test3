<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>menu012</title>

</head>

<body>

<?php
$_POST['key'] = 0;

$file = "locc_catalog.php";
class skaner {
	public $skan_dir = array();
	public $skan_file = array();
	public $file_res = 0;

	public function __construct($dir, $file) {
		$result = scandir($dir);
		foreach ($result as $value) {
			if(filetype($value) == 'dir') {
				$this->skan_dir[] = $value;
			} else {
				$this->skan_file[] = $value;
			}
		}
		$this->audit_dir();
		$this->audit_file($file);
	}
	public function audit_dir() {
		foreach ($this->skan_dir as $value) {
			if($value == '.' OR $value == '..') {
				continue;
			} else {
				$this->skan_dir = $value;
			}
		}
		return $this->skan_dir;
	}
	public function audit_file($file) {
		$this->file_res = $file;
		foreach ($this->skan_file as $value) {
			if($value == $file) {
				$this->file_res = 1;
				echo "Ваш файл знайдено - ".$file." знайденно в корневій деректорії.";
				break;
			} else {
				$this->file_res = 0;
			}
		}
		return $this->file_res;
	}

}

class dir {
	public $directory = __DIR__;
	public $new_dir;

	public function __construct($par) {
		$sleh = ' \ ';
		$sleh = trim($sleh);
		if($par == 0) {
			$this->directory;
		} else {
			$this->new_dir = $this->directory .= $sleh .= $par;
		}
		echo $_POST['key'] = $_POST['key'] + 1;
	}
	public function directory_met() {
		return $this->directory;
	}
	public function new_dir_met() {
		return $this->new_dir;
	}
}

class valuation_skan {
	protected $dir;
	public $result_dir = array();
	public $obj_dir;
	public $obj_skaner;
	public $iter;


	public function __construct($file) {
		$this->obj_dir = new dir($par);

		if($this->iter < 1) {
			foreach ($this->result_dir as $value) {
				$this->obj_skaner = new skaner($this->obj_dir->directory_met(), $file);
				$this->result_dir = $this->obj_skaner->audit_dir();
			}
			$this->iter = $this->iter + 1;
		} else {
			$this->obj_skaner = new skaner($this->obj_dir->new_dir_met(), $file);
			$this->result_dir = $this->obj_skaner->audit_dir();
		}

	}

}



class test_1 {
	public $var_1;
	public $lic;

	public function testt_1() {
		echo 'test_1';
		echo '<br>';
	}
}

class test_2 {
	public $var_2;

	public function testt_2() {
		$this->var_2 = new test_1();
		$this->var_2->testt_1();
		echo 'test_2';
		echo '<br>';
	}	
}

class test_3 {
	public $var_3;

	public function testt_3() {
		$this->var_3 = new test_2();
		$this->var_3->testt_2();
		echo 'test_3';
		echo '<br>';
	}
}


class test_4 extends test_1 {
	public $var;

	public function testt_4() {
		$this->var = new test_3();
		$this->var->testt_3();
	}

}


class conctructor {
	public $varr = "konss";

	public function __construct() {
		echo $this->varr;
	}
	public function no_cons() {
		echo "no_kons";
	}
}

$obj_conctructor = new conctructor();
echo '<br>';
$obj_conctructor->no_cons();
echo '<br>';
$obj_noconctructor = new conctructor();
$obj_noconctructor->no_cons();

?>


</body>
</html>