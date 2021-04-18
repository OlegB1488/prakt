<?php

namespace app\modules\tehpod\controllers;

use yii\log\Dispatcher;
use yii\queue\Queue;
use yii\web\Controller;
use app\modules\tehpod\Serv;

/**
 * Default controller for the `tehpod` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionStart($port = 8000)
    {
        $server = new Serv();
        if ($port) {
            $server->port = $port;
        }
        $server->start();
    }
}
