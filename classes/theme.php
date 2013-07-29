<?php

namespace ThemeExample;

class Theme
{

    /**
     * Configure the CSS of the Theme.
     * 
     * @return Array
     */
    public function getCss()
    {                   
        return array(
            'path' => 'assets/main.css',
            'version' => 1,
        );
    }
    

}