<?php namespace Mrcore\Appstub\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\DispatchesJobs;

abstract class Job
{
	use InteractsWithQueue, Queueable, SerializesModels, DispatchesJobs;
}
