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
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;
use joincommands\LoginTask;

class Main extends PluginBase implements Listener{

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
  }

  public function onLogin (PlayerLoginEvent $event) {
    $p = $event->getPlayer ();
    $this->getServer()->getScheduler()->scheduleDelayedTask(new LoginTask($this, $p), 240);
  }

  public function onJoin (PlayerJoinEvent $event) {
  $coin = Item::get (Item::DOUBLE_PLANT);
  $coin->setCustomName (TF::YELLOW . "Coin");
  $gold = Item::get (Item::GOLD_INGOT);
  $gold->setCustomName (TF::YELLOW . "Gold");
  $goldblock = Item::get (Item::GOLD);
  $goldblock->setCustomName (TF::YELLOW . "Block of Gold");
  }
}
