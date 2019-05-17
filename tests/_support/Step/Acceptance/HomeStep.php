<?php
namespace Step\Acceptance;
use Page\Acceptance\CrudPage as Crud;
use Page\Acceptance\FormPage as Form;
use Page\Acceptance\TablesHomePage as Table;
class HomeStep extends \AcceptanceTester
{

    /**
     * @throws \Exception
     * check go to new Reservation Page
     */
    public function goToCreate()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Crud::$newReservation,20);
        $I->click(Crud::$newReservation);
        $I->waitForElementVisible(Form::$textForm,20);

    }
    
    /**
     * @throws \Exception
     * check delete data of the first reservation of Table
     */
    public function deleteData()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Crud::$deleteData,20);
        $I->click(Crud::$deleteData);
        $I->pause();
        $I->waitForElementVisible(Crud::$deleteData4,20);
        $I->click(Crud::$deleteData4);

    }

    /**
     * @throws \Exception
     * check reload data of Page
     */
    public function reloadData()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Crud::$reloadData,20);
        $I->click(Crud::$reloadData);
    }

    /**
     * @throws \Exception
     * check clear data input
     */
    public function clearData()
    {
        $I = $this;
        $I->amOnPage(Form::$URL);
        $I->waitForElementVisible(Form::$clear,20);
        $I->click(Form::$clear);
    }

    /**
     * @throws \Exception
     * click on button [1]
     */
    public function clickTable1()
    {
        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Table::$table1,10);
        $I->click(Table::$table1);
    }

    /**
     * @throws \Exception
     * click on button [2]
     */
    public function clickTable2()
    {

        $I = $this;
        $I->amOnPage(Crud::$URL);
        $I->waitForElementVisible(Table::$table2,10);
        $I->click(Table::$table2);
    }
}