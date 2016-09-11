<?php

namespace joincommands;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\PlayerLoginEvent;

class Main extends PluginBase implements Listener{

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
  }

  public function onLogin (PlayerLoginHeldEvent $event) {
    $p = $event->getPlayer ();
    $this->getServer ()->dispatchCommand (new ConsoleCommandSender(), "rca " . $p->getName () . " sb on");
  }
  
}
