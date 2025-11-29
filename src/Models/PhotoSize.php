<?php

namespace Farshchian\TelegramBotLibrary\Models;

/**
 * Represents a photo size with its metadata
 * This class likely contains information about a photo's dimensions and file size
 */
class PhotoSize extends BaseModel
{
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public ?int $file_size = null;
}
