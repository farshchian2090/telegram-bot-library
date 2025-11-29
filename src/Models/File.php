<?php

namespace Farshchian\TelegramBotLibrary\Models;

class File extends BaseModel
{
    public string $file_id;
    public string $file_unique_id;

    public ?int $file_size=null;

    /**
     * @var string|null Optional. File path. Use https://api.telegram.org/file/bot{token}/{file_path} to get the file.
     */
    public ?string $file_path=null;
}
