<?php

namespace Lavalite\Videos;

use DB;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('videos')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'videos.videos.view',
                'readable_name' => 'View Videos',
            ],
            [
                'name'          => 'videos.videos.create',
                'readable_name' => 'Create Videos',
            ],
            [
                'name'          => 'videos.videos.edit',
                'readable_name' => 'Update Videos',
            ],
            [
                'name'          => 'videos.videos.delete',
                'readable_name' => 'Delete Videos',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'videos.videos.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}
