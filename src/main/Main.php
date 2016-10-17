<?php

namespace main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;
use synapse\Player;

class Main extends PluginBase {
  
  public function onEnable(){
    $this->getLogger()->info(C::GREEN."Plugin HubCommandSynapse enables!");
  }
  public function onDisable(){
    $this->getLogger()->info(C::RED."Plugin HubCommandSynapse disenables!");
  }
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case "hub":
        $player->transfer(HUB);
        } else {
          $sender->sendMessage(C::RED."Error!");
        break;
        }
    }
  }
}
