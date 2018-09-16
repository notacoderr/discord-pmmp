<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/09/13
 * Time: 20:42
 */

namespace InkoHX\php\discordpmmp\Event;


use InkoHX\php\discordpmmp\Discord;
use InkoHX\php\discordpmmp\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class PlayerJoin implements Listener
{
    public function event(PlayerJoinEvent $event)
    {
        Discord::SendServerChat("[ ". count(Main::$instance->getServer()->getOnlinePlayers()) . " / " . Main::$instance->getServer()->getMaxPlayers(). " ] Join: ". $event->getPlayer()->getName(). " (aka) ". $event->getPlayer()->getDisplayName());
    }
}
