<?php
namespace App\Observers;

use App\menu;

class menuObserver
{
    
    /**
     * Listen to the menu creating event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function creating(menu $menu)
    {
        //code...
    }

     /**
     * Listen to the menu created event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function created(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu updating event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function updating(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu updated event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function updated(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu saving event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function saving(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu saved event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function saved(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu deleting event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function deleting(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu deleted event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function deleted(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu restoring event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function restoring(menu $menu)
    {
        //code...
    }

    /**
     * Listen to the menu restored event.
     *
     * @param  menu  $menu
     * @return void
     */
    public function restored(menu $menu)
    {
        //code...
    }
}