@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>商品列表</h3>
@endsection

@section('content')
<div class="row">
	<form action="/goods" class="navbar-form">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="dataTables_length" id="dataTables-example_length">每页显示
                          <select name="num" aria-controls="dataTables-example" class="nput-sm">
                                  <option value="10" @if($num == 10) selected @endif>10</option>
                                  <option value="25" @if($num == 25) selected @endif>25</option>
                                  <option value="50" @if($num == 50) selected @endif>50</option>
                                  <option value="100" @if($num == 100) selected @endif>100</option>
                          </select>条
                      </div>
                  </div>
                  <div class="col-sm-6 text-right">
                      <div id="dataTables-example_filter" class="dataTables_filter">
                          <label>关键字:
                              <input type="search" value="{{$keywords}}" name="keywords" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"><button type="submit" class="btn btn-sm btn-info">搜索</button>
                          </label>
                      </div>
                  </div>
              </div>
          </form>
  	<div class="col-lg-12">
      	<section class="panel">          	          
          	<table class="table table-striped table-advance table-hover">
           		<tbody>
              		<tr>
              			<th> ID</th>
                    <th> 商品标题</th>
                 		<th> 头图</th>
                 		<th> 商品价格</th>
                    <th> 库存</th>
                 		<th> 內容</th>
                 		<th> 操作</th>
              		</tr>
                  @if(count($goods) > 0)
              		@foreach ($goods as $k => $v)
              		<tr class="col-md-12">
                 		<td class="col-md-2">{{$v->id}}</td>                 		
                    <td class="col-md-3">{{$v->title}}</td>
                 		<td class="col-md-3">{!!$v->fig!!}</td>
                 		<td class="col-md-3">{{$v->price}}</td>
                    <td class="col-md-1">{{$v->kucun}}</td>
                 		<td class="col-md-1">{{$v->content}}</td>
                 		<td>
                  		<div class="btn-group">
                      		<a class="btn btn-primary" href="/goods/{{$v->id}}/edit"><i class="icon_plus_alt2"></i></a>
                          	
                            <form class="del" action="/goods/{{$v->id}}" method="post" style="float:left">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                          	<button class="btn btn-danger " href="#"><i class="icon_close_alt2"></i></button>
                  		      </form>
                      </div>
                  		</td>
              		</tr>
              		@endforeach
              		@else
                  <tr><td colspan="5" class="text-center">暂无数据</td></tr>
                  @endif
	                
	              </tr>                              
           		</tbody>

        	</table>
        	<div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                {{ $goods->appends(['num'=>$num, 'keywords'=>$keywords])->links() }}
                            </div>
                        </div>
                    </div>
      	</section>
    </div>
</div>
@endsection

@section('js')
<script>
$('.del').submit(function(){
    if(!confirm('您确定要删除该用户吗?')) return false;
    
});
</script>
@endsection