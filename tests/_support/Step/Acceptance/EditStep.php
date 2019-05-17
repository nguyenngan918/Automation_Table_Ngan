<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 5/17/2019
 * Time: 5:23 PM
 */

namespace Step\Acceptance;
use Page\Acceptance\FormPage as Form;
use Page\Acceptance\CrudPage as Crud;
class EditStep extends \AcceptanceTester
{
    /**
     * @throws \Exception
     * check edit data of the first reservation
     */
    public function editData($reservation = array())
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Crud::$editData,20);
        $I->click(Crud::$editData);
        $I->waitForElementVisible(Form::$tableIdInput,10);
        $I->fillField(Form::$tableIdInput,$reservation['id']);
        $I->fillField(Form::$numOfPerInput,$reservation['number']);
        $I->fillField(Form::$dateInput,$reservation['date']);
        $I->fillField(Form::$decripInput,$reservation['description']);
        $I->fillField(Form::$startTimeInput,$reservation['stTime']);
    }

}