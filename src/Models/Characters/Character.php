<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace ThibaudDT\TrinityCoreModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Character
 *
 * @property int $guid
 * @property int $account
 * @property string $name
 * @property int $race
 * @property int $class
 * @property int $gender
 * @property int $level
 * @property int $xp
 * @property int $money
 * @property int $skin
 * @property int $face
 * @property int $hairStyle
 * @property int $hairColor
 * @property int $facialStyle
 * @property int $bankSlots
 * @property int $restState
 * @property int $playerFlags
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property int $map
 * @property int $instance_id
 * @property int $instance_mode_mask
 * @property float $orientation
 * @property string $taximask
 * @property int $online
 * @property int $cinematic
 * @property int $totaltime
 * @property int $leveltime
 * @property int $logout_time
 * @property int $is_logout_resting
 * @property float $rest_bonus
 * @property int $resettalents_cost
 * @property int $resettalents_time
 * @property float $trans_x
 * @property float $trans_y
 * @property float $trans_z
 * @property float $trans_o
 * @property int $transguid
 * @property int $extra_flags
 * @property int $stable_slots
 * @property int $at_login
 * @property int $zone
 * @property int $death_expire_time
 * @property string $taxi_path
 * @property int $arenaPoints
 * @property int $totalHonorPoints
 * @property int $todayHonorPoints
 * @property int $yesterdayHonorPoints
 * @property int $totalKills
 * @property int $todayKills
 * @property int $yesterdayKills
 * @property int $chosenTitle
 * @property int $knownCurrencies
 * @property int $watchedFaction
 * @property int $drunk
 * @property int $health
 * @property int $power1
 * @property int $power2
 * @property int $power3
 * @property int $power4
 * @property int $power5
 * @property int $power6
 * @property int $power7
 * @property int $latency
 * @property int $talentGroupsCount
 * @property int $activeTalentGroup
 * @property string $exploredZones
 * @property string $equipmentCache
 * @property int $ammoId
 * @property string $knownTitles
 * @property int $actionBars
 * @property int $grantableLevels
 * @property int $deleteInfos_Account
 * @property string $deleteInfos_Name
 * @property int $deleteDate
 *
 * @package ThibaudDT\TrinityCoreModels\Characters
 */
class Character extends Eloquent
{
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'characters';
    protected $primaryKey = 'guid';
    protected $casts = [
        'guid' => 'int',
        'account' => 'int',
        'race' => 'int',
        'class' => 'int',
        'gender' => 'int',
        'level' => 'int',
        'xp' => 'int',
        'money' => 'int',
        'skin' => 'int',
        'face' => 'int',
        'hairStyle' => 'int',
        'hairColor' => 'int',
        'facialStyle' => 'int',
        'bankSlots' => 'int',
        'restState' => 'int',
        'playerFlags' => 'int',
        'position_x' => 'float',
        'position_y' => 'float',
        'position_z' => 'float',
        'map' => 'int',
        'instance_id' => 'int',
        'instance_mode_mask' => 'int',
        'orientation' => 'float',
        'online' => 'int',
        'cinematic' => 'int',
        'totaltime' => 'int',
        'leveltime' => 'int',
        'logout_time' => 'int',
        'is_logout_resting' => 'int',
        'rest_bonus' => 'float',
        'resettalents_cost' => 'int',
        'resettalents_time' => 'int',
        'trans_x' => 'float',
        'trans_y' => 'float',
        'trans_z' => 'float',
        'trans_o' => 'float',
        'transguid' => 'int',
        'extra_flags' => 'int',
        'stable_slots' => 'int',
        'at_login' => 'int',
        'zone' => 'int',
        'death_expire_time' => 'int',
        'arenaPoints' => 'int',
        'totalHonorPoints' => 'int',
        'todayHonorPoints' => 'int',
        'yesterdayHonorPoints' => 'int',
        'totalKills' => 'int',
        'todayKills' => 'int',
        'yesterdayKills' => 'int',
        'chosenTitle' => 'int',
        'knownCurrencies' => 'int',
        'watchedFaction' => 'int',
        'drunk' => 'int',
        'health' => 'int',
        'power1' => 'int',
        'power2' => 'int',
        'power3' => 'int',
        'power4' => 'int',
        'power5' => 'int',
        'power6' => 'int',
        'power7' => 'int',
        'latency' => 'int',
        'talentGroupsCount' => 'int',
        'activeTalentGroup' => 'int',
        'ammoId' => 'int',
        'actionBars' => 'int',
        'grantableLevels' => 'int',
        'deleteInfos_Account' => 'int',
        'deleteDate' => 'int'
    ];

    protected $fillable = [
        'account',
        'name',
        'race',
        'class',
        'gender',
        'level',
        'xp',
        'money',
        'skin',
        'face',
        'hairStyle',
        'hairColor',
        'facialStyle',
        'bankSlots',
        'restState',
        'playerFlags',
        'position_x',
        'position_y',
        'position_z',
        'map',
        'instance_id',
        'instance_mode_mask',
        'orientation',
        'taximask',
        'online',
        'cinematic',
        'totaltime',
        'leveltime',
        'logout_time',
        'is_logout_resting',
        'rest_bonus',
        'resettalents_cost',
        'resettalents_time',
        'trans_x',
        'trans_y',
        'trans_z',
        'trans_o',
        'transguid',
        'extra_flags',
        'stable_slots',
        'at_login',
        'zone',
        'death_expire_time',
        'taxi_path',
        'arenaPoints',
        'totalHonorPoints',
        'todayHonorPoints',
        'yesterdayHonorPoints',
        'totalKills',
        'todayKills',
        'yesterdayKills',
        'chosenTitle',
        'knownCurrencies',
        'watchedFaction',
        'drunk',
        'health',
        'power1',
        'power2',
        'power3',
        'power4',
        'power5',
        'power6',
        'power7',
        'latency',
        'talentGroupsCount',
        'activeTalentGroup',
        'exploredZones',
        'equipmentCache',
        'ammoId',
        'knownTitles',
        'actionBars',
        'grantableLevels',
        'deleteInfos_Account',
        'deleteInfos_Name',
        'deleteDate'
    ];

    public function getClassNameAttribute($returnWrapped = false)
    {
        switch ($this->class) {
            case 1:
                $class = "Warrior";
            case 2:
                $class = "Paladin";
            case 4:
                $class = "Rogue";
            case 3:
                $class = "Hunter";
            case 5:
                $class = "Priest";
            case 6:
                $class = "Death Knight";
            case 7:
                $class = "Shaman";
            case 8:
                $class = "Mage";
            case 9:
                $class = "Warlock";
            case 11:
                $class = "Druid";
        }

        if ($returnWrapped) {
            $slug = str_slug($class);
            $proper = ucwords($class);
            return "<span class='{$slug}'>{$proper}</span>";
        }

        return $class;
    }

    /**
     * @return string
     */
    public function getRaceNameAttribute()
    {
        switch ($this->race) {
            case 1:
                return "Human";
            case 2:
                return "Orc";
            case 3:
                return "Dwarf";
            case 4:
                return "Night Elf";
            case 5:
                return "Undead";
            case 6:
                return "Tauren";
            case 7:
                return "Gnome";
            case 8:
                return "Troll";
            case 10:
                return "Blood Elf";
            case 11:
                return "Draenei";
            default:
                return "N/A";
        }
    }

    /**
     * Returns a portrait string for a character
     */
    public function getPortraitAttribute()
    {
        return "{$this->gender}-{$this->race}-{$this->class}";
    }
}
