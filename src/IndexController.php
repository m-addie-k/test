<?php
use Phalcon\Http\Response;
use Base\Components\UserComponent;
use Base\Components\ConfigComponent;

class IndexController extends ControllerBase {
    public function indexAction(){

        $users = new UserComponent();
        // throw new \Exception("Error Processing Request", 1);
        $users->save();
        var_dump($users->getMessages());

        $gc = new ConfigComponent();
        var_dump($gc->getValue("log-file-path"));
        echo "lol";
        return false;
    }
}
