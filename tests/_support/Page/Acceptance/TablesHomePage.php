<?php
namespace Page\Acceptance;

class TablesHomePage
{
    // include url of current page
    public static $URL    =   '';

    /**
     * @var string : button change Table 1
     */
    public static $table1 =   '//span[@class="current"]';
    /**
     * @var string: button change Table 2
     */
    public static $table2 =   '//a[@title="Go to page 2"]';

    /**
     * @var string of id sort icon
     */
    public static $idSortIcon   =   '//img[@id="id:sort"]';
    /**
     * @var string of type sort icon
     */
    public static $typeSortIcon =   '//img[@id="type:sort"]';
    /**
     * @var string of table id sort icon
     */
    public static $tableIdSortIcon  =   '//img[@id="tableID:sort"]';
    /**
     * @var string of number of person sort icon
     */
    public static $numOPSortIcon    =   '//img[@id="numberofperson:sort"]';
    /**
     * @var string of date sort icon
     */
    public static $dateSortIcon     =   '//img[@id="date:sort"]';
    /**
     * @var string of description sort icon
     */
    public static $descripSortIcon  =   '//img[@id="description:sort"]';
    /**
     * @var string of duration sort icon
     */
    public static $durationSortIcon =   '//img[@id="duration:sort"]';
    /**
     * @var string of start time sort icon
     */
    public static $startTimeSortIcon =   '//img[@id="startTime:sort"]';
    /**
     * @var string of delete sort icon
     */
    public static $deleteSortIcon   =   '//img[@id="delete:sort"]';
    /**
     * @var string of edit sort icon
     */
    public static $editSortIcon     =   '//img[@id="edit:sort"]';


}
