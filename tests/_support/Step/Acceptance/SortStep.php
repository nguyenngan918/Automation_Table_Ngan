<?php
namespace Step\Acceptance;
use Page\Acceptance\TablesHomePage as Table;
use Page\Acceptance\CrudPage as Home;
class SortStep extends \AcceptanceTester
{
    /**
     * @throws \Exception
     * check click on Id Sort Icon
     */

    public function clickIdIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$idSortIcon,10);
        $I->click(Table::$idSortIcon);
        $I->click(Table::$idSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Type Sort Icon
     */
    public function clickTypeIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$typeSortIcon,10);
        $I->click(Table::$typeSortIcon);
        $I->click(Table::$typeSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Table ID Sort Icon
     */
    public function clickTableIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$tableIdSortIcon,10);
        $I->click(Table::$tableIdSortIcon);
        $I->click(Table::$tableIdSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Number Sort Icon
     */
    public function clickNumIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$numOPSortIcon,10);
        $I->click(Table::$numOPSortIcon);
        $I->click(Table::$numOPSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Date Sort Icon
     */
    public function clickDateIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$dateSortIcon,10);
        $I->click(Table::$dateSortIcon);
        $I->click(Table::$dateSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Description Sort Icon
     */
    public function clickDescripIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$descripSortIcon,10);
        $I->click(Table::$descripSortIcon);
        $I->click(Table::$descripSortIcon);
    }

    /**
     * @throws \Exception
     * check click on Duration Sort Icon
     */
    public function clickDurationIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$durationSortIcon,10);
        $I->click(Table::$durationSortIcon);
        $I->click(Table::$durationSortIcon);
    }
    /**
     * @throws \Exception
     * check click on Start Time Sort Icon
     */
    public function clickstTimeIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$startTimeSortIcon,10);
        $I->click(Table::$startTimeSortIcon);
        $I->click(Table::$startTimeSortIcon);
    }
    /**
     * @throws \Exception
     * check click on Delete Sort Icon
     */
    public function clickDeleteIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$deleteSortIcon,10);
        $I->click(Table::$deleteSortIcon);
        $I->click(Table::$deleteSortIcon);
    }
    /**
     * @throws \Exception
     * check click on Edit Sort Icon
     */
    public function clickEditIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$editSortIcon,10);
        $I->click(Table::$editSortIcon);
        $I->click(Table::$editSortIcon);
    }

}