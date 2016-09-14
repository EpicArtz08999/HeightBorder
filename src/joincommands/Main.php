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
  $p = $event->getPlayer();
  foreach ($p->getInventory ()->getContents () as $coin) {
   switch ($coin->getId ()) {
    case "175":
      $item = Item::get (175, 0, $coin->getCount ());
      $item->setCustomName(TF::YELLOW . "Coin");
      $p->getInventory ()->addItem ($item);
      $p->getInventory()->removeItem ($coin);
    break;
 
    case "266":
      $item = Item::get (266, 0, $coin->getCount());
      $item->setCustomName(TF::YELLOW . "Gold bar");
      $p->getInventory ()->addItem ($item);
      $p->getInventory()->removeItem ($coin);
    break;

    case "41":
      $item = Item::get (41, 0, $coin->getCount());
      $item->setCustomName(TF::YELLOW . "Gold Vault");
      $p->getInventory ()->addItem ($item);
      $p->getInventory()->removeItem ($coin);
    break;
    }
   }
  }
}
