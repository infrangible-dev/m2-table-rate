<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Block\Adminhtml\TableRate;

use Infrangible\TableRate\Model\Config\Source\TableRate;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Form
    extends \Infrangible\BackendWidget\Block\Form
{
    /**
     * @throws \Exception
     */
    protected function prepareFields(\Magento\Framework\Data\Form $form)
    {
        $generalFieldSet = $form->addFieldset('general', ['legend' => __('General')]);

        $this->addWebsiteSelectField($generalFieldSet, 'website_id');
        $this->addCountryField($generalFieldSet, 'dest_country_id', __('Country')->render());
        $this->addRegionAnyField($generalFieldSet, 'dest_region_id', __('Region')->render());
        $this->addTextField($generalFieldSet, 'dest_zip', __('Postcode')->render());
        $this->addOptionsClassField(
            $generalFieldSet,
            'condition_name',
            __('Condition')->render(),
            TableRate::class,
            'package_weight'
        );
        $this->addTextField($generalFieldSet, 'condition_value', __('Value')->render());
        $this->addTextField($generalFieldSet, 'price', __('Price')->render());
        $this->addTextField($generalFieldSet, 'cost', __('Cost')->render());
    }
}