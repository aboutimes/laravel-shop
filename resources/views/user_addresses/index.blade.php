@extends('layouts.app')

@section('title', '收货地址 | ')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">收货地址列表</div>
        <div class="panel-body">
            {{--<div class="col-lg-12">--}}
                <a href="{{route('user_addresses.create')}}" class="btn btn-primary btn-sm">
                    新增地址
                </a>
            {{--</div>--}}
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>收货人</th>
                    <th>收货地址</th>
                    <th>邮编</th>
                    <th>电话</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @if($addresses)
                    @foreach($addresses as $address)
                        <tr>
                            <td>{{ $address->contact_name }}</td>
                            <td>{{ $address->full_address }}</td>
                            <td>{{ $address->zip }}</td>
                            <td>{{ $address->contact_phone }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('user_addresses.edit', ['user_address' => $address->id]) }}"
                                   class="btn btn-primary btn-sm">
                                    修改
                                </a>
                                <button class="btn btn-danger btn-del-address btn-sm" type="button" data-id="{{ $address->id }}">
                                    删除
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
      $(document).ready(function() {
        // 删除按钮点击事件
        $('.btn-del-address').click(function() {
          // 获取按钮上 data-id 属性的值，也就是地址 ID
          var id = $(this).data('id');
          // 调用 sweetalert
          swal({
            title: "确认要删除该地址？",
            icon: "warning",
            buttons: ['取消', '确定'],
            dangerMode: true,
          })
            .then(function(willDelete) { // 用户点击按钮后会触发这个回调函数
              // 用户点击确定 willDelete 值为 true， 否则为 false
              // 用户点了取消，啥也不做
              if (!willDelete) {
                return;
              }
              // 调用删除接口，用 id 来拼接出请求的 url
              axios.delete('/user_addresses/' + id)
                .then(function () {
                  // 请求成功之后重新加载页面
                  location.reload();
                })
            });
        });
      });
    </script>
@endpush