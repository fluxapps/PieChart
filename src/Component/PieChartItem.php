<?php

namespace srag\PieChart\Component;

use ILIAS\Data\Color;

/**
 * Interface PieChartItem
 *
 * @package srag\PieChart\Component
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface PieChartItem
{

    /**
     * Get the title of a pre-section
     *
     * @return string
     */
    public function getName() : string;


    /**
     * Get the value of a pre-section
     *
     * @return float
     */
    public function getValue() : float;


    /**
     * Get the color of a pre-section
     *
     * @return Color
     */
    public function getColor() : Color;


    /**
     * Get the text color of a pre-section. The default is black.
     *
     * @return Color
     */
    public function getTextColor() : Color;
}
