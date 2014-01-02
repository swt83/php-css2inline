<?php

namespace Travis;

class Inline {

    /**
     * Return HTML w/ inline CSS.
     *
     * @param   string  $html
     * @return  string
     */
    public static function run($html)
    {
        // build object
        $clean = new \TijsVerkoyen\CssToInlineStyles\CSSToInlineStyles();

        // set html
        $clean->setHTML($html);

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