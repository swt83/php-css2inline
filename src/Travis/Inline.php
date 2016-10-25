<?php

namespace Travis;

class Inline {

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
        $clean = new \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles();

        // set html
        $clean->setHTML($html);

        // if provided, set css
        if ($css) $clean->setCSS($css);

        // css included w/ html
        $clean->setUseInlineStylesBlock(true);

        // convert to html
        $html = $clean->convert(false); // false for HTML mode (not XHTML, works better)

        // return
        return $html;
    }

    /**
     * Legacy alias method.
     *
     * @param   string  $html
     * @return  string
     */
    public static function convert($html)
    {
        // legacy alias
        return static::run($html);
    }

}
