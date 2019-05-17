<?php
namespace Page\Acceptance;

class FormPage
{
    // include url of current page
    public static $URL = '/QATest/reservationform';

    /**
     * @var string of Id field in Booking Form
     */
    public static $tableIdInput =   '//input[@id="tableID"]';
    /**
     * @var string of number field in Booking Form
     */
    public static $numOfPerInput =   '//input[@id="numberofperson"]';
    /**
     * @var string of date field in Booking Form
     */
    public static $dateInput    =   '//input[@id="date"]';
    /**
     * @var string of description field in Booking Form
     */
    public static $decripInput  =   '//textarea[@id="description"]';
    /**
     * @var string of start time field in Booking Form
     */
    public static $startTimeInput =   '//input[@id="startTime"]';

    /**
     * @var string of [add/edit] button
     */
    public static $btnAddEdit   =   '//input[@class="t-beaneditor-submit"]';

    /**
     * @var string of clear tag
     */
    public static $clear    =   "//a[text()=\"clear\"]";

    /**
     * @param $param
     * @return string I see when i am on Reservationform Page
     */
    public static $textForm =   '//body//h1[text()=" Table Booking Form"]';

}
