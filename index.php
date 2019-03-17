<?php
include("header.php");
include("student.php");

class checkStatic{
	static $age =20;
	
	
 function showage(){
		echo "my age is ".self::$age;
	}
	
	
	public static function details(){
		
		echo "my name is md rasel.";
		echo "<br>";
		
		
	}
}


checkStatic::details();
//$obj=new checkStatic;

//$obj->showage();
















//constant
die;
//
class testConstant{
	
	
	const name="alamin";
	
	function showname(){
		echo "my name is md. ".testConstant::name;
	}
}


$obj = new testConstant;
$obj->age = 20;
$obj->showname();

die;
echo phpinfo();


die;

trait coderone{
   public function firstCoder(){
	 echo "my first coding is php";
   }
}

trait codertwo{
   public function secondCoder(){
	 echo "my first coding is php";
   }
}

trait coderOneTwo{
    use coderone;
	use codertwo;
}

class showMyCoder{
	use coderOneTwo;
}


$shoC=new showMyCoder;
$shoC->firstCoder();

die;
spl_autoload_register(function($class){
	include 'class/'.$class.'.php';
});

$phpobj= new php;
//$phpobj->framework();
 $value=new angular($phpobj);

 $value->angularobj->framework();
 $value->angularobj->cms();
 
 
die;
$ruby= new ruby;
$arrayList=array(
array('first value multiplication is  : ',10,10),
array('second value multiplication is : ',20,20),
);
$ruby->arrayTprint($arrayList);




die;
echo " The result is ".$ruby->getValue(5,6)->calculate();




die;
//class auto load 

spl_autoload_register(function($class){
	include 'class/'.$class.'.php';
});
/*
function __autoload($class){
include 'class/'.$class.'.php';	
	
}
*/


$ruby=new ruby;
echo "<br>";
$php=new php;
echo "<br>";
$angular=new angular;







die;

//class and method check;
if(class_exists('student')){
	
	$studentInfo=new student;
	if(method_exists($studentInfo,'describe')){
		
		$studentInfo->describe(); 
	}else{
		
		echo "sorry this method not available in our class";
	}
	
	//echo "yes this class is available in our project.";
	
}else{
	echo "sorry this class is not available";
}





die;
class personalInfo{
	public $name;
	
	public function profile($name){
		$this->name = $name;
		echo "my name is {$this->name} and age is ";
	}
	
	
	public function __get($pm){
	 echo $pm. " does not exits";
	}
	
	public function __set($pm,$value){
		echo "we set is $pm->$value";
		
	}
	
	
	public function __call($function1,$value){
		
		echo "we set undefined function ".$function1;
		echo "<br>";
		echo "and argument is ";
		echo "<pre>";
		print_r($value);
	}
	
}


$person= new personalInfo();

$person->hasan; 
echo "<br>";
$person->age=10;
echo "<br>";
$person->notExitsMethod(10,33,34);







die;
 class user{
	
	public $name="alamin";
	public $age="15";
	
	public function userInfo(){
		
		echo "Im Md $this->name and my age is $this->age";
	}
	
}

class admin1 extends user{
	
	public $role="administrator";
	
	public function adminInfo(){
		
		return parent::userInfo(). "and user role ".$this->role;
	}
}



$userinfo=new user;
$userinfo->userinfo();
echo "<br>";
$admin= new admin1();
$admin->adminInfo();







die;
 interface school{
	 public function mySchool();
 }

 interface collage{
	 public function myCollage();
 }


 class myinfo implements school,collage {
	 
	 function __construct(){
		 
		 $this->mySchool();
		 $this->myCollage();
		 $this->myUniversity();
	 }
	 
	 public function mySchool(){
		 echo "my school name is comilla.<br>";
	 }
	 public function myCollage(){
		 echo "my collage name is south asia.<br>";
	 }
	 
	 public function myUniversity(){
		 echo "my university is dhaka versity";
	 }
 }
 
 
 $myinfo=new myinfo;
 $myinwfo=new school;

die;
	//constant
	//static methos and propertise
	//final
	class person{
		public $name;
		public $email;
		public $address;
		const id="0013";
		static $university="south";
		static $city;
		
		 function __construct(){
			
			
		}
		
		
		public function personDetails(){
			echo "Hello im {$this->name} my email {$this->email} and my address is {$this->address}";
			echo "<br>";
			echo person::id;
			echo "<br>";
			echo self::$university;
			
		}
		
		
		public static function city(){
			
			echo "my city is".self::$city;
		}
		
	}
	
	
	
	class admin extends person{
		
		public $level="administrator";
		
		
		public function personDetails(){
			echo "Hello im {$this->name} my email {$this->email} and my address is {$this->address}";
			echo "<br>";
			echo person::id;
			echo "<br>";
			echo self::$university;
			echo "<br>";
			echo $this->level;
		}
	}
	
	//$personinfo= new person("alamin","toalaminbd@gmail.com","mirpur,dhaka");
	$personinfo= new person;
	
    $personinfo->name ="alamin";
	$personinfo->email = "toalaminbd@gmail.com";
	$personinfo->address ="mirpur";
	//person::$university = "south asia";
	person::$city="Laksham";
	//$personinfo->personDetails();
	//person::city();
	$personinfo->personDetails();
	
	echo "<br>";
	$admin=new admin;
	$admin->name="jamal";
	$admin->email="jamal@gmail.com";
	$admin->address="syleth";
	$admin->personDetails();
	
	if($admin instanceof person){
		echo "Yes instance";
	}
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
include("footer.php");
?>
  