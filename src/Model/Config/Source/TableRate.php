<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Model\Config\Source;

use Magento\Framework\Exception\LocalizedException;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class TableRate
    extends \Magento\OfflineShipping\Model\Config\Source\Tablerate
{
    /**
     * @throws LocalizedException
     */
    public function toOptions(): array
    {
        $options = [];

        foreach ($this->_carrierTablerate->getCode('condition_name') as $key => $value) {
            $options[$key] = $value;
        }

        return $options;
    }
}
