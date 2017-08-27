<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class HelloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name=Name} {--L|lastname=Lastname}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This  is test command';

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
        // Get all this arguments and options
//        $this->info(
//            \GuzzleHttp\json_encode([
//                'arguments' => $this->arguments(),
//                'options' => $this->options()
//            ])
//        );

        // Get by name argument or option
//        $name = $this->argument('name');
//        $l_name = $this->option('lastname');

        // Print info to console
//        $this->info("Hello {$name} {$l_name}");

        // Get value from console
//        $name = $this->ask('What is your name?');
//        $confirm = $this->confirm('Do you want to print yor name?');
//
//        if ($confirm)
//            $this->error($name); // Print error message to console

        // Print table to console
        $header = [
            "Name",
            "E-Mail"
        ];

        $users = User::select('name', 'email')->get();

        $this->table($header, $users);
    }
}
