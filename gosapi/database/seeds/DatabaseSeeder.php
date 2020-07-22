<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class , 100)->create();
        factory(\App\About::class , 1)->create();
        factory(\App\AboutOne::class , 2)->create();
        factory(\App\AboutTwo::class , 1)->create();
        factory(\App\Accordion::class , 1)->create();
        factory(\App\BlogArea::class , 1)->create();
        factory(\App\Brand::class , 1)->create();
        factory(\App\BreadCrumbArea::class , 7)->create();
        factory(\App\BreadCrump::class , 6)->create();
        factory(\App\ColumnsThree::class , 1)->create();
        factory(\App\ColumnsTwo::class , 11)->create();
        factory(\App\ContactTopArea::class , 1)->create();
        factory(\App\ContactUs::class , 1)->create();
        factory(\App\CounterArea::class , 1)->create();
        factory(\App\CounterUp::class , 3)->create();
        factory(\App\FindingUs::class , 1)->create();
        factory(\App\Footer::class , 1)->create();
        factory(\App\Header::class , 1)->create();
        factory(\App\Home::class , 1)->create();
        factory(\App\InnerAbout::class , 1)->create();
        factory(\App\MapArea::class , 1)->create();
        factory(\App\NameItem::class , 1)->create();
        factory(\App\NameItemTwo::class , 1)->create();
        factory(\App\OriginalService::class , 5)->create();
        factory(\App\Post::class , 3)->create();
        factory(\App\ServiceArea::class , 1)->create();
        factory(\App\AboutCounterArea::class , 1)->create();
        factory(\App\ServiceDetails::class , 5)->create();
        factory(\App\ServiceDone::class , 5)->create();
        factory(\App\SingleService::class , 1)->create();
        factory(\App\Slider::class , 2)->create();
        factory(\App\Socila::class , 4)->create();
        factory(\App\StandardService::class , 5)->create();
        factory(\App\TeamArea::class , 1)->create();
        factory(\App\Team::class , 6)->create();
        factory(\App\Widget::class , 1)->create();
        factory(\App\WidgetThree::class , 1)->create();
        factory(\App\WidgetTwo::class , 1)->create();
        
    }
}
