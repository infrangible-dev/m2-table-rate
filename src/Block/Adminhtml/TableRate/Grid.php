<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Block\Adminhtml\TableRate;

use Infrangible\TableRate\Model\Config\Source\TableRate;
use Magento\Framework\Data\Collection\AbstractDb;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Grid extends \Infrangible\BackendWidget\Block\Grid
{
    protected function prepareCollection(AbstractDb $collection): void
    {
    }

    /**
     * @throws \Exception
     */
    protected function prepareFields(): void
    {
        $this->addWebsiteNameColumn('website_id');
        $this->addCountryColumn(
            'dest_country_id',
            __('Country')->render()
        );
        $this->addRegionAnyColumn(
            'dest_region_id',
            __('Region')->render()
        );
        $this->addTextColumn(
            'dest_zip',
            __('Postcode')->render()
        );
        $this->addOptionsClassColumn(
            'condition_name',
            __('Condition')->render(),
            TableRate::class
        );
        $this->addNumberColumn(
            'condition_value',
            __('Value')->render()
        );
        $this->addNumberColumn(
            'price',
            __('Price')->render()
        );
        $this->addNumberColumn(
            'cost',
            __('Cost')->render()
        );
    }

    protected function getHiddenFieldNames(): array
    {
        return [];
    }
}