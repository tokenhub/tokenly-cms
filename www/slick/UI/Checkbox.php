<?php
class Slick_UI_Checkbox extends Slick_UI_FormObject
{
	public $isBool = 0;
	
	function __construct($name, $id = '')
	{
		parent::__construct();
		$this->name = $name;
		if(trim($id) == ''){
			$id = $name;
		}
		$this->id = $id;
		
	}
	
	public function display($elemWrap = '')
	{

		$classText = '';
		if(count($this->classes) > 0){
			$classText = 'class="'.$this->getClassesText().'"';
		}
		
		$idText = '';
		if($this->id != ''){
			$idText = 'id="'.$this->id.'"';
		}
		
		$attributeText = $this->getAttributeText();
		
		$output = $this->label.'<input type="checkbox" name="'.$this->name.'" '.$idText.' '.$classText.' '.$attributeText.' value="'.$this->value.'" />';
		
		if($elemWrap != ''){
			$misc = new Slick_UI_Misc;
			$output = $misc->wrap($elemWrap, $output);
		}
		
		return $output;
	}
	
	public function setBool($bool)
	{
		$this->isBool = $bool;
	}
	
	public function setChecked($i)
	{
		if($i == 1){
			$this->addAttribute('checked');
		}
		else{
			$this->removeAttribute('checked');
		}
	}
	
	
}

?>
