<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll, Christoph Ehscheidt
 *  All rights reserved
 *
 *  For further information: http://extlist.punkt.de <extlist@punkt.de>
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
 * Testcase for column config collection factory
 * 
 * @package Tests
 * @subpackage pt_extlist
 * @author Christoph Ehscheidt
 * @see Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfigCollectionFactory
 */
class Tx_PtExtlist_Tests_Domain_Configuration_Columns_ColumnConfigCollectionFactoryTest extends Tx_PtExtlist_Tests_BaseTestcase
{
    /**
     * @var Tx_PtExtlist_Tests_Domain_Configuration_ConfigurationBuilderMock
     */
    protected $configurationBuilderMock;

    
    
    public function setup()
    {
        $this->configurationBuilderMock = Tx_PtExtlist_Tests_Domain_Configuration_ConfigurationBuilderMock::getInstance();
    }
    
    
    
    public function testSetup()
    {
        $this->assertTrue(class_exists('Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfigCollectionFactory'));
    }
    
    
    
    public function testGetColumnConfigCollection()
    {
        $columnConfigCollection = Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfigCollectionFactory::getInstance($this->configurationBuilderMock);
        $this->assertTrue(is_a($columnConfigCollection, 'Tx_PtExtbase_Collection_ObjectCollection'));
        
        
        $columnConfig1 = $columnConfigCollection->getColumnConfigById(10);
        $this->assertEquals($columnConfig1->getColumnIdentifier(), 'column1');
    }
}
