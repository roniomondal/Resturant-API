<?php
namespace App\Observers;

use App\Order;

class OrderObserver
{
    
    /**
     * Listen to the Order creating event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function creating(Order $Order)
    {
        //code...
    }

     /**
     * Listen to the Order created event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function created(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order updating event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function updating(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order updated event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function updated(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order saving event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function saving(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order saved event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function saved(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order deleting event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function deleting(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order deleted event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function deleted(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order restoring event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function restoring(Order $Order)
    {
        //code...
    }

    /**
     * Listen to the Order restored event.
     *
     * @param  Order  $Order
     * @return void
     */
    public function restored(Order $Order)
    {
        //code...
    }
}