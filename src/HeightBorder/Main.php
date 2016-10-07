<?php

namespace HeightBorder;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
    mkdir($this->getDataFolder());
    $this->saveResource("config.yml");
    $this->cfg = new Config($this->getDataFolder(), "config.yml");
  }

  public function onMove(PlayerMoveEvent $event) {
    $p = $event->getPlayer();
    $l = $p->getLevel();
    if(in_array($l->getName(), $this->cfg->get("Worlds", array()))) {
      if(!$p->hasPermission("worldborder.bypass")) {
        if($p->y >= $this->cfg->get("MaximumHeight")) {
          
        }
      }
    }  
  }
}
