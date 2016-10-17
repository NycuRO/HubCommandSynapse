<?php

namespace main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;
use synapse\Player;
use synapse\event\player\PlayerLoginEvent;
use synapse\event\player\PlayerLogoutEvent;
use synapse\event\player\PlayerTransferEvent;
use synapse\event\Timings;
use synapse\network\protocol\mcpe\BatchPacket;
use synapse\network\protocol\mcpe\DataPacket;
use synapse\network\protocol\mcpe\DisconnectPacket;
use synapse\network\protocol\mcpe\Info;
use synapse\network\protocol\mcpe\PlayerListPacket;
use synapse\network\protocol\mcpe\TextPacket;
use synapse\network\protocol\spp\PlayerLoginPacket;
use synapse\network\protocol\spp\PlayerLogoutPacket;
use synapse\network\protocol\spp\RedirectPacket;
use synapse\network\SourceInterface;
use synapse\utils\UUID;
use synapse\utils\TextFormat;
use synapse\event\TextContainer;
use synapse\event\TranslationContainer;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->info(C::GREEN."Plugin HubCommandSynapse enabled!");
  }
  
  public function onDisable(){
    $this->getLogger()->info(C::RED."Plugin HubCommandSynapse disabled!");
  }
  
  public function getMainClients(){
      return $this->mainClients;
  }
  
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case "hub":
        $this->transfer($this->server->getClients()[$ev->getClientHash()]);
				break;
			default:
				$this->redirectPacket($pk->buffer);
    }
  }
}
