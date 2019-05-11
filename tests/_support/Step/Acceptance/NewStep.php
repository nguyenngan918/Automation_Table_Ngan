<?php
namespace Step\Acceptance;
use Page\Acceptance\FormPage as Form;
class NewStep extends \AcceptanceTester
{
    /**
     * @param $Id
     * @param $num
     * @param $date
     * @param $descip
     * @param $stTime
     * @throws \Exception
     *  Add information in form
     */
    public function AddNewReservation($Id, $num, $date, $descip, $stTime)
    {
        $I = $this;
        $I->amOnPage(Form::$URL);
        $I->wantToTest('I want to check Add new reservation successfully');
        $I->waitForElementVisible(Form::$tableIdInput,'10');
        $I->fillField(Form::$tableIdInput,$Id);
        $I->fillField(Form::$numOfPerInput,$num);
        $I->fillField(Form::$dateInput,$date);
        $I->fillField(Form::$decripInput,$descip);
        $I->fillField(Form::$startTimeInput,$stTime);

    }

    /**
     * click on Ađ/edit button
     */
    public function clickAddButton()
    {
        $I = $this;
        $I->click(Form::$btnAddEdit);
    }
}