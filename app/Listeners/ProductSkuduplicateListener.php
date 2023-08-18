<?php

namespace App\Listeners;

use App\Events\ProductEvent;
use App\Mail\ProductDuplicateNotification;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductSkuduplicateListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    use InteractsWithQueue;

    public function handle(ProductEvent $event)
    {
        $sku = $event->sku;
        // Logic to send email notification to the user
        \Mail::to(User::first())->send(new ProductDuplicateNotification($sku));
    }
}
