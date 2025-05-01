<?php

namespace pocketmine\block\tile;

use pocketmine\nbt\tag\CompoundTag;

class Crops extends Spawnable{

	protected function addAdditionalSpawnData(CompoundTag $nbt) : void{}

	public function readSaveData(CompoundTag $nbt) : void {}

	protected function writeSaveData(CompoundTag $nbt) : void {}
}