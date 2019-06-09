<?php

/*
* _  _____             _        ______
* (_)/ ____|           | |      |___  /
*  _| (___  _ __   ___ | | _____   / /
* | |\___ \| '_ \ / _ \| |/ / _ \ / /
* | |____) | |_) | (_) |   <  __// /__
* |_|_____/| .__/ \___/|_|\_\___/_____|
*          | |
*          |_|
*
*@author iSpokeZ (Umut Yıldırım)
*
*@RainzGG Tüm Hakları Saklıdır!
*
*@Eklenti Umut Yıldırım Tarafından Özel Olarak Kodlanmıştır.
*
*@YouTube - iSpokeZ
*
*/

namespace iSpokeZ;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\Player;
use pocketmine\Server;

class ID extends PluginBase implements Listener {

    public function onEnable(){
        $this->getLogger()->info("§7> §aAktif");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable(){
        $this->getLogger()->info("§7> §cDe-Aktif");
    }

    public function onCommand(CommandSender $sender, Command $kmt, string $label, array $args): bool {
        switch($kmt->getName()){
            case "id":
                if($sender instanceof Player) {
                    if($sender->hasPermission("id.kmt")) {
                        $o = $sender->getPlayer();
                        $isim = $o->getInventory()->getItemInHand()->getName();
                        $id = $o->getInventory()->getItemInHand()->getId();
                        $damage = $o->getInventory()->getItemInHand()->getDamage();
                        $miktar = $o->getInventory()->getItemInHand()->getCount();
                        $o->sendMessage("§c-=[ §aItem ID §c]=-");
                        $o->sendMessage("§7» §aEşyanın Ismi: §c$isim");
                        $o->sendMessage("§7» §aEşyanın ID'si: §c$id:$damage");
                        $o->sendMessage("§7» §aEşyanın Miktarı: §c$miktar");
                    }
                }
        }
        return true;
    }
                public function tikla(PlayerInteractEvent $e){
                        $o = $e->getPlayer();
                        $id = $o->getInventory()->getItemInHand()->getId();
                        $o->sendPopup("§aID: §c$id");
                    }
                }