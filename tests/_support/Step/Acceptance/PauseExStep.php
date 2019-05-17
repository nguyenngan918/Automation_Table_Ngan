<?php
namespace Step\Acceptance;

class PauseExStep extends \AcceptanceTester
{
    /**
     * pause display
     */
    public function PauseEx()
    {
        $I = $this;
        $I->pause();
    }
}