<?php

namespace svil\sring;

//namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;


class StringHelper  extends Component
{
    
    private $limit;


    public function getShort($string, $limit = 20)
    {
        return substr($string, 0, $limit);
    }
}
