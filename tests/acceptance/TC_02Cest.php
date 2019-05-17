<?php
use Step\Acceptance\SortStep as Sort;

class TC_02Cest
{
    // tests

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnIDSort(Sort $I)
    {
        $I->clickIdIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnTypeSort(Sort $I)
    {
        $I->clickTypeIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnTableIdSort(Sort $I)
    {
        $I->clickTableIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnNumSort(Sort $I)
    {
        $I->clickNumIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnDateSort(Sort $I)
    {
        $I->clickDateIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnDescripSort(Sort $I)
    {
        $I->clickDescripIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnDurationSort(Sort $I)
    {
        $I->clickDurationIconSort();
    }
    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnStTimeSort(Sort $I)
    {
        $I->clickstTimeIconSort();
    }

    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnDeleteSort(Sort $I)
    {
        $I->clickDeleteIconSort();
    }
    /**
     * @param Sort $I
     * @throws Exception
     */
    public function clickOnEditSort(Sort $I)
    {
        $I->clickEditIconSort();
    }
}
