<?php

namespace TechsiCustom;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "TechsiCustom\\IconPlus",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class IconPlus extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'IconsIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Icon Plus';
    }

    static function className()
    {
        return 'icon-plus';
    }

    static function category()
    {
        return 'basic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return __CLASS__;
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [];
    }

    static function contentControls()
    {
        return [c(
        "icon",
        "Icon",
        [c(
        "icon_class",
        "Icon Class",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "color_mode",
        "Color mode",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['value' => 'static', 'text' => 'Static'], ['text' => 'Gradient', 'value' => 'gradient']]],
        false,
        false,
        [],
      ), c(
        "static",
        "Static Color",
        [],
        ['type' => 'color', 'layout' => 'vertical', 'colorOptions' => ['type' => 'solidOnly'], 'condition' => [[['path' => 'content.icon.color_mode', 'operand' => 'equals', 'value' => 'static']]]],
        false,
        false,
        [],
      ), c(
        "gradient",
        "Gradient",
        [],
        ['type' => 'gradient', 'layout' => 'vertical', 'condition' => [[['path' => 'content.icon.color_mode', 'operand' => 'equals', 'value' => 'gradient']]], 'colorOptions' => ['type' => 'gradientOnly']],
        false,
        false,
        [],
      ), c(
        "icon_size_px_",
        "Icon Size (px)",
        [],
        ['type' => 'number', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return [];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
