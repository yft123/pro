@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>分类列表</h3>
@endsection

@section('content')
<div class="panel panel-default">                      
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            
       <div class="row">
        <div class="col-sm-12">
        <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
            <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 175px;">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 202px;">标题</th> 
                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">操作</th>
                </tr>
            </thead>
            <tbody>
              @if(count($cates) > 0)
                @foreach($cates as $k=>$v)         
                <tr class="gradeA odd" role="row">
                  <td class="sorting_1">{{$v->id}}</td>
                  <td>{{$v->name}}</td>

                  <td class="center">
                    <a class="btn btn-danger pull-left" href="/cate/{{$v->id}}/edit">修改</a>
                      <form class="del" action="/cate/{{$v->id}}" method="post">
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                    <button class="btn btn-primary">删除</button>
                      </form>
                 </td>
                </tr>
                @endforeach
              @else
              <tr><td colspan="5" class="text-center">暂无数据</td></tr>
            @endif
        </tbody>
        </table>
    </div>
</div>
  </div>      
</div>
@endsection

@section('js')
<script>
  $('.del').submit(function(){
    if(!confirm('您确定要删除该分类么?')) return false;
  });
</script>
@endsection






