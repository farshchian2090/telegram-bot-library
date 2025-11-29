<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Video extends BaseModel
{
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public int $duration;
    public ?PhotoSize $thumbnail=null;

    /**
     * @var PhotoSize[]|null
     */
    public array|null $cover=null;

    public ?int $start_timestamp=null;

    public ?string $file_name=null;
    public ?string $mime_type=null;
    public ?int $file_size=null;
}
