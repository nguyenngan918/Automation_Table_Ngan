<?php 
use Step\Acceptance\HomeStep as Home;
use Step\Acceptance\NewStep as NewS;
use Step\Acceptance\PauseExStep as Stop;
use Step\Acceptance\EditStep as Edit;
use Step\Acceptance\ClickAddEditStep as ClickAddEdit;
use Faker\Factory;
class TC_01Cest
{
    /**
     * @var
     */
    protected $reservation;

    public function __construct()
    {
        $this->reservation =
            [
                'id'          => '7',
                'number'      => '4',
                'date'        => '05/18/2019',
                'description' => "testing",
                'stTime'      => '5'
            ];

    }

    // tests

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     * Create a new reservation
     */
    public function createNewReservation(Home $I, $scenario)
    {

        $I->goToCreate();
        $I->wantToTest('I want to create new Reservation ');
        $I = new NewS($scenario);
        $I->AddNewReservation($this->reservation);
        $I = new ClickAddEdit($scenario);
        $I->clickAddButton();
        $I = new Stop($scenario);
        $I->PauseEx();

    }

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     * create new Reservation with Description field non value
     */
    public function createNewReservation2(Home $I, $scenario)
    {

        $I->goToCreate();
        $I->wantToTest('I want to create new Reservation with Description field non value');
        $I = new NewS($scenario);
        $this->reservation['description'] = ' ';
        $I->AddNewReservation($this->reservation);
        $I = new ClickAddEdit($scenario);
        $I->clickAddButton();
        $I = new Stop($scenario);
        $I->PauseEx();

    }

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     *  Edit data of Table ID = 1
     * check click Edit button and go to edit page, edit data chosen
     */
    public function editData(Edit $I, $scenario)
    {
        $I->wantToTest('I want to check edit data of the first reservation');
        $this->reservation['id'] = '3';
        $this->reservation['number'] = '1';
        $this->reservation['date'] = '05/21/2019';
        $this->reservation['description'] = 'we have one baby';
        $this->reservation['stTime'] = '18';
        $I->editData($this->reservation);
        $I = new ClickAddEdit($scenario);
        $I->clickAddButton();
        $I = new Stop($scenario);
        $I->PauseEx();
    }

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     *  Reload data of Home Page
     */
    public function reloadData(Home $I, $scenario)
    {
        $I->wantToTest('I want to reload data of Page');
        $I->reloadData();
        $I = new Stop($scenario);
        $I->PauseEx();
    }

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     * delete data of current first reservation and current second reservation
     */
    public function deleteDataLine1(Home $I, $scenario)
    {
        $I->wantToTest('I want to delete data of current first and second reservation');
        $I->deleteData();
        $I = new Stop($scenario);
        $I->PauseEx();
    }

    /**
     * @param Home $I
     * @param $scenario
     * @throws Exception
     * check clear data of Booking Form
     */
     public function clearData(Home $I, $scenario)
     {
         $I->goToCreate();
         $I->wantToTest('I want to clear data input after entered');
         $I = new NewS($scenario);
         $I->AddNewReservation($this->reservation);
         $I = new Home($scenario);
         $I->clearData();
         $I = new Stop($scenario);
         $I->PauseEx();
     }
}
