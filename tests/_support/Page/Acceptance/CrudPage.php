<?php
namespace Page\Acceptance;

class CrudPage
{
    // include url of current page
    public static $URL = '/QATest';

    /**
     * @var string of create new Reservation
     */
    public static $newReservation =   '//a[text()="New Reservation"]';

    /**
     * @var string of reload before data
     */
    public static $reloadData   =   '//a[text()="Reload Data"]';

    /**
     * @var string xpath of element want to delete which is the first reservation of Table
     */
    public static $deleteData   =   '(//a[text()="Delete"])[2]';

    /**
     * @var string xpath of element want to edit which is second reservation of Table
     */
    public static $deleteData4  =   '(//a[text()="Delete"])[3]';

    /**
     * @var string xpath of element want to edit which is the first reservation of Table
     */
    public static $editData     =   '(//a[text()="Edit"])[2]';



}
