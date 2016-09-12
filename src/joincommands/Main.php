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
    $this->getServer()->getScheduler()->scheduleDelayedTask(new LoginTask($this, $p), 240);
  }

  public function onHeld (PlayerItemHeldEvent $event) {
  $p = $event->getPlayer();
  $coin = $p->getItemInHand ()->getId ();
  if ($coin == Item::DOUBLE_PLANT) {
    $p->getItemInHand ()->setCustomName (TF::YELLOW . "Coin");
  } elseif ($coin == Item::GOLD_INGOT) {
    $p->getItemInHand ()->setCustomName (TF::YELLOW . "Gold");
  } elseif ($coin == Item::GOLD_BLOCK) {
    $p->getItemInHand ()->setCustomName (TF::YELLOW . "Block of Gold");
  }
 }
}
