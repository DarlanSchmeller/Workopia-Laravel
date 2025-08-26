<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $originalLogosFolder = public_path('logos');
        $logoStorageFolder = storage_path('app/public/logos');

        // Make sure destination exists
        if (!File::exists($logoStorageFolder)) {
            File::makeDirectory($logoStorageFolder, 0755, true);
        }

        // Copy all files from public/logos to storage/app/public/logos
        foreach (File::files($originalLogosFolder) as $file) {
            Storage::disk('public')->putFileAs(
                'logos',
                $file,
                $file->getFilename()
            );
        }

        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tables
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(TestUserSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
    }
}
