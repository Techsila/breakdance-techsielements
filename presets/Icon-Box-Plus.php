<?php

namespace TechiCustom;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "TechiCustom\\Icon-Box-Plus",
    c(
        "content",
        "Content",
        [c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "rotate",
        "Rotate",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 360, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "title",
        "Title",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button",
      "button",
       ['type' => 'popout']
     ), c(
        "title_tag",
        "Title Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'h1', 'text' => 'h1'], ['value' => 'h2', 'text' => 'h2'], ['value' => 'h3', 'text' => 'h3'], ['value' => 'h4', 'text' => 'h4'], ['value' => 'h5', 'text' => 'h5'], ['value' => 'h6', 'text' => 'h6']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['preset' => ['slug' => 'TechiCustom\\Icon-Box-Plus']]],
        false,
        false,
        [],
      ),
    true,
    null
);

