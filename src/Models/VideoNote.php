<?php

namespace Farshchian\TelegramBotLibrary\Models;

class VideoNote extends BaseModel
{
    public string $file_id;
    public string $file_unique_id;

    public int $length;
    public int $duration;
    public ?PhotoSize $thumbnail = null;
    public ?int $file_size = null;
}
