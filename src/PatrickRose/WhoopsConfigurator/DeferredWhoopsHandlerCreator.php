<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/05/14
 * Time: 17:51
 */

namespace PatrickRose\WhoopsConfigurator;


use Config;
use Whoops\Handler\PrettyPageHandler;

class DeferredWhoopsHandlerCreator {

    public static function makeWhoops()
    {
        $handler = new PrettyPageHandler();
        $handler->setEditor(Config::get("whoops-configurator::editor"));
        $handler->setPageTitle(Config::get("whoops-configurator::title"));

        return $handler;
    }
}
