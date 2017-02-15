<?php

namespace Travis;

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class Inline
{
    /**
     * Return HTML w/ inline CSS.
     *
     * @param   string  $html
     * @param   string  $css
     * @return  string
     */
    public static function run($html, $css = null)
    {
        // build object
        $clean = new CssToInlineStyles();

        // set html
        return $clean->convert($html, $css);
    }
}