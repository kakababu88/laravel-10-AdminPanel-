<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsPage;

class CmsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cmsPagesRecords =[
            ['id'=>1,'title'=>'About Us','description'=>'Content is coming Soon','url'=>'about-us','meta_title'=>'About Us','meta_description'=>'About Us Content','meta_keywords'=>'about us, about','status'=>1],
            ['id'=>2,'title'=>'Terms & Condition','description'=>'Content is coming Soon','url'=>'terms-conditions','meta_title'=>'Terms & Condition','meta_description'=>'Terms & Condition Content','meta_keywords'=>'terms, terms condition','status'=>1],
            ['id'=>3,'title'=>'Privecy Policy','description'=>'Content is coming Soon','url'=>'privecy-policy','meta_title'=>'Privecy Policy','meta_description'=>'Privecy Policy Content','meta_keywords'=>'Privecy Policy, policy','status'=>1],
            ['id'=>4,'title'=>'Service','description'=>'Content is coming Soon','url'=>'service','meta_title'=>'Service','meta_description'=>'Service Content','meta_keywords'=>'Service','status'=>1],

        ];
        CmsPage::insert($cmsPagesRecords);
    }
}
