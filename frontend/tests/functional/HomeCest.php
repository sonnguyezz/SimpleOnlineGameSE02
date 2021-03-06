<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        $I->see('SimpleGameOnline.com');
        $I->seeLink('SimpleGameOnline.com');
        $I->click('SimpleGameOnline.com');
        $I->see('Home Page');
    }
}