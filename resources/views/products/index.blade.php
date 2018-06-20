@extends('layouts.app')

@section('title', '商品列表 | ')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                {{-- 筛选组件开始 --}}
                <div class="row">
                    <form action="{{ route('products.index') }}" class="form-inline search-form" id="search_form">
                        <select name="order" class="form-control input-sm" id="order_select">
                            <option {{ $filters['order']==''?'selected':'' }} value="">排序方式</option>
                            <option {{ $filters['order']=='price_asc'?'selected':'' }} value="price_asc">价格从低到高</option>
                            <option {{ $filters['order']=='price_desc'?'selected':'' }} value="price_desc">价格从高到低</option>
                            <option {{ $filters['order']=='sold_count_desc'?'selected':'' }} value="sold_count_desc">销量从高到低</option>
                            <option {{ $filters['order']=='sold_count_asc'?'selected':'' }} value="sold_count_asc">销量从低到高</option>
                            <option {{ $filters['order']=='rating_desc'?'selected':'' }} value="rating_desc">评价从高到低</option>
                            <option {{ $filters['order']=='rating_asc'?'selected':'' }} value="rating_asc">评价从低到高</option>
                        </select>
                        <span class="pull-right">
                            <input type="text" class="form-control input-sm" name="search"
                                   value="{{ $filters['search']?$filters['search']:null }}"
                                   placeholder="搜索">
                            <button class="btn btn-primary btn-sm">搜索</button>
                        </span>
                    </form>
                </div>
                {{-- 筛选组件结束 --}}
                <div class="row products-list">
                    @foreach($products as $product)
                        <div class="col-xs-12 col-sm-4 col-md-3 product-item">
                            <div class="product-content">
                                <div class="top">
                                    <div class="img"><img src="{{ $product->image_url }}" alt=""></div>
                                    <div class="price"><b>￥</b>{{ $product->price }}</div>
                                    <div class="title">{{ $product->title }}</div>
                                </div>
                                <div class="bottom">
                                    <div class="sold_count">
                                        销量 <span>{{ $product->sold_count }}笔</span>
                                    </div>
                                    <div class="review_count">
                                        评价 <span>{{ $product->review_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- 分页 --}}
                <div class="pull-right">{{ $products->appends($filters)->render() }}</div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function equalHeight(e) {
          // 设置元素等高
          const box = document.getElementsByClassName(e);
          let max = box[0];
          for (let i = 1, l = box.length; i < l; i++) {
            // 取最高元素高度值
            if (box[i].offsetHeight > max.offsetHeight) { max = box[i]; }
          }
          // console.log('max=' + max.offsetHeight);
          for (let j = 0, l = box.length; j < l; j++ ) {
            box[j].style.height = max.offsetHeight + 'px';
          }
        }

        window.onload = equalHeight('img');

        window.onresize = function we() {
          const imgDom = document.getElementsByClassName('img');
          // 处理缩小窗口时高度仍为最大
          for (let j = 0, l = imgDom.length; j < l; j++ ) {
            imgDom[j].style.height = 'auto';
          }
          equalHeight('img');
        };

        const order_select = document.getElementById('order_select');
        const search_form = document.getElementById('search_form');
        // 排序选中提交
        order_select.onchange = function () {
          search_form.submit();
        }
    </script>
@endpush
