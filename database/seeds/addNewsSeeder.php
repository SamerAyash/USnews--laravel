<?php

use Illuminate\Database\Seeder;
use Intervention\Image\Facades\Image;
use \Illuminate\Support\Facades\Hash;
class addNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();

        for ($i = 1; $i <= 50; $i++) {
            $image=$faker->image();
            $imageName=time().'.jpg';
            Image::make($image)
                ->save(public_path('control/images/authors_images/'.$imageName))->resize(600);

            $user=\App\User::create([
            'name'=>$faker->userName,
            'email'=>$faker->email,
            'image'=>$imageName,
            'about'=>$faker->domainWord,
            'password'=>Hash::make('12345678'),
        ]);
        $user->save();
        $user->assignRole('publisher');
        $user->givePermissionTo('active');
        $user->givePermissionTo('trust');
    }


        for ($i=1;$i <= 100; $i++){

        $image =$faker->image();
        $imageName=time().'.jpg';
            Image::make($image)
                ->save(public_path('control/images/news_images/'.$imageName))->resize(600);

        $news=\App\news::create([
            'title'=>$faker->domainWord,
            'topic'=>$faker->realText(),
            'image'=>$imageName,
            'acceptable'=>'1',
            'user_id'=>\App\User::inRandomOrder()->first()['id'],

        ]);
        $news->save();
            for ($j=1;$j <= 3 ; $j++){
            $news_types=new \App\news_types();
             $news_types['news_id']=$news->id;
            $news_types['type_id']=\App\types::inRandomOrder()->first()['id'];
            $news_types->save();}
    }


    }
}
