<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Selenium tests');
$I->amOnPage('/');
$I->seeInTitle('テスト');