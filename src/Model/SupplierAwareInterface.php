<?php

/*
 * This file is part of the BabDevSyliusSupplierPlugin package.
 *
 * (c) Michael Babker
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BabDev\SyliusSupplierPlugin\Model;

interface SupplierAwareInterface
{
    /**
     * @return SupplierInterface
     */
    public function getSupplier(): ?SupplierInterface;

    /**
     * @param SupplierInterface|null $supplier
     */
    public function setSupplier(?SupplierInterface $supplier): void;
}
