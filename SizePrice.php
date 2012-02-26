<?php

class SizePrice {
	/**
	 * Holds the size
	 * @var string
	 */
	private $size;
	
	/**
	 * Holds the price
	 * @var float
	 */
	private $price;
	
	public function __construct ($size, $price) {
		$this->size = $size;
		$this->price = $price;
	}
	
	/**
	 * Returns the size
	 * @return string
	 */
	public function getSize () {
		return $this->size;
	}
	
	/**
	 * Returns the price
	 * @return float
	 */
	public function getPrice () {
		return $this->price;
	}
}