<?php
use Step\Acceptance\SortStep as Sort;

class TC_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function clickOnSort1(Sort $I)
    {
        $I->clickIdSort();
    }

    public function clickOnSort2(Sort $I)
    {
        $I->clickIdIconSort();
    }

    public function clickOnSort3(Sort $I)
    {
        $I->clickTypeSort();
    }

    public function clickOnTextSort4(Sort $I)
    {
        $I->clickTypeIconSort();
    }

    public function clickOnSort5(Sort $I)
    {
        $I->clickTableIdSort();
    }

    public function clickOnSort6(Sort $I)
    {
        $I->clickTableIconSort();
    }

    public function clickOnSort7(Sort $I)
    {
        $I->clickNumSort();
    }

    public function clickOnSort8(Sort $I)
    {
        $I->clickNumIconSort();
    }

    public function clickOnSort9(Sort $I)
    {
        $I->clickDateSort();
    }

    public function clickOnSort10(Sort $I)
    {
        $I->clickDateIconSort();
    }

    public function clickOnSort11(Sort $I)
    {
        $I->clickDescripSort();
    }

    public function clickOnSort12(Sort $I)
    {
        $I->clickDescripIconSort();
    }


}
