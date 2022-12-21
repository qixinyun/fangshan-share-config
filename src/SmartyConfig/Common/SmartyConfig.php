<?php

namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/zhongyang-share-config/src/SmartyConfig/Zy',
            S_ROOT.'vendor/qixinyun/zhongyang-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/zhongyang-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
