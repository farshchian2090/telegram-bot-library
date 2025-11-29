<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Document extends BaseModel
{
    public string $file_id;

    public string $file_unique_id;

    public ?PhotoSize $thumbnail = null;

    public ?string $file_name = null;

    public ?string $mime_type = null;

    public ?int $file_size = null;
}
