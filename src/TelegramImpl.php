<?php

namespace Farshchian\TelegramBotLibrary;

use Farshchian\TelegramBotLibrary\Keyboards\BaseKeyboard;
use Farshchian\TelegramBotLibrary\Keyboards\InlineKeyboardMarkup;
use Farshchian\TelegramBotLibrary\Keyboards\ReplyKeyboardMarkup;
use Farshchian\TelegramBotLibrary\Models\ChatFullInfo;
use Farshchian\TelegramBotLibrary\Models\File;
use Farshchian\TelegramBotLibrary\Models\Message;
use Farshchian\TelegramBotLibrary\RequestModels\ChatPermissions;
use Farshchian\TelegramBotLibrary\RequestModels\ForceReply;
use Farshchian\TelegramBotLibrary\RequestModels\MessageEntity;
use Farshchian\TelegramBotLibrary\RequestModels\ReplyKeyboardRemove;
use Farshchian\TelegramBotLibrary\RequestModels\ReplyParameters;

class TelegramImpl
{
    protected string $bot_token;
    protected Api $api;


    public function __construct()
    {
        $bot = config('telegram.default');
        $this->bot_token = config("telegram.bots.$bot.token");
        $this->api = new Api($this->bot_token);
    }

    public function bot($name): static
    {
        $this->bot_token = config("telegram.bots.$name.token");
        $this->api = new Api($this->bot_token);
        return $this;
    }

    /**
     * Use this method to send text messages. On success, the sent Message is returned.*
     * @param int|string $chat_id - Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $text - Text of the message to be sent, 1-4096 characters after entities parsing
     * @param BaseKeyboard|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup - Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $parse_mode - markdown or html or markdown_v2
     * @param MessageEntity[] $entities - A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     * @param ReplyParameters|null $reply_parameters - Description of the message to reply to
     * @return Message|null
     */
    public function sendMessage(int|string $chat_id, string $text, BaseKeyboard|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null, string $parse_mode = null, array $entities = [], ?ReplyParameters $reply_parameters = null): ?Message
    {
        $res = $this->api->request('sendMessage', [
            'chat_id'          => $chat_id,
            'text'             => $text,
            'parse_mode'       => $parse_mode,
            'entities'         => $entities,
            'reply_markup'     => $reply_markup,
            'reply_parameters' => $reply_parameters
        ]);
        if ($res) {
            return new Message($res);
        }
        return $res;
    }

    /**
     * @param int|string $chat_id
     * @param string $photo
     * @param string|null $caption
     * @param string|null $parse_mode
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     * @param MessageEntity[] $caption_entities
     * @param ReplyParameters|null $reply_parameters
     * @return Message|null
     */
    public function sendPhoto(int|string $chat_id, string $photo, ?string $caption = null, ?string $parse_mode = null, InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null, array $caption_entities = [], ?ReplyParameters $reply_parameters = null): ?Message
    {
        $res = $this->api->request('sendPhoto', [
            'chat_id'          => $chat_id,
            'photo'            => $photo,
            'caption'          => $caption,
            'parse_mode'       => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup'     => $reply_markup,
            'reply_parameters' => $reply_parameters
        ]);
        if ($res) {
            return new Message($res);
        }
        return $res;
    }

    /**
     * @param                                                                              $chat_id
     * @param string $voice
     * @param string|null $caption
     * @param string|null $parse_mode
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     * @param MessageEntity[] $caption_entities
     * @param ReplyParameters|null $reply_parameters
     * @return Message|null
     */
    public function sendVoice($chat_id, string $voice, ?string $caption = null, ?string $parse_mode = null, InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null, array $caption_entities = [], ?ReplyParameters $reply_parameters = null): ?Message
    {
        $res = $this->api->request('sendVoice', [
            'chat_id'          => $chat_id,
            'voice'            => $voice,
            'caption'          => $caption,
            'parse_mode'       => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup'     => $reply_markup,
            'reply_parameters' => $reply_parameters
        ]);
        if ($res) {
            return new Message($res);
        }
        return $res;
    }


    public function editMessageText($chat_id, $message_id, $text, $reply_markup = null, $parse_mode = null, $entities = [])
    {
        return $this->api->request('editMessageText', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'text'         => $text,
            'parse_mode'   => $parse_mode,
            'entities'     => $entities,
            'reply_markup' => $reply_markup
        ]);
    }

    public function editMessageReplyMarkup($chat_id, $message_id, ?InlineKeyboardMarkup $reply_markup = null)
    {
        return $this->api->request('editMessageReplyMarkup', [
            'chat_id'      => $chat_id,
            'message_id'   => $message_id,
            'reply_markup' => $reply_markup
        ]);
    }

    public function editMessageCaption($chat_id, $message_id, ?string $caption = null, ?InlineKeyboardMarkup $reply_markup = null, ?string $parse_mode = null, ?array $caption_entities = null)
    {
        $res = $this->api->request('editMessageCaption', [
            'chat_id'          => $chat_id,
            'message_id'       => $message_id,
            'caption'          => $caption,
            'reply_markup'     => $reply_markup,
            'parse_mode'       => $parse_mode,
            'caption_entities' => $caption_entities
        ]);
        if ($res) {
            return new Message($res);
        }
        return $res;
    }

    public function deleteMessage($chat_id, $message_id): ?bool
    {
        return $this->api->request('deleteMessage', [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ]);
    }

    /**
     * @param                 $chat_id
     * @param ChatPermissions $permissions
     * @param bool $use_independent_chat_permissions -- Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @return bool|null
     */
    public function setChatPermissions($chat_id, ChatPermissions $permissions, bool $use_independent_chat_permissions = false): bool|null
    {
        return $this->api->request('setChatPermissions', [
            'chat_id'                          => $chat_id,
            'permissions'                      => $permissions,
            'use_independent_chat_permissions' => $use_independent_chat_permissions
        ]);
    }

    public function forwardMessage($chat_id, $from_chat_id, $message_id): ?Message
    {
        $res = $this->api->request('forwardMessage', [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ]);
        if ($res) {
            return new Message($res);
        }
        return null;
    }

    public function copyMessage($chat_id, $from_chat_id, $message_id, ?string $caption = null, ?string $parse_mode = null, InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup = null): ?Message
    {
        $res = $this->api->request('copyMessage', [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id,
            'caption'      => $caption,
            'parse_mode'   => $parse_mode,
            'reply_markup' => $reply_markup
        ]);
        if ($res) {
            return new Message($res);
        }
        return null;
    }

    public function answerCallbackQuery(string $callback_query_id, ?string $text=null, ?bool $show_alert=false, ?string $url=null, int $cache_time=0): ?bool
    {
        return $this->api->request('answerCallbackQuery', [
            'callback_query_id' => $callback_query_id,
            'text'              => $text,
            'show_alert'        => $show_alert,
            'url'               => $url,
            'cache_time'        => $cache_time
        ]);
    }

    /**
     * Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on success.
     * @param $chat_id
     * @return ChatFullInfo|null
     */
    public function getChat($chat_id): ?ChatFullInfo
    {
        $res= $this->api->request('getChat', [
            'chat_id' => $chat_id
        ]);
        if($res){
            return new ChatFullInfo($res);
        }
        return $res;
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
     * @param $file_id
     * @return File|null
     */
    public function getFile($file_id): ?File
    {
        $res=$this->api->request('getFile',['file_id'=> $file_id]);
        if($res){
            return new File($res);
        }
        return $res;
    }
}
