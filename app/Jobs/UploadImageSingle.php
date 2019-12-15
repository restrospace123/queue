<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Model\Customers;

class UploadImageSingle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $image;
    public $tries = 10;
    public $timeout = 200;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($image)
    {
        $this->image = $image;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
            $customers  = new Customers;
            $data       = $customers->find($this->image['customer_id']);
            $data->name = 'Test Queue';
            $data->save();
    }

    public function retryUntil()
    {
        return now()->addSeconds(5);
    }
}
