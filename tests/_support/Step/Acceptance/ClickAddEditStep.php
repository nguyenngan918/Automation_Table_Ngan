<?php
/**
 * Created by PhpStorm.
 * User: Thanh Ngan
 * Date: 5/17/2019
 * Time: 5:32 PM
 */

namespace Step\Acceptance;
use Page\Acceptance\FormPage as Form;
class ClickAddEditStep extends \AcceptanceTester
{

    /**
     * click on Ađ/edit button
     */
    public function clickAddButton()
    {
        $I = $this;
        $I->click(Form::$btnAddEdit);
    }
}