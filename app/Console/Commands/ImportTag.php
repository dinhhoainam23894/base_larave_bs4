<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class ImportTag extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:tag';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	    $s = $f = 0;
    	Tag::unguard();
        \DB::connection('_mysql')->table('tags')->chunkById(10, function($tags) use (&$s,&$f){
        	foreach ($tags as $tag){
        		try{
					Tag::create((array)$tag);
			        $s++;
		        }catch (\Exception $ex){
        			$f++;
		        }
	        }
        });
	    Tag::reguard();
	    $this->info("Done s/f " . $s . "/" . $f);
    }
}
