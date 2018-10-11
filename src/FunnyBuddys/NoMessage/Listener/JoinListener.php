<?php
namespace FunnyBuddys\NoMessage\Listener;

use FunnyBuddys\NoMessage\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class JoinListener implements Listener {

    public function __construct(Main $main) {
        $this->main = $main;
    }

    public function onJoin(PlayerJoinEvent $event){
        $event->setJoinMessage("");
    }

}