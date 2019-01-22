<?php


namespace mwcbrent\mobilize\controllers;
use mwcbrent\mobilize\Mobilize;

use Craft;
use craft\web\Controller;

class MobilizeController extends Controller
{
    protected $allowAnonymous = ['index'];

    public function actionIndex()
    {
        header('Content-Type: application/json');
        echo(json_encode(Mobilize::$plugin->mobilizeService->eventList()));
        die();
    }
}