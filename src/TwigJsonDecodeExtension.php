<?php

namespace Bolt\Extension\ZinitSolutionsGmbH\TwigJsonDecode;

use Bolt\Asset\File\JavaScript;
use Bolt\Extension\SimpleExtension;

/**
 * TwigJsonDecodeExtension extension class.
 */
class TwigJsonDecodeExtension extends SimpleExtension
{

    /**
     * Pretty extension name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return 'Twig json_decode filter';
    }

    /**
     * @return array
     */
    protected function registerTwigFilters()
    {
        return ['json_decode' => ['jsonDecode', ['is_safe' => ['html']]]];
    }
    
    /**
     * @param string $string
     * @return string
     */
    function jsonDecode($string)
    {
        return json_decode($string);
    }
}
