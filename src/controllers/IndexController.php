<?php
// use Phalcon\Http\Response;
// use Base\Components\User;
// use Base\Components\GlobalConfig;
// use Base\Components\ModuleManager;

class IndexController extends ControllerBase {
    public function indexAction(){
        // $base = new ModuleManager();
        // var_dump($base->getConfigPath());
        // throw new \Exception("Error Processing Request", 1);
        // $users = new User();
        // $users->save();
        // $user = $users->findFirst();
        // $user->addStatus("test");
        // var_dump($user->getStatuses());
//         var_dump($users->getMessages());

//         $gc = new GlobalConfig();
//         var_dump($gc->getValue("log-file-path"));
        // echo "lol";
        // $this->view->disable();
        $this->view->page_title = "ololo";
        $this->view->body_content = '
            <script type="text/javascript" src="/frontend/js?group=modules&module=test&name=index"></script>
        ';
    }
}
