<?php 
use Step\Acceptance\HomeStep as Home;
class TC_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function changeTable1( Home $I)
    {
        $I->clickTable1();
    }

    public function changeTable2( Home $I)
    {
        $I->clickTable2();
    }
}
