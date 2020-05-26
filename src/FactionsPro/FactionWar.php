<?php

namespace FactionsPro;

use pocketmine\scheduler\Task;

class FactionWar extends Task{

	/** @var FactionMain */
	public $plugin;
	/** @var string */
	public $requester;

	public function __construct(FactionMain $pl, string $requester){
		$this->plugin = $pl;
		$this->requester = $requester;
	}

	public function onRun(int $currentTick) : void{
		unset($this->plugin->wars[$this->requester]);
		$this->plugin->getScheduler()->cancelTask($this->getTaskId());
	}

}