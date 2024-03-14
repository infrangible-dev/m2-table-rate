<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Controller\Adminhtml\TableRate;

use Infrangible\TableRate\Traits\TableRate;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Add
    extends \Infrangible\BackendWidget\Controller\Backend\Object\Add
{
    use TableRate;
}