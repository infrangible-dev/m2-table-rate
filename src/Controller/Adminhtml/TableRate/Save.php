<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Controller\Adminhtml\TableRate;

use Infrangible\TableRate\Traits\TableRate;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Save
    extends \Infrangible\BackendWidget\Controller\Backend\Object\Save
{
    use TableRate;

    protected function getObjectCreatedMessage(): string
    {
        return __('The table rate was created successfully.')->render();
    }

    protected function getObjectUpdatedMessage(): string
    {
        return __('The table rate was updated successfully.')->render();
    }
}
