<?php

namespace FunworldFirework;

use pocketmine\plugin\PluginBase;
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\item\Item;
use pocketmine\level\particle\LavaParticle;
use pocketmine\level\particle\MobSpawnParticle;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements listener {

  public function onEnable () {
    $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
  }

  public function onItemHeld (PlayerItemHeldEvent $event) {
    $p = $event->getPlayer();
    $l = $p->getLevel();
    if ($p->getItemInHand ()->getId () == Item::SLIMEBALL) {
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+0.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+1, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+1.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+2, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+2.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+3, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+3.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+4, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+4.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+5.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+6, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+6.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+7, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+7.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+8, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+8.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+9, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+9.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+10, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+10.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+11, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+11.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+12, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+12.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+13, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+13.5, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+14, $p->z)));
      $l->addParticle (new MobSpawnParticle (new Vector3 ($p->x, $p->y+14.5, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
      $l->addParticle (new LavaParticle (new Vector3 ($p->x, $p->y+15, $p->z)));
    }
  }

  public function onPlayerJoin (PlayerJoinEvent $event) {
    $slimeball = Item::get (Item::SLIMEBALL);
    $slimeball->setCustomName(TF::AQUA . "Fireworks");
  }
}
