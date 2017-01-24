<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-1-24
 * Time: 下午8:45
 */

namespace zedisdog\LarChance\Facades;


use Illuminate\Support\Facades\Facade;

class Chance extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \zedisdog\ChanceLib\Chance::class;
    }

}