<?php

namespace TechsiCustom;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "TechsiCustom\\AnimatedHeading",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class AnimatedHeading extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'HeadingIcon';
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
        return 'Animated Heading';
    }

    static function className()
    {
        return 'bde-animated-heading';
    }

    static function category()
    {
        return 'blocks';
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
        return ['content' => ['content' => ['before_text' => 'This is', 'after_text' => 'stuff.', 'changing_text' => [['text' => 'awesome'], ['text' => 'great'], ['text' => 'cool']]]], 'design' => ['effect' => ['type' => 'rotating', 'rotating' => ['effect' => 'flipX', 'background' => '#FFB944FF', 'spacing' => ['number' => 16, 'unit' => 'px', 'style' => '16px'], 'padding' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'left' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'right' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottom' => ['number' => 8, 'unit' => 'px', 'style' => '8px']]]]]], 'size' => null, 'typography' => null, 'spacing' => null]];
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
        return [c(
        "effect",
        "Effect",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Typing', 'label' => 'Label', 'value' => 'typing'], ['text' => 'Rotating', 'value' => 'rotating']]],
        false,
        false,
        [],
      ), c(
        "typing",
        "Typing",
        [c(
        "type_speed",
        "Type Speed",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "start_delay",
        "Start Delay",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "back_speed",
        "Back Speed",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "back_delay",
        "Back Delay",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "shuffle",
        "Shuffle",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "disable_loop",
        "Disable Loop",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "hide_cursor",
        "Hide Cursor",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "cursor",
        "Cursor",
        [],
        ['type' => 'text', 'layout' => 'inline', 'condition' => ['path' => 'design.effect.typing.hide_cursor', 'operand' => 'is not set', 'value' => '']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Cursor Style",
      "cursor_style",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'condition' => ['path' => 'design.effect.type', 'operand' => 'equals', 'value' => 'typing'], 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "rotating",
        "Rotating",
        [c(
        "duration",
        "Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "delay",
        "Delay",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms', 's']]],
        false,
        false,
        [],
      ), c(
        "easing_in",
        "Easing In",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'unitOptions' => ['types' => ['custom'], 'defaultType' => 'px'], 'items' => [['text' => 'easeOutSine', 'value' => 'easeOutSine'], ['text' => 'easeOutExpo', 'value' => 'easeOutExpo'], ['text' => 'easeOutBack', 'value' => 'easeOutBack'], ['text' => 'easeOutBounce', 'value' => 'easeOutBounce']]],
        false,
        false,
        [],
      ), c(
        "easing_out",
        "Easing Out",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'easeInSine', 'label' => 'Label', 'value' => 'easeInSine'], ['text' => 'easeInExpo', 'value' => 'easeInExpo'], ['text' => 'easeInBack', 'value' => 'easeInBack'], ['text' => 'easeInBounce', 'value' => 'easeInBounce']]],
        false,
        false,
        [],
      ), c(
        "transform_origin",
        "Transform origin",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "effect",
        "Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Slide down', 'label' => 'Label', 'value' => 'slideDown'], ['text' => 'Slide right', 'value' => 'slideRight'], ['text' => 'Slide up', 'value' => 'slideUp'], ['text' => 'Slide left', 'value' => 'slideLeft'], ['text' => 'Rotate', 'value' => 'rotate'], ['text' => 'Flip x', 'value' => 'flipX'], ['text' => 'Flip y', 'value' => 'flipY'], ['text' => 'Zoom in', 'value' => 'zoomIn'], ['text' => 'Zoom out', 'value' => 'zoomOut']], 'condition' => ['path' => 'design.effect.type', 'operand' => 'equals', 'value' => 'rotating']],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'design.effect.type', 'operand' => 'equals', 'value' => 'rotating']],
        false,
        false,
        [],
      ), c(
        "word_color",
        "Word Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "before_text",
        "Before Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "changing_text",
        "Changing Text",
        [c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{text}', 'defaultTitle' => 'Text', 'buttonName' => 'Add Text'], 'condition' => ['path' => 'design.effect.type', 'operand' => 'not equals', 'value' => 'annotation']],
        false,
        false,
        [],
      ), c(
        "after_text",
        "After Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "tag",
        "Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'h1', 'value' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6']]],
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
        return ['0' =>  ['builderCondition' => '{% if design.effect.type == \'rotating\' or design.effect.type is empty  %}
return true;
{% else %}
return false;
{% endif %}','frontendCondition' => '{% if design.effect.type == \'rotating\' or design.effect.type is empty  %}
return true;
{% else %}
return false;
{% endif %}','scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/animejs@3/anime.min.js'],'title' => 'Rotating option',],'1' =>  ['builderCondition' => '{% if design.effect.type == \'typing\' %}
return true;
{% else %}
return false;
{% endif %}','frontendCondition' => '{% if design.effect.type == \'typing\' %}
return true;
{% else %}
return false;
{% endif %}','scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/typedjs@2/typed.min.js'],'title' => 'Typing option',],'2' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%elements/Animated_Heading/assets/animated-heading.js'],'title' => 'Breakdance Animated Heading',],'3' =>  ['inlineScripts' => ['new BreakdanceAnimatedHeading(\'%%SELECTOR%%\',  { content: {{ content.content|json_encode }}, design: {{ design|json_encode }} });
'],'builderCondition' => 'return false;','title' => 'Frontend init',],];
    }

    static function settings()
    {
        return ['proOnly' => true];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

'onMountedElement' => [['script' => '  (function() {
    if (!window.breakdanceAnimatedHeadingInstances) window.breakdanceAnimatedHeadingInstances = {};

    if (window.breakdanceAnimatedHeadingInstances && window.breakdanceAnimatedHeadingInstances[%%ID%%]) {
      window.breakdanceAnimatedHeadingInstances[%%ID%%].destroy();
    }

	window.breakdanceAnimatedHeadingInstances[%%ID%%] = new BreakdanceAnimatedHeading(\'%%SELECTOR%%\',  { content: {{ content.content|json_encode }}, design: {{ design|json_encode }} });

}());',
],],

'onPropertyChange' => [['script' => '  (function() {

    if (!window.breakdanceAnimatedHeadingInstances) window.breakdanceAnimatedHeadingInstances = {};

    if (window.breakdanceAnimatedHeadingInstances && window.breakdanceAnimatedHeadingInstances[%%ID%%]) {
      window.breakdanceAnimatedHeadingInstances[%%ID%%].destroy();
    }

	window.breakdanceAnimatedHeadingInstances[%%ID%%] = new BreakdanceAnimatedHeading(\'%%SELECTOR%%\',  { content: {{ content.content|json_encode }}, design: {{ design|json_encode }} });

}());',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return [['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
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
        return 1251;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.before_text'], ['accepts' => 'string', 'path' => 'content.content.after_text']];
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
