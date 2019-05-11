<?php
namespace Page\Acceptance;

class TablesHomePage
{
    // include url of current page
    public static   $URL            =   '';

    public static   $table1         =   '//span[@class="current"]';
    public static   $table2        =   '//a[@title="Go to page 2"]';
    /**
     * @var string xpath before click on text header of table
     */
    public static   $idAvailable    =   '//th[@class="id t-first"]';
    public static   $typeAvailable  =   '//th[@class="type t-last"]';
    public static   $tableID        =   '//th[@class="tableID t-first"]';
    public static   $numberOfPerson =   '//th[@class="numberofperson"]';
    public static   $date           =   '//th[@class="date"]';
    public static   $description    =   '//th[@class="description"]';
    public static   $duration       =   '//th[@class="duration"]';
    public static   $startTime      =   '//th[@class="startTime"]';
    public static   $delete         =   '//th[@class="delete"]';
    public static   $edit           =   '//th[@class="edit t-last"]';
    public static   $btnTable1      =   '//span[@class="current"]';
    public static   $btnTable2      =   '//a[@title="Go to page 2"]';

    /**
     * @var string xpath before click on short icon of table
     */
    public static   $idSortIcon         =   '//img[@id="id:sort"]';
    public static   $typeSortIcon       =   '//img[@id="type:sort"]';
    public static   $tableIdSortIcon    =   '//img[@id="tableID:sort"]';
    public static   $numOPSortIcon      =   '//img[@id="numberofperson:sort"]';
    public static   $dateSortIcon       =   '//img[@id="date:sort"]';
    public static   $descripSortIcon    =   '//img[@id="description:sort"]';
    public static   $durationSortIcon   =   '//img[@id="duration:sort"]';
    public static   $startTimeSortIcon  =   '//img[@id="startTime:sort"]';
    public static   $deleteSortIcon     =   '//img[@id="delete:sort"]';
    public static   $editSortIcon       =   '//img[@id="edit:sort"]';


    /**
     * @var string xpath after click on text header of table
     */
    public static   $idAvaiSort     =   '//a[@class="t-sort-column-ascending"][text()="Id"]';
    public static   $typeAvaiSort   =   '//a[@class="t-sort-column-ascending"][text()="Type"]';
    public static   $tableIDSort    =   '//a[@class="t-sort-column-ascending"][text()="Table ID"]';
    public static   $numSort        =   '//a[@class="t-sort-column-ascending"][text()="Numberofperson"]';
    public static   $dateSort       =   '//a[@class="t-sort-column-ascending"][text()="Date"]';
    public static   $descripSort    =   '//a[@class="t-sort-column-ascending"][text()="Description"]';
    public static   $durationSort   =   '//a[@class="t-sort-column-ascending"][text()="Duration"]';
    public static   $startTimeSort  =   '//a[@class="t-sort-column-ascending"][text()="Start Time"]';
    public static   $deleteSort     =   '//a[@class="t-sort-column-ascending"][text()="Delete"]';
    public static   $editSort       =   '//a[@class="t-sort-column-ascending"][text()="Edit"]';


    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
