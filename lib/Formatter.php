<?php namespace wpapi;

interface Formattable{

	public function setFormatter(Formatter $formatter);
	public function getFormattedData();
	public function toArray();//propel object interface dependency added as an interface method 
}

interface Formatter{

	public function setFormattable(Formattable $object);
	public function getFormattedData();


}



class JSONFormatter implements Formatter{

	private $object;

	public function setFormattable(Formattable $object){
		$this->object=$object;
	}

	public function getFormattedData(){                
        $var = $this->object->toArray();        
        foreach($var as &$value){
           if(is_object($value)){
              $value = $value->getFormattedData();
           }
        }        
        return $var;
     }

}

