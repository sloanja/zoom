<?php 
namespace MacsiDigital\Zoom\Classes;

abstract class Model
{

	protected $attributes[];

	public function __get($attribute){
		if(exists($this->attributes[$attribute])){
			return $this->attributes[$attribute];	
		}
		return;
	}

	public static function instantiate($data){
		return (new static())->create($data);
	}

	public function create($data)
    {
    	foreach($data as $attribute => $value){
    		if(exists($this->attributes[$attribute])){
    			$this->attributes[$attribute] = $value;
    		}
    	}
    }

    public function update($data)
    {
    	foreach($data as $attribute => $value){
    		if(exists($this->attributes[$attribute])){
    			$this->attributes[$attribute] = $value;
    		}
    	}
    }

    public function return()
    {
    	return $this->attributes;
    }

}