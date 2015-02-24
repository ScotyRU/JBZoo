<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 *
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$height = array(
    'placeholder' => JText::_('JBZOO_PRICE_PROPERTIES_HEIGHT')
);
$length = array(
    'placeholder' => JText::_('JBZOO_PRICE_PROPERTIES_LENGTH')
);
$width  = array(
    'placeholder' => JText::_('JBZOO_PRICE_PROPERTIES_WIDTH')
); ?>

<div class="jbprice-properties">
    <?php echo
    $this->_jbhtml->text($this->getControlName('height'), $this->getValue('height'), $this->_jbhtml->buildAttrs($height))
    , $this->_jbhtml->text($this->getControlName('length'), $this->getValue('length'), $this->_jbhtml->buildAttrs($length))
    , $this->_jbhtml->text($this->getControlName('width'), $this->getValue('width'), $this->_jbhtml->buildAttrs($width)); ?>
</div>