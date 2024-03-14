<?php

declare(strict_types=1);

namespace Infrangible\TableRate\Traits;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
trait TableRate
{
    protected function getModuleKey(): string
    {
        return 'Infrangible_TableRate';
    }

    protected function getObjectName(): string
    {
        return 'TableRate';
    }

    protected function getObjectField(): ?string
    {
        return 'pk';
    }

    protected function getResourceKey(): string
    {
        return 'infrangible_tablerate';
    }

    protected function getMenuKey(): string
    {
        return 'infrangible_tablerate_manage';
    }

    protected function getTitle(): string
    {
        return __('Table Rates')->render();
    }

    protected function allowAdd(): bool
    {
        return true;
    }

    protected function allowEdit(): bool
    {
        return true;
    }

    protected function allowView(): bool
    {
        return false;
    }

    protected function allowDelete(): bool
    {
        return true;
    }

    protected function getObjectNotFoundMessage(): string
    {
        return __('Could not find the table rate with id: %s')->render();
    }
}
