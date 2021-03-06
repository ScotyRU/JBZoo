<?php
/**
 * JBZoo Application
 *
 * This file is part of the JBZoo CCK package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Application
 * @license    GPL-2.0
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/JBZoo
 * @author     Denis Smetannikov <denis@jbzoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Class JBCSVItemMetaTitle
 */
class JBCSVItemMetaTitle extends JBCSVItem
{
    /**
     * @return string
     */
    public function toCSV()
    {
        return $this->_item->getParams()->get('metadata.title', '');
    }

    /**
     * @param $value
     * @param null $position
     * @return Item|null
     */
    public function fromCSV($value, $position = null)
    {
        $this->_item->getParams()->set('metadata.title', $this->_getString($value));

        return $this->_item;
    }

}
