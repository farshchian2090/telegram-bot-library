<?php

namespace Farshchian\TelegramBotLibrary\Models;

class User extends BaseModel
{
    public int $id;
    public bool $is_bot;
    public string $username;
    public string $first_name;
    public ?string $last_name;
    public ?string $language_code;
}
