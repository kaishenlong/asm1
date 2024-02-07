<?php
    namespace App\Controllers;

    use eftec\bladeone\BladeOne;

    class BaseController {
        protected function render($view, $data=[]){
            $viewsDir = './app/Views';
            $storageDir ='./storage';
            $blade = new BladeOne($viewsDir,$storageDir,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
            echo $blade->run($view, $data); // it calls /views/hello.blade.php
        }
    }
?>