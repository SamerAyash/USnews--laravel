<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
class firstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role=\Spatie\Permission\Models\Role::class;
        $Permission=\Spatie\Permission\Models\Permission::class;
        $role1=$Role::create(['name' => 'admin']);
        $role2=$Role::create(['name'=>'publisher']);
        $permission1=$Permission::create(['name' => 'active']);
        $permission2=$Permission::create(['name' => 'trust']);

        $admin=\App\User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'about'=>'Admin Admin',
            'password'=>Hash::make('12345678'),
        ]);
        $admin->assignRole('admin');
//
        $categories=['Worlds News','National','Financial','Entertainment','lifestyle','Technology','Sports','Travel'];
        foreach ($categories as $category){
            \App\category::create([
                'name'=>$category,
            ]);}
        $types=[['LATIN AMERICA','1'],['MIDDLE EAST','1'],['SYRIAN NEWS','1'],['EUROPE','1'],['ASIA','1'],['AFRICA','1'],['WAR ON ISIS','1'],
            ['POLITICS','2'],['LAW & JUSTICE','2'],['ACCIDENT & INACCIDENT','2'],['DIPLOMACY','2'],['ADMINISTRATION','2'],['CRIME','2'],['ELECTION','2'],
            ['TRADE NEWS','3'],['MARKETS','3'],['FOREIGN NEWS','3'],['FINANCIAL ANALYSIS','3'],['MONEY FRAUD','3'],['BUDGET','3'],['TURISM INDUSTRY','3'],
            ['THEATRE & ART','4'],['FESTIVAL','4'],['CELEBRITY LIFE & STYLE','4'],['MOVIES','4'],['MUSIC','4'],['AWARDS','4'],['BOOKS & MAGAZINE','4'],
            ['HEALTH & WELLBEING','5'],['CAR & BIKE','5'],['FASHION','5'],['REAL LIFE','5'],['PARENTING','5'],['FOOD & DRINKS','5'],['HOUSE & GARDEN','5'],
            ['ONLINE','6'],['GADGETS','6'],['MULTIMEDIA','6'],['SCIENCE','6'],['RESEARCH','6'],['GAMES','6'],['AUTOMOBILE','6'],
            ['MOTOR RACING','7'],['GOLF','7'],['FOOTBALL','7'],['CRICKET','7'],['TENNIS','7'],['HORSE RACING','7'],['BOXING','7'],
            ['TRAVEL ADVICE','8'],['TRAVEL FOR EDUCATION','8'],['TRAVEL IDEAS','8'],['WORLD TRAVEL','8'],['CRUISE','8'],['TRAVEL TALK','8'],['TRAVEL NEWS','8'],
        ];

        foreach ($types as $type){
            \App\types::create([
                'name'=>$type[0],
                'category_id'=>$type[1],
            ]);}

    }
}
