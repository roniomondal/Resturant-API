<?php
namespace App\Observers;

use App\Cupon;

class CuponObserver
{
    
    /**
     * Listen to the Cupon creating event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function creating(Cupon $Cupon)
    {
        //code...
    }

     /**
     * Listen to the Cupon created event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function created(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon updating event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function updating(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon updated event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function updated(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon saving event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function saving(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon saved event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function saved(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon deleting event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function deleting(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon deleted event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function deleted(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon restoring event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function restoring(Cupon $Cupon)
    {
        //code...
    }

    /**
     * Listen to the Cupon restored event.
     *
     * @param  Cupon  $Cupon
     * @return void
     */
    public function restored(Cupon $Cupon)
    {
        //code...
    }
}