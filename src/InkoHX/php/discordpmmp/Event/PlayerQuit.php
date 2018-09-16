<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/09/13
 * Time: 20:48
 */

namespace InkoHX\php\discordpmmp\Event;


use InkoHX\php\discordpmmp\Discord;
use InkoHX\php\discordpmmp\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class PlayerQuit implements Listener
{
    public function event(PlayerQuitEvent $event)
    {
        $player = count(Main::$instance->getServer()->getOnlinePlayers());
        $player--;
        Discord::SendServerChat("[ ". $player. " / " . Main::$instance->getServer()->getMaxPlayers(). " ] Quit: ". $event->getPlayer()->getName(). " (aka) ". $event->getPlayer()->getDisplayName());
    }
}
