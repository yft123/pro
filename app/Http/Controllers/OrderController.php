<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yansongda\Pay\Pay;
use DB;

class OrderController extends Controller
{
    protected $config = [
        'alipay' => [
            'app_id' => '2016083101829857',
            'notify_url' => 'http://projects.com/order',
            'return_url' => 'http://projects.com/order',
            'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAkjHkm7K67KSRm0NuF3mHzfCuI9ObwFVR/CSOhuKaT5DhDOvb1c4rsO7rRgPFD/Zgl5KOUTlV+1yPK/HvMfw0LQIoCbXXIv5ubRhQB1b3NCM6nN0EyyeAekaa6Y9aMOtD42/B50RJC6mQH2bnCHuoIgPGYZlsvQAa1ZEDwO87iV7ptXiSGVcJpQi1Gx2rkuh02oPzpRSH1yS/iyrvd80YpjrxqmWDRC8nWdRTZepw2AO6LxoSX2sIji+t7sXuThT37AJnmZcFATQwujhRzhfvJHFYxPKB2wLOzXtlyYq03ukbbsQI6BR4HKVelFgsxo4G6hGjzy8E+AOeoXeeQGY6qQIDAQAB',
            'private_key' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCSMeSbsrrspJGbQ24XeYfN8K4j05vAVVH8JI6G4ppPkOEM69vVziuw7utGA8UP9mCXko5ROVX7XI8r8e8x/DQtAigJtdci/m5tGFAHVvc0Izqc3QTLJ4B6Rprpj1ow60Pjb8HnREkLqZAfZucIe6giA8ZhmWy9ABrVkQPA7zuJXum1eJIZVwmlCLUbHauS6HTag/OlFIfXJL+LKu93zRimOvGqZYNELydZ1FNl6nDYA7ovGhJfawiOL63uxe5OFPfsAmeZlwUBNDC6OFHOF+8kcVjE8oHbAs7Ne2XJirTe6RtuxAjoFHgcpV6UWCzGjgbqEaPPLwT4A56hd55AZjqpAgMBAAECggEAMVrQr9OmEW/5jC42g4xO0bK4R3YP9d2YAQSibV0g9U2W/JK/s62XyHLQUOHC7IGj2GfszfUKVwLHfvF9bCWVw8Afni+agsDcrM3xbpjoedyO1Bg1nxQl5qHheIohy7QRRj4beyTteBd1hXRq+M0uVNVratWuBRx88q6zUrYxJk22/QKlLZ77vadvQeRz3bFnpNPUrWiYhzxn03i5nhOF8N3FkybWstVfRDa/d5QueHybmP9y18IDKYTterdxYey3MAWS2+cVCmMcUzrjerwNwvB7RhMgYX5AVeNTz1EmptrC8sY3ph/qYirUITSPqXMpECfnk9huSuUz8eBPFthFUQKBgQDDul4ISL5umCf8wQjhVhdDlJ5SOAxf7dTN9S5SWxg/0VwuuAkkUZwGlBsbsU0BQj+KTIRVnCcq3ccHFLBvh5wfw1wh3NSIvcsEvSo+fAi0Ucbmqhx0R4mhjPvDkRio0yVLUuBwROF8MNdoDRswfNDEJX5MLRRWjPU6c2DtPBn8zQKBgQC/Nrs3phVyz9c7tZi7ioujN8OGrvVF/EEQKyAuR4oMDNcwcL3vpFhNRCTZ6Qix6WLmeVxz+y0PqwQOilQdQPsMGjNXwkSb+RRT6i5Km/1V+q+Otmj7q00v70nMj78MxlwJzjC+hv65qrG3NqQO4cSLW7kTw0nmQRV2e90JFDn1TQKBgQCjKC0QjMsp1+6ldKiZZrGX5UCg2xX9tX0KftKxVjx9nmFQlJsSSnFczoNWb1L4tKfQ+n3p+3Ru+FbboTR+lDXiCHE5zSLiJgwhlCqt0alT30OFrtJvX97r62FHoiFDQle5VYnALLsmUnSNyTccET/Z8kM47u8gQvp9Uga/W7VyFQKBgQC1swiMhOH0y9O3BYUxESJH4wGFxlOEQYSCHLjjwU9IzBrgCQIz6nOOWKa7+1kr1p8Ia2KTQ6c6MEQWnRP5CHqGsY8AYbZYkIPkia+bbkd5oFGax3NTUyBx4Gy8Wgwt04A6QRjIs/bx72YYt2+GRLtDwdFJGlXq2wXOJT2RFwtMMQKBgBJwW3QiPpoLPp3itGiVYXOtby84/aw0a8tvqOHaAueK6H3tf2LkXT+k/iq2xq3QOLLX/NTmb2oE69SNNQ6qliZlSHZg1PGFY8K0TKbUeWpXf4MHzM3kTSB4C2GA9siRAHPoTY3qT85641jhMe1LU1qd7tv3w8FFaG2ndmCI/qJp',
        ],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data['address_id'] = $request->address_id;
        //

        $data['user_id'] = session('id');
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $data['num'] = time().rand(100000,999999);
        $data['danhao'] = time().rand(100000,999999);
        //插入主表
        $id = DB::table('dingdans')->insertGetId($data);
        //插入订单的商品表
        $goods = [];
        foreach($request->data as $k=>$v) {
            $tmp = [
                'dingdan_id' => $id,
                'goods_id' => $v['id'],
                'goods_num' => $v['num']
            ];
            $goods[] = $tmp;
        }

        if(DB::table('dingdans_goods')->insert($goods)) {
            //跳转结算
            return redirect('/order/pay?did='.$data['num']);
        }else{
            return back()->with('msg','订单创建失败!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         if(DB::table('address')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }

    public function confirm(Request $request)
    {
        $address = DB::table('address')->where('user_id', session('id'))->get();
        foreach ($address as $key => &$value) {
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');
        }
        
        $data = $request->data;
        $goodsData = [];
        $total = 0;
        foreach ($data as $key => $value) {
            if(isset($value['id'])) {
                //读取商品的详细信息
                $goods = DB::table('goods')->where('id',$value['id'])->first();
                //读取商品的图片信息
                $goods->pic = DB::table('goods_pic')->where('goods_id', $value['id'])->value('pic');
                $goods->num = $value['num'];
                $goodsData[] = $goods;
                $total += $goods->num * $goods->price;
            }
        }

        return view('home.order.confirm',compact('address','goodsData','total'));
    }

    public function pay(Request $request)
    {
        //支付
        $did = $request->did;
        //获取订单的信息
        $dingdan = DB::table('dingdans')->where('num', $did)->first();
        //计算商品的总价
        $goods = DB::table('dingdans_goods')->where('dingdan_id', $dingdan->id)->get();
        $total = 0;
        foreach ($goods as $key => $value) {
            $price = DB::table('goods')->where('id', $value->goods_id)->value('price');
            $total += $price * $value->goods_num;

        }

        //支付
       $config_biz = [
            'out_trade_no' => $did,
            'total_amount' => '0.01',
            'subject'      => '小米商城',
        ];

        $pay = new Pay($this->config);

        return $pay->driver('alipay')->gateway()->pay($config_biz);


    }
}
