<?php

namespace AdminStorer;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
use joincommands\LoginTask;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
    
  }
}
