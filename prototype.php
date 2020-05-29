<?php

interface Product{

}

class Factory {

	private $product;

	public function __construct(Product $product){

		$this->product = $product;

	}

	public function getProduct(){

		return clone $this->product;
	}
}

class SomeProduct implements Product {

	public $name;

}

$prototypeFactory = new Factory(new SomeProduct());
$firstProduct = $prototypeFactory->getProduct();
$firstProduct->name = 'The first Product';

$secondProduct = $prototypeFactory->getProduct();
$secondProduct->name = 'Second Product';

print_r($firstProduct->name);
print_r($secondProduct->name);


?>