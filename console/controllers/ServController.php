<?php
namespace console\controllers;

use yii\web\Controller;
use app\modules\tehpod\Serv;


class ServController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionInit()
    {
        $port = 8000;
        $server = new Serv();
        if ($port) {
            $server->port = $port;
        }
        $server->start();
    }
}
