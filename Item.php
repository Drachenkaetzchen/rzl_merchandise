<?php

class Item {
	/**
	 * The name of the item
	 * @var string
	 */
	private $name;
	
	/**
	 * The description of the item
	 * @var string
	 */
	private $description;
	
	/**
	 * The image filename excluding the path
	 * @var string
	 */
	private $image;
	
	/**
	 * An array of SizePrice objects which contain the sizes and prices
	 * @var array
	 */
	private $sizePrices = array();
	
	/**
	 * Sets the name of the item
	 * @param string $name
	 */
	public function setName ($name) {
		$this->name = $name;
	}
	
	/**
	 * Returns the name of the item
	 * 
	 * @return string The item name
	 */
	public function getName () {
		return $this->name;
	}
	
	/**
	 * Returns a "normalized" name for use in e.g. anchors.
	 */
	public function getNormalizedName () {
		return preg_replace('/[^a-zA-Z0-9\s]/', '', $this->name);
	}
	
	/**
	 * Sets the description of the item
	 * @param string $description
	 */
	public function setDescription ($description) {
		$this->description = $description;
	}
	
	/**
	 * Returns the description of the item
	 * @return string The description
	 */
	public function getDescription () {
		return $this->description;
	}
	
	/**
	 * Sets the image name
	 * @param string $image
	 */
	public function setImage ($image) {
		$this->image = $image;
	}
	
	/**
	 * Returns the image name
	 * @return string The image name
	 */
	public function getImage () {
		return $this->image;
	}
	
	/**
	 * Adds a SizePrice
	 * @param SizePrice $sizePrice
	 */
	public function addSizePrice (SizePrice $sizePrice) {
		$this->sizePrices[] = $sizePrice;
	}
	
	/**
	 * Returns all SizePrice objects
	 * @return array an array of SizePrice objects
	 */
	public function getSizePrices () {
		return $this->sizePrices;
	}
	
}
