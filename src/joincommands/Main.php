<?php

namespace joincommands;

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

  public function onLogin (PlayerLoginEvent $event) {
    $p = $event->getPlayer ();
    $this->getServer()->getScheduler()->scheduleDelayedTask(new LoginTask($this, $p), 400);
  }

  public function onHeld (PlayerItemHeldEvent $event) {
    $item = Item::get (175, 0, 1);
    $item->setCustomName("Coin");
    $item2 = Item::get (266, 0, 1);
    $item2->setCustomName("Gold bar");
    $item3 = Item::get (41, 0, 1);
    $item3->setCustomName("Gold block");
  }
}
