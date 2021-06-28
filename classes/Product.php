<?php
class Product
{
    protected $path;
    protected $name;
    protected $desc;
    protected $price;
    protected $discount;
    public function __construct(string $path, string $name, string $desc, float $price, int $discount = null)
    {
        $this->path = $path;
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getPath() 
    {   
        $checkImage = getimagesize($this->path);

        if(!$checkImage){
            return $this->path = 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Immagine_non_disponibile.JPG';
        }else{
            return $this->path;
        }   
    }   

    public function getName(){return $this->name;}
    public function getDesc(){return $this->desc;}
    public function getPrice(){return $this->price;}
    

 
}