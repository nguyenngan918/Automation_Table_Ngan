<?php 
use Step\Acceptance\HomeStep as Home;
use Step\Acceptance\NewStep as NewS;
use Faker\Factory;
class TC_01Cest
{
    protected $tableID;
    protected $emptyTableID;
    protected $invalidTableId1;
    protected $invalidTableId2;
    protected $number;
    protected $emptyNumber;
    protected $incorrectNumber;
    protected $date;
    protected $emptyDate;
    protected $invalidDate;
    protected $descrip;
    protected $emptyDescr;
    protected $stTime;
    protected $emptyStTime;
    protected $invalidStTime;
   // protected $erroMes;
    public function __construct()
    {
        $this->faker             =   Factory::create();
        $this->tableID           =   $this->faker->numberBetween(1,7);
        $this->emptyTableID      =   '';
        $this->invalidTableId1   =   $this->faker->text(5);
        $this->invalidTableId2   =   '12ab';
        $this->number            =   $this->faker->numberBetween(0,500);
        $this->incorrectNumber   =   'hai';
        $this->emptyNumber       =   '';
        $this->date              =   $this->faker->date('d/m/Y','now');
        $this->emptyDate         =   ' ';
        $this->invalidDate       =   '10/30/1000';
        $this->descrip           =   $this->faker->text(50);
        $this->emptyDescr        =   '';
        $this->stTime            =   $this->faker->numberBetween(17,23);
        $this->emptyStTime       =   ' ';
        $this->invalidDate       =   $this->faker->numberBetween(0,100);

    }

    // tests
    public function createNewReservation(Home $I, $scenario)
    {

        $I->goToCreate();
        $I->wantToTest('I want to create new Reservation');
        $I = new NewS($scenario);
        $I->AddNewReservation($this->tableID, $this->number, $this->date, $this->descrip, $this->stTime);
        $I->clickAddButton();

    }

    public function editData(Home $I, $scenario)
    {
        $I->goToEdit();
        $I->wantToTest('I want to go to Edit Page');
        $I = new NewS($scenario);
        $I->AddNewReservation($this->tableID, $this->number, $this->date, $this->descrip, $this->stTime);
        $I->clickAddButton();
    }

    public function deleteData(Home $I, $scenario)
    {
        $I->wantToTest('I want to delete data of line 1');
        $I->deleteData();
    }

    public function reloadData(Home $I, $scenario)
    {
        $I->wantToTest('I want to reload data of Page');
        $I->reloadData();
    }

     public function clearData(Home $I, $scenario)
     {
         $I->goToCreate();
         $I->wantToTest('I want to clear data input after entered');
         $I = new NewS($scenario);
         $I->AddNewReservation($this->tableID, $this->number, $this->date, $this->descrip, $this->stTime);
         $I->clickAddButton();
         $I = new Home($scenario);
         $I->clearData();
     }
}
