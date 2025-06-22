<?php

namespace TechsiCustom;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    "TechsiCustom\\PriceListRepeater",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class PriceListRepeater extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false" class="svg-inline--fa fa-square-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="..."></path></svg>';
    }

    static function tag() { return 'div'; }

    static function tagOptions() { return []; }

    static function tagControlPath() { return false; }

    static function name() { return 'Price List'; }

    static function className() { return 'bde-price-list'; }

    static function category() { return 'blocks'; }

    static function badge() { return false; }

    static function slug() { return __CLASS__; }

    static function template() {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss() {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function cssTemplate() {
        return file_get_contents(__DIR__ . '/css.twig');
    }

    static function defaultProperties() {
        return false;
    }

    static function defaultChildren() {
        return false;
    }

    static function designControls() {
        return [c(
            "rows", "Rows", [
                c("background_a", "Background A", [], ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']]),
                c("background_b", "Background B", [], ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']]),
                getPresetSection("EssentialElements\\spacing_padding_all", "Padding", "padding"),
                c("border", "Border", [], ['type' => 'toggle', 'layout' => 'inline']),
                c("border_color", "Border Color", [], ['type' => 'color', 'layout' => 'inline'])
            ],
            ['type' => 'section']
        ),
        c("typography", "Typography", [
            getPresetSection("EssentialElements\\typography", "Title", "title"),
            getPresetSection("EssentialElements\\typography", "Price", "price"),
            getPresetSection("EssentialElements\\typography", "Description", "description")
        ], ['type' => 'section']),
        c("container", "Container", [
            c("width", "Width", [], ['type' => 'unit', 'layout' => 'inline'], true),
            c("background", "Background", [], ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']]),
            getPresetSection("Ess
