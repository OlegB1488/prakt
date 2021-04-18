<?php

namespace app\commands;

use yii\web\Controller;
use app\modules\tehpod\Serv;

/**
 * Default controller for the `tehpod` module
 */
class ServController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionStart($port = 8000)
    {
        $server = new Serv();
        if ($port) {
            $server->port = $port;
        }
        $server->start();
    }
}
