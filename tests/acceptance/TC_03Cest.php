<?php 
use Step\Acceptance\HomeStep as Home;
use Step\Acceptance\PauseExStep as Stop;
class TC_03Cest
{
    // tests
    /**
     * @param Home $I
     * @throws Exception
     * check click on [1] button change Table
     */
    public function changeTable1( Home $I, $scenario)
    {
        $I->clickTable1();
        $I = new Stop($scenario);
        $I->PauseEx();
    }

    /**
     * @param Home $I
     * @throws Exception
     * check click on [2] button change Table
     */
    public function changeTable2( Home $I, $scenario)
    {
        $I->clickTable2();
        $I = new Stop($scenario);
        $I->PauseEx();
    }
}
