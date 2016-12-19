<?php
namespace App\Observers;

use App\Charges;

class ChargesObserver
{
    
    /**
     * Listen to the Charges creating event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function creating(Charges $Charges)
    {
        //code...
    }

     /**
     * Listen to the Charges created event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function created(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges updating event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function updating(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges updated event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function updated(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges saving event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function saving(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges saved event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function saved(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges deleting event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function deleting(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges deleted event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function deleted(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges restoring event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function restoring(Charges $Charges)
    {
        //code...
    }

    /**
     * Listen to the Charges restored event.
     *
     * @param  Charges  $Charges
     * @return void
     */
    public function restored(Charges $Charges)
    {
        //code...
    }
}