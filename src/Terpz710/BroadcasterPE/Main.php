<?php

namespace Terpz710\BroadcasterPE;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $broadcastInterval = $this->getConfig()->get("broadcast_interval", 1200);
        $this->getScheduler()->scheduleRepeatingTask(new BroadcastTask($this), $broadcastInterval);
    }
}
