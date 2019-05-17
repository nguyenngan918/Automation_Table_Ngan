<?php
use Step\Acceptance\SortStep as Sort;

class TC_02Cest
{
    // tests

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Id Sort Icon
     */
    public function clickOnIDSort(Sort $I)
    {
        $I->clickIdIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Type Sort Icon
     */
    public function clickOnTypeSort(Sort $I)
    {
        $I->clickTypeIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Table ID Sort Icon
     */
    public function clickOnTableIdSort(Sort $I)
    {
        $I->clickTableIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Number Sort Icon
     */
    public function clickOnNumSort(Sort $I)
    {
        $I->clickNumIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Date Sort Icon
     */
    public function clickOnDateSort(Sort $I)
    {
        $I->clickDateIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Description Sort Icon
     */
    public function clickOnDescripSort(Sort $I)
    {
        $I->clickDescripIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Duration Sort Icon
     */
    public function clickOnDurationSort(Sort $I)
    {
        $I->clickDurationIconSort();
    }
    /**
     * @param Sort $I
     * @throws Exception
     * check click on Start Time Sort Icon
     */
    public function clickOnStTimeSort(Sort $I)
    {
        $I->clickstTimeIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     * check click on Delete Sort Icon
     */
    public function clickOnDeleteSort(Sort $I)
    {
        $I->clickDeleteIconSort();
    }
    /**
     * @param Sort $I
     * @throws Exception
     * check click on Edit Sort icon
     */
    public function clickOnEditSort(Sort $I)
    {
        $I->clickEditIconSort();
    }
}
