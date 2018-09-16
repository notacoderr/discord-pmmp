<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/09/12
 * Time: 12:45
 */

namespace InkoHX\php\discordpmmp;


use InkoHX\php\discordpmmp\Config\Offline;
use InkoHX\php\discordpmmp\Config\Online;
use InkoHX\php\discordpmmp\Config\ServerChat;
use InkoHX\php\discordpmmp\Config\DataFile;
use InkoHX\php\discordpmmp\Thread\SendEmbed;
use InkoHX\php\discordpmmp\Thread\SendMessage;

class Discord
{
    public static function SendOnlineEmbed(): void
    {
        if (!Online::getOption()) return;
        $send = new SendEmbed(DataFile::getWebhookURL(), Online::getTitle(), Online::getField(), Online::getValue(), Online::getColor(), DataFile::getUsername(), Online::getAvatarURL(), DataFile::getServerIp());
        $send->start();
    }

    public static function SendOfflineEmbed(): void
    {
        if (!Offline::getOption()) return;
        $send = new SendEmbed(DataFile::getWebhookURL(), Offline::getTitle(), Offline::getField(), Offline::getValue(), Offline::getColor(), DataFile::getUsername(), Offline::getAvatarURL(), DataFile::getServerIp());
        $send->start();
    }

    public static function SendServerChat(string $message): void
    {
        if (!ServerChat::getOption()) return;
        $send = new SendMessage(DataFile::getWebhookURL(), $message, DataFile::getUsername(), ServerChat::getAvatarURL());
        $send->start();
    }
}
