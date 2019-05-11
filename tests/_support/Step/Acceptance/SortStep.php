<?php
namespace Step\Acceptance;
use Page\Acceptance\TablesHomePage as Table;
use Page\Acceptance\CrudPage as Home;
class SortStep extends \AcceptanceTester
{
    /**
     * @throws \Exception I want to click check sort table
     */


    public function clickIdSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$idAvailable,'10');
        $I->click(Table::$idAvailable);
        $I->waitForElementVisible(Table::$idAvaiSort,'10');
        $I->click(Table::$idAvaiSort);
    }
    public function clickIdIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$idSortIcon,'10');
        $I->click(Table::$idSortIcon);
        $I->waitForElementVisible(Table::$idSortIcon,'10');
        $I->click(Table::$idSortIcon);
    }

    public function clickTypeSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$typeAvailable,'10');
        $I->click(Table::$typeAvailable);
        $I->waitForElementVisible(Table::$typeAvaiSort,'10');
        $I->click(Table::$typeAvaiSort);
    }

    public function clickTypeIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$typeSortIcon,'10');
        $I->click(Table::$typeSortIcon);
        $I->waitForElementVisible(Table::$typeSortIcon,'10');
        $I->click(Table::$typeSortIcon);
    }

    public function clickTableIdSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$tableID,'10');
        $I->click(Table::$tableID);
        $I->waitForElementVisible(Table::$tableIDSort,'10');
        $I->click(Table::$tableIDSort);
    }

    public function clickTableIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$tableIdSortIcon,'10');
        $I->click(Table::$tableIdSortIcon);
        $I->waitForElementVisible(Table::$tableIdSortIcon,'10');
        $I->click(Table::$tableIdSortIcon);
    }

    public function clickNumSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$numberOfPerson,'10');
        $I->click(Table::$numberOfPerson);
        $I->waitForElementVisible(Table::$numSort,'10');
        $I->click(Table::$numSort);
    }

    public function clickNumIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$numOPSortIcon,'10');
        $I->click(Table::$numOPSortIcon);
        $I->waitForElementVisible(Table::$numOPSortIcon,'10');
        $I->click(Table::$numOPSortIcon);
    }

    public function clickDateSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$date,'10');
        $I->click(Table::$date);
        $I->waitForElementVisible(Table::$dateSort,'10');
        $I->click(Table::$dateSort);
    }

    public function clickDateIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$dateSortIcon,'10');
        $I->click(Table::$dateSortIcon);
        $I->waitForElementVisible(Table::$dateSortIcon,'10');
        $I->click(Table::$dateSortIcon);
    }

    public function clickDescripSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$description,'10');
        $I->click(Table::$description);
        $I->waitForElementVisible(Table::$descripSort,'10');
        $I->click(Table::$descripSort);
    }

    public function clickDescripIconSort()
    {
        $I = $this;
        $I->amOnPage(Home::$URL);
        $I->waitForElementVisible(Table::$descripSortIcon,'10');
        $I->click(Table::$descripSortIcon);
        $I->waitForElementVisible(Table::$descripSortIcon,'10');
        $I->click(Table::$descripSortIcon);
    }
}