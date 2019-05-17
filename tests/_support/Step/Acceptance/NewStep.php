<?php
namespace Step\Acceptance;
use Page\Acceptance\FormPage as Form;
class NewStep extends \AcceptanceTester
{
    /**
     * @param array $reservation
     * @throws \Exception
     * Add information in Booking form
     */
    public function AddNewReservation($reservation = array())
    {
        $I = $this;
        $I->amOnPage(Form::$URL);
        $I->waitForElementVisible(Form::$tableIdInput,10);
        $I->fillField(Form::$tableIdInput,$reservation['id']);
        $I->fillField(Form::$numOfPerInput,$reservation['number']);
        $I->fillField(Form::$dateInput,$reservation['date']);
        if (isset($reservation['']))
        {
            $I->fillField(Form::$decripInput, $reservation['description']);
        }
        $I->fillField(Form::$startTimeInput,$reservation['stTime']);

    }


}