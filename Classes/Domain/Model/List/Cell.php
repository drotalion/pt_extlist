<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <lienert@punkt.de>, Michael Knoll <knoll@punkt.de>,
*  Christoph Ehscheidt <ehscheidt@punkt.de>
*  All rights reserved
*
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Class implements a cell of a row of list data
 * 
 * @package Typo3
 * @subpackage pt_extlist
 * @author Michael Knoll <knoll@punkt.de>
 * @author Christoph Ehscheidt <ehscheidt@punkt.de>
 */
class Tx_PtExtlist_Domain_Model_List_Cell {

	/**
	 * Holds value of cell
	 *
	 * @var string
	 */
	protected $value;
	
	
	
	/**
	 * TODO add some comment!
	 *
	 * @var string
	 */
	protected $specialValues;
	
	
	
	/**
	 * TODO add some comment!
	 *
	 * @var int
	 */
	protected $rowIndex;
	
	
	
	/**
	 * TODO add some comment
	 *
	 * @var int
	 */
	protected $columnIndex;
	
	
	
	/**
	 * Constructor for cell object
	 *
	 * @param string $value
	 */
	public function __construct($value) {
		$this->value = $value;
	}
	
	
	
	/**
	 * Setter for cell value
	 *
	 * @param string $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}
	
	
	
	/**
	 * Getter for cell value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}
	
	
	
	/**
	 * TODO add comment!
	 *
	 * @param string $specialValues
	 */
	public function setSpecialValues($specialValues) {
		$this->specialValues = $specialValues;
	}
	
	
	
	/**
	 * TODO add comment!
	 *
	 * @return string
	 */
	public function getSpecialValues() {
		return $this->specialValues;
	}	
	
	
	
	/**
	 * Setter for row index
	 *
	 * @param int $rowIndex
	 */
	public function setRowIndex($rowIndex) {
		$this->rowIndex = $rowIndex;
	}
	
	
	
	/**
	 * Getter for row index
	 *
	 * @return int
	 */
	public function getRowIndex() {
		return $this->rowIndex;
	}
	
	
	
	/**
	 * Setter for column index
	 *
	 * @param int $columnIndex
	 */
	public function setColumnIndex($columnIndex) {
		$this->columnIndex = $columnIndex;
	}
	
	
	
	/**
	 * Getter for column index
	 *
	 * @return int
	 */
	public function getColumnIndex() {
		return $this->columnIndex;
	}
	
	
	
	/**
	 * Returns object value as string
	 *
	 * @return string
	 */
	public function __toString() {
		return ($this->value == '' ? '' : $this->value);
	}
	
}

?>