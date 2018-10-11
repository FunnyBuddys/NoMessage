<?php

declare(strict_types=1);

namespace FunnyBuddys\NoMessage;

use FunnyBuddys\NoMessage\Listener\JoinListener;
use FunnyBuddys\NoMessage\Listener\QuitListener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info(TextFormat::GREEN."NoMessage activated!");
		$this->registerListener();
	}

	private function registerListener(){
	    $this->getServer()->getPluginManager()->registerEvents(new JoinListener($this), $this);
        $this->getServer()->getPluginManager()->registerEvents(new QuitListener($this), $this);
    }

	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::RED."NoMessage deactivated");
	}

}
