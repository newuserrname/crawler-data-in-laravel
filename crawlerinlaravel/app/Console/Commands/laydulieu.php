<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\laydulieutext;

class laydulieu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //thay tên tùy thích
    protected $signature = 'laydulieu:truyen';

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
     * @return int
     */
    public function handle()
    {
        $dom = file_get_html('https://www.truyenngan.com.vn/truyen-dan-gian/truyen-co-tich/46356-cau-be-tich-chu.html');    
        $truyen = $dom->find('.maincontent p');
        $noichuoi = "";
        $gettruyen = array();
        foreach ($truyen as $key => $value) {
            $gettruyen['texttruyen'] = $noichuoi = $noichuoi . " " . $value ->innertext;
            // $gettruyen[] = $noichuoi;
        }
        // luu vao db
        foreach ($gettruyen as $key => $value) {
                    laydulieutext::create(['texttruyen'=>$value]);
                }        
        // print_r($gettruyen);
        
    }
}
