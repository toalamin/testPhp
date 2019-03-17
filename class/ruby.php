<?php 
class ruby{
	public $a;
	public $b;
	public $result;
	
	
	public function getValue($a,$b){
		$this->a=$a;
		$this->b=$b;
		return $this;
	}
	
	
	public function calculate(){
		$this->result = $this->a * $this->b;
		return $this->result;
	}
	
	public function arrayTprint(array $arrayList){
		echo "<pre>";
		print_r($arrayList);
		foreach($arrayList as $value){
			echo $value[0].$value[1]*$value[2]."<br>";}
		
	}
	
	
	
}


?>