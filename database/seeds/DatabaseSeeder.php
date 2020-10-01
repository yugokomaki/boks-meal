<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\Product;
use App\User;
use App\Slider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Category::create(['name'=>'フライパン', 'slug'=>'フライパン', 'description'=>'フライパンで作る料理', 'image'=>'files/frypan.png' ]);
        Category::create(['name'=>'鍋', 'slug'=>'鍋', 'description'=>'鍋で作る料理', 'image'=>'files/nabe.png' ]);
        Category::create(['name'=>'レンジ', 'slug'=>'レンジ', 'description'=>'レンジで作る料理', 'image'=>'files/lenji.png' ]);
        Category::create(['name'=>'オーブントースター', 'slug'=>'オーブントースター', 'description'=>'オーブントースターで作る料理', 'image'=>'files/oven.png' ]);
        Category::create(['name'=>'炊飯器', 'slug'=>'炊飯器', 'description'=>'炊飯器で作る料理', 'image'=>'files/suihanki.png' ]);
        Category::create(['name'=>'ボウル', 'slug'=>'ボウル', 'description'=>'ボウルで作る料理', 'image'=>'files/bowl.png' ]);

        Subcategory::create(['name'=>'フライパン肉', 'category_id'=>1]);
        Subcategory::create(['name'=>'フライパン魚', 'category_id'=>1]);
        Subcategory::create(['name'=>'フライパン野菜', 'category_id'=>1]);
        Subcategory::create(['name'=>'フライパンごはん', 'category_id'=>1]);
        Subcategory::create(['name'=>'フライパン麺', 'category_id'=>1]);
        Subcategory::create(['name'=>'フライパンその他', 'category_id'=>1]);
        Subcategory::create(['name'=>'鍋肉', 'category_id'=>2]);
        Subcategory::create(['name'=>'鍋魚', 'category_id'=>2]);
        Subcategory::create(['name'=>'鍋野菜', 'category_id'=>2]);
        Subcategory::create(['name'=>'鍋ごはん', 'category_id'=>2]);
        Subcategory::create(['name'=>'鍋麺', 'category_id'=>2]);
        Subcategory::create(['name'=>'鍋その他', 'category_id'=>2]);
        Subcategory::create(['name'=>'レンジ肉', 'category_id'=>3]);
        Subcategory::create(['name'=>'レンジ魚', 'category_id'=>3]);
        Subcategory::create(['name'=>'レンジ野菜', 'category_id'=>3]);
        Subcategory::create(['name'=>'レンジごはん', 'category_id'=>3]);
        Subcategory::create(['name'=>'レンジ麺', 'category_id'=>3]);
        Subcategory::create(['name'=>'レンジその他', 'category_id'=>3]);
        Subcategory::create(['name'=>'オーブン肉', 'category_id'=>4]);
        Subcategory::create(['name'=>'オーブン魚', 'category_id'=>4]);
        Subcategory::create(['name'=>'オーブン野菜', 'category_id'=>4]);
        Subcategory::create(['name'=>'オーブンごはん', 'category_id'=>4]);
        Subcategory::create(['name'=>'オーブン麺', 'category_id'=>4]);
        Subcategory::create(['name'=>'オーブンその他', 'category_id'=>4]);
        Subcategory::create(['name'=>'炊飯器肉', 'category_id'=>5]);
        Subcategory::create(['name'=>'炊飯器魚', 'category_id'=>5]);
        Subcategory::create(['name'=>'炊飯器野菜', 'category_id'=>5]);
        Subcategory::create(['name'=>'炊飯器ごはん', 'category_id'=>5]);
        Subcategory::create(['name'=>'炊飯器麺', 'category_id'=>5]);
        Subcategory::create(['name'=>'炊飯器その他', 'category_id'=>5]);
        Subcategory::create(['name'=>'ボウル肉', 'category_id'=>6]);
        Subcategory::create(['name'=>'ボウル魚', 'category_id'=>6]);
        Subcategory::create(['name'=>'ボウル野菜', 'category_id'=>6]);
        Subcategory::create(['name'=>'ボウルごはん', 'category_id'=>6]);
        Subcategory::create(['name'=>'ボウル麺', 'category_id'=>6]);
        Subcategory::create(['name'=>'ボウルその他', 'category_id'=>6]);
        

        Product::create([
            'name'=>'モヤシの爆弾',
            'image'=>'product/moyashi.png',
            'price'=>500,
            'description'=>'モヤシをつなぎにするとザクザクで超旨いハンバーグの出来上がり',
            'additional_info'=>'豚ひき肉　　 170g<br>
            モヤシ　　　　　 100g<br>
            塩　　　　　　 　少々<br>
            黒コショウ　　　 適量<br>
            創味シャンタン 　小さじ1/2<br>
            ゴマ油　　　　 大さじ１',
            'category_id'=>1,
            'subcategory_id'=>1,
        ]);
        Product::create([
            'name'=>'エビのアボカドタルタル添え',
            'image'=>'product/ebi.png',
            'price'=>600,
            'description'=>'アボカドを使ったタルタルソースを海老のソテーとコラボ',
            'additional_info'=>'冷凍むきエビ　１５０ｇ<br>
            ゆで卵　１個<br>
            アボカド　1/2個<br>
            マヨネーズ　大さじ１<br>
            塩コショウ　適量<br>
            片栗粉　適量',
            'category_id'=>1,
            'subcategory_id'=>2,
        ]);
        Product::create([
            'name'=>'ネギ塩牛タン風シイタケ',
            'image'=>'product/shiitake.png',
            'price'=>400,
            'description'=>'まるで牛タン、でもヘルシー',
            'additional_info'=>'シイタケ　4個<br>
            長ネギ　1/2本<br>
            サラダ油　小さじ1<br>
            塩コショウ　適量<br>
            うま味調味料　小さじ1/4<br>
            塩　小さじ1/4<br>
            コショウ　適量<br>
            ゴマ油　大さじ1',
            'category_id'=>1,
            'subcategory_id'=>3,
        ]);
        Product::create([
            'name'=>'トロなす豚丼',
            'image'=>'product/nasu.png',
            'price'=>500,
            'description'=>'特製ダレの染みたナスと豚でご飯があっというまになくなります',
            'additional_info'=>'ご飯…1杯分<br>
            豚こま肉…100g<br>
            ナス…1本<br>
            片栗粉…小さじ2<br>
            塩コショウ…適量<br>
            ゴマ油…大さじ1<br>
            焼き肉のタレ、ポン酢…各大さじ1<br>
            卵黄…1個分<br>
            万能ネギ、七味唐辛子、ゴマ…各適量',
            'category_id'=>1,
            'subcategory_id'=>4,
        ]);
        Product::create([
            'name'=>'至高のジャージャー麺',
            'image'=>'product/jaja.png',
            'price'=>450,
            'description'=>'この一皿を味わうだけのために甜麺醤を買う価値あります',
            'additional_info'=>'豚ひき肉　　　　100g<br>
            油　　　　　　　大さじ1/2<br>
            シイタケ　　　　30g<br>
            タケノコ　 　　 40g<br>
            長ネギ　　　　　30g<br>
            甜麺醤　　　　　大さじ2弱<br>
            水　　　　　　　80cc<br>
            酒　　　　　　　大さじ1<br>
            創味シャンタン　小さじ1/2<br>
            しょうゆ　　　　小さじ1<br>
            砂糖 　　　　　 小さじ1<br>
            おろしニンニク　1片<br>
            中華麺　 　　　 130g<br>
            キュウリ　　　　1/2本<br>
            水溶き片栗粉　　片栗粉小さじ1と1/2を倍量の水で溶いたもの<br>
            ラー油　　　　　 小さじ2',
            'category_id'=>1,
            'subcategory_id'=>5,
        ]);
        Product::create([
            'name'=>'豆腐ペペロンチーノ',
            'image'=>'product/tofu.png',
            'price'=>350,
            'description'=>'豆腐は炒めるだけでここまで旨くなる…',
            'additional_info'=>'絹豆腐　300g<br>
            ベーコン　40g<br>
            オリーブオイル　大さじ1半<br>
            ニンニク　2片<br>
            唐辛子　1本<br>
            コンソメ　小さじ1<br>
            塩　少々<br>
            黒コショウ　少々',
            'category_id'=>1,
            'subcategory_id'=>6,
        ]);
        Product::create([
            'name'=>'無水油鍋',
            'image'=>'product/musui.png',
            'price'=>450,
            'description'=>'鍋の常識が変わるくらい香りとコク、旨みが半端ない',
            'additional_info'=>'炒め白菜　250g<br>
            豚バラ　200g<br>
            ゴマ油　大さじ3<br>
            ニンニク　2片<br>
            酒大さじ　3<br>
            白だし　大さじ1<br>
            ポン酢　多め',
            'category_id'=>2,
            'subcategory_id'=>7,
        ]);
        Product::create([
            'name'=>'フォルマッジョうどん',
            'image'=>'product/udon.png',
            'price'=>350,
            'description'=>'物凄ーく美味しい濃厚チーズソースうどん',
            'additional_info'=>'冷凍うどん　　　　1玉<br>
            ベーコン　　　 　40ｇ<br>
            牛乳　　　　　　　80㏄<br>
            とろけるチーズ　　50ｇ<br>
            バター　　　　　　10ｇ<br>
            コンソメ　　　　　小さじ1<br>
            ブラックペッパー、乾燥パセリ　各適量',
            'category_id'=>3,
            'subcategory_id'=>17,
        ]);
        Product::create([
            'name'=>'ネギしらすチーズトースト',
            'image'=>'product/toast.png',
            'price'=>400,
            'description'=>'ネギの爽やかさとオリーブオイルの香りでシンプルに仕上げました',
            'additional_info'=>'6枚切りの食パン 1枚<br>
            ピザチーズ 35g<br>
            長ネギ 1/4本(25g)<br>
            シラス 20g<br>
            塩、コショウ 適量<br>
            オリーブオイル 小さじ1と1/2',
            'category_id'=>4,
            'subcategory_id'=>20,
        ]);
        Product::create([
            'name'=>'バターしょうゆサツマイモご飯',
            'image'=>'product/satumaimo.png',
            'price'=>400,
            'description'=>'サツマイモとバターしょうゆの香りが秋の食欲を暴走させる',
            'additional_info'=>'米　1合<br>
            白だし　小2<br>
            酒　小1<br>
            サツマイモ　120g<br>
            バター　8g<br>
            しょうゆ　小1',
            'category_id'=>5,
            'subcategory_id'=>27,
        ]);
        Product::create([
            'name'=>'悪魔の壺ニラ',
            'image'=>'product/nira.png',
            'price'=>300,
            'description'=>'自宅でラーメン屋さんのトッピング味',
            'additional_info'=>'ニラ1袋　100g<br>
            みそ　小2<br>
            しょうゆ　小1<br>
            塩　小1/4<br>
            味の素　小1/3<br>
            一味唐辛子　小1/2<br>
            ゴマ油　小2<br>
            おろしニンニク　少々',
            'category_id'=>6,
            'subcategory_id'=>33,
        ]);

        Slider::create([
        	'image'=>'slider/mealkit.png'
        ]);

        Slider::create([
        	'image'=>'slider/recipe.png'
        ]);
        

        User::create([
        	'name'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt('admin'),
        	'email_verified_at'=>NOW(),
        	'address'=>'Tokyo',
        	'phone_number'=>'0123456',
        	'is_admin'=>1
        ]);
    }
}
