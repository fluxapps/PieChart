<?php

namespace srag\PieChart\Implementation;

use srag\PieChart\Component\Factory as FactoryInterface;
use srag\PieChart\Component\PieChart as PieChartInterface;

/**
 * Class Factory
 *
 * @package srag\PieChart\Implementation
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Factory implements FactoryInterface
{

    /**
     * @inheritdoc
     */
    public function pieChart(array $pieChartItems) : PieChartInterface
    {
        return new PieChart($pieChartItems);
    }
}
