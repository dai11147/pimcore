<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\DataObject\Import\ColumnConfig\Operator\Factory;

use Pimcore\DataObject\Import\ColumnConfig\Operator\LocaleSwitcher;
use Pimcore\DataObject\Import\ColumnConfig\Operator\OperatorInterface;
use Pimcore\Localization\LocaleServiceInterface;

/**
 * @deprecated since v6.9 and will be removed in Pimcore 10.
 */
class LocaleSwitcherFactory implements OperatorFactoryInterface
{
    /**
     * @var LocaleServiceInterface
     */
    private $localeService;

    public function __construct(LocaleServiceInterface $localeService)
    {
        $this->localeService = $localeService;
    }

    public function build(\stdClass $configElement, $context = null): OperatorInterface
    {
        return new LocaleSwitcher($this->localeService, $configElement, $context);
    }
}