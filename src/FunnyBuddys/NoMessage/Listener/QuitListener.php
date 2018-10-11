<?php
namespace FunnyBuddys\NoMessage\Listener;

use FunnyBuddys\NoMessage\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class QuitListener implements Listener {

    public function __construct(Main $main) {
        $this->main = $main;
    }

    public function onQuit(PlayerQuitEvent $event){
        $event->setQuitMessage("");
    }

}