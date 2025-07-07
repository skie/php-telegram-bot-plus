<?php

/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Entities;

/**
 * Class ThemeParams
 *
 * Describes the current theme, used Telegram apps.
 *
 * @link https://core.telegram.org/bots/api#themeparams
 *
 * @method string|null getBgColor()                Optional. Background color in Boosts and custom emoji tags.
 * @method string|null getTextColor()              Optional. Main text color.
 * @method string|null getHintColor()              Optional. Hint text color.
 * @method string|null getLinkColor()              Optional. Link color.
 * @method string|null getButtonColor()            Optional. Button color.
 * @method string|null getButtonTextColor()        Optional. Button text color.
 * @method string|null getSecondaryBgColor()       Optional. Secondary background color.
 * @method string|null getSectionSeparatorColor()  Optional. Color of the section separator.
 * @method string|null getBottomBarBgColor()       Optional. Background color of the bottom bar.
 */
class ThemeParams extends Entity
{
    /**
     * @var string|null Optional. Background color in Boosts and custom emoji tags.
     */
    protected $bg_color;

    /**
     * @var string|null Optional. Main text color.
     */
    protected $text_color;

    /**
     * @var string|null Optional. Hint text color.
     */
    protected $hint_color;

    /**
     * @var string|null Optional. Link color.
     */
    protected $link_color;

    /**
     * @var string|null Optional. Button color.
     */
    protected $button_color;

    /**
     * @var string|null Optional. Button text color.
     */
    protected $button_text_color;

    /**
     * @var string|null Optional. Secondary background color.
     */
    protected $secondary_bg_color;

    /**
     * @var string|null Optional. Color of the section separator.
     */
    protected $section_separator_color;

    /**
     * @var string|null Optional. Background color of the bottom bar.
     */
    protected $bottom_bar_bg_color;

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [];
    }
}
