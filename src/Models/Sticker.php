<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Sticker extends BaseModel
{
    public int $file_id;
    public string $file_unique_id;
    /**
     * @var string
     * Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     */
    public string $type;

    public int $width;
    public int $height;

    /**
     * @var bool True, if the sticker is animated
     */
    public bool $is_animated;

    /**
     * @var bool True, if the sticker is a video sticker
     */
    public bool $is_video;

    /**
     * @var PhotoSize|null Sticker thumbnail in the .WEBP or .JPG format
     */
    public ?PhotoSize $thumbnail = null;

    /**
     * @var string|null Emoji associated with the sticker
     */
    public ?string $emoji=null;

    /**
     * @var string|null Name of the sticker set to which the sticker belongs
     */
    public ?string $set_name=null;
}
