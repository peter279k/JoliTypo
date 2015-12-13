<?php

namespace JoliTypo\Fixer;

use JoliTypo\Fixer;
use JoliTypo\FixerInterface;
use JoliTypo\StateBag;

/**
 * Add nbsp between numeric and units.
 */
class Numeric implements FixerInterface
{
    public function fix($content, StateBag $state_bag = null)
    {
        // Support a wide range of currencies
        $content = preg_replace('@([\dº])( +)([º°%Ω฿₵¢₡$₫֏€ƒ₲₴₭£₤₺₦₨₱៛₹$₪৳₸₮₩¥\w]{1})@', '$1'.Fixer::NO_BREAK_SPACE.'$3', $content);

        return $content;
    }
}