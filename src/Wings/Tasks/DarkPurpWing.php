<?php

namespace Wings\Tasks;

use Wings\Main;
use pocketmine\scheduler\Task;
use pocketmine\level\particle\PortalParticle;
use pocketmine\level\particle\DustParticle;
use pocketmine\Player;
use pocketmine\math\Vector3;

class DarkPurpWing extends Task{
	
	public function __construct(Main $plugin){
		$this->plugin = $plugin;
		$this->plugin->getScheduler()->scheduleRepeatingTask($this, 5);
	}

	public function onRun(int $currentTick){
		        if($this->plugin instanceof Main){
		foreach($this->plugin->getServer()->getOnlinePlayers() as $player) {
			$name = $player->getName();
		if(in_array($name, $this->plugin->wingdarkpurp)){
			$x = $player->getX();
			$y = $player->getY();
			$z = $player->getZ();
			$r = rand(1,255);
                        $g = rand(1,255);
                        $b = rand(1,255);
			$level = $player->getLevel();
			$playerPosition = $player->getPosition()->add(0, 1.2, 0);
		switch($player->getDirection()){
		case 0:
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -1, -0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
						break 1;
					case 2:
$position = $playerPosition->add(0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1.2, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.2, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1.2, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1.2, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 1, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 1, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.6, 1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.6, -1); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, 0, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, 0, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.2, 0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.2, -0); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.5, -1, 0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.5, -1, -0.6); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
						break 1;
					case 3:
$position = $playerPosition->add(0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(1, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-1, 0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, 0, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));

$position = $playerPosition->add(0.6, -1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
$position = $playerPosition->add(-0.6, -1, 0.5); 
$player->getLevel()->addParticle(new DustParticle($position, $r, $g, $b, 1));
						break 1;
				}
			}
	}
}
	}
}
