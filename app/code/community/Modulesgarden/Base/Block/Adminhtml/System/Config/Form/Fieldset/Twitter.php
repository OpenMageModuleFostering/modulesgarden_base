<?php

/* * ********************************************************************
 * Customization Services by ModulesGarden.com
 * Copyright (c) ModulesGarden, INBS Group Brand, All Rights Reserved 
 * (2014-11-12, 14:00:46)
 * 
 *
 *  CREATED BY MODULESGARDEN       ->        http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *
 *
 *
 *
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.
 *
 *
 * ******************************************************************** */

/**
 * @author Grzegorz Draganik <grzegorz@modulesgarden.com>
 */
class Modulesgarden_Base_Block_Adminhtml_System_Config_Form_Fieldset_Twitter extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface {

    protected $_template = 'modulesgardenbase/system/config/form/fieldset/twitter.phtml';

    public function render(Varien_Data_Form_Element_Abstract $element) {
        return $this->toHtml();
    }
    
    public function getTwitterUrl() {
        return (string) Mage::getConfig()->getNode('default/modulesgarden_base/twitter/url');
    }
    
    public function getTwitterId() {
        return (string) Mage::getConfig()->getNode('default/modulesgarden_base/twitter/id');
    }
    
    public function getTwitterLimit() {
        return (string) Mage::getConfig()->getNode('default/modulesgarden_base/twitter/limit');
    }

}
