<?php

namespace Rithis\DanielleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RithisDanielleBundle extends Bundle
{
    const MAX_NESTING_LEVEL = 125;

    public function boot()
    {
        if (extension_loaded('xdebug') && ini_get('xdebug.max_nesting_level') < self::MAX_NESTING_LEVEL) {
            ini_set('xdebug.max_nesting_level', self::MAX_NESTING_LEVEL);
        }
    }
}
