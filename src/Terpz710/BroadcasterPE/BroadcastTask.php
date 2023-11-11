<?php

namespace Terpz710\BroadcasterPE;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\Task;

class BroadcastTask extends Task {
    private $plugin;

    public function __construct(Plugin $plugin) {
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick = -1): void {
        $message = $this->plugin->getConfig()->get("message");
        $line = $message[array_rand($message)];

        foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
            $player->sendMessage($line);
        }
    }
}
