<?php

namespace yiiunit\data\console\controllers\fixtures\subdir;

use yii\test\Fixture;
use yiiunit\data\console\controllers\fixtures\FixtureStorage;

class FirstFixture extends Fixture
{
    public function load()
    {
        FixtureStorage::$subdirFirstFixtureData[] = 'some data set for first fixture in subdir';
    }

    public function unload()
    {
        FixtureStorage::$subdirFirstFixtureData = [];
    }

}