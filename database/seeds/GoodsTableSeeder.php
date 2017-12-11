<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
	    for ($i=0; $i < 20; $i++) { 
	    	$tmp = [
	    		'title'=>str_random(20),
	    		'price'=>rand(10,10000),
	    		'kucun'=>rand(10,100),
	    		'content'=>str_random(20),
	    		'fig'=>"<p>
					<img src='{{$faker->imageUrl(150,100)}}' />
	    		<p>",
	    		'addtime'=>date('Y-m-d H:i:s'),
	    		'status'=>1,
	    	];
	    	$id =DB::table('goods')->insertGetId($tmp);
	    	$data = [];
	    	for($j=0;$j<1;$j++){
	    		$t=[
	    			'goods_id'=>$id,
	    			'pic' =>$faker->imageUrl(150,100)
	    		];
	    		$data[]=$t;
	    	}
	    	DB::table('goods_pic')->insert($data);
	    }
    }
}
