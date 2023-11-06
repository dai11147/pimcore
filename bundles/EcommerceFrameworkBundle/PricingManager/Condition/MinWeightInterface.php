<?php


namespace App\Ecommerce\PricingManager\Condition;

use Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\ConditionInterface;

interface MinWeightAmountInterface extends ConditionInterface
{
    /**
     * @param float $limit
     *
     * @return MinWeightAmountInterface
     */
    public function setLimit(float $limit): MinWeightAmountInterface;

    /**
     * @return float|null
     */
    public function getLimit() : float | null;
}
