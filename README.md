## Theme example for Mustached Robot

This is an example of a theme for Mustached Robot.

### Add this theme to your project

If you want to add this theme to your Mustached Robot, add the following to the composer.json file of your installation:

    "require": {
        ... // Dependencies of your current installation
        "mustached-robot/twitter": "dev-master"
    },
    "repositories": [
        // ... Repositories of your current installation
        {
            "type": "vcs",
            "url":  "git@github.com:MustachedRobot/themeExample.git"
        }

Then run composer update to get the project and install the CSS and the images into your project.

### CSS loading

When the theme is installed (when you run composer install or update), a new CSS is generated in the /public/assets/theme-example/ directory. Then this CSS is loaded on every template of the installation.

This is done with the getCss() function of the Theme class: 

    public function getCss()
    {                   
        return array(
            'path' => 'assets/main.css',
            'version' => 1,
        );
    }

### Images

Also, when the theme is installed, all the images in the /assets/img of the directory are copied in the project directory /public/assets/img/[plugin_name]/.