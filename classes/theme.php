<?php

namespace ThemeExample;

class Theme
{

    /**
     * Configure the CSS of the Theme
     * 
     * @return String $before_after   Wether the new field must be append before or after the one defined in the first parameter
     */
    public function getCss()
    {                   
        return array(
            'path' => 'assets/main.css',
            'version' => 1,
        );
    }
    

}