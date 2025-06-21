<?php

/**
 * Plugin Name: Breakdance TechsiElements
 * Plugin URI: https://techsila.net
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: Techsila
 * Author URI: https://techsila.net
 * License: GPLv2
 * Text Domain: techsila
 * Domain Path: /languages/
 * Version: 0.0.1
 * GitHub Plugin URI: https://github.com/Techsila/breakdance-techsielements
 */

namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'TechsiCustom',
        'element',
        'TechsiElements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'TechsiCustom',
        'macro',
        'TechsiMacros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'TechiCustom',
        'preset',
        'TechiPresets',
        false,
    );
},
    // register elements before loading them
    9
);
