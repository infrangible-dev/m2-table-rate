<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class TableRate
    extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\TableRate::class);
    }
}