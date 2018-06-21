@extends('layouts.app')

@section('title', '我的收藏 | ')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">我的收藏</div>
            <div class="panel-body">
                <div class="row products-list">
                    @foreach($products as $product)
                        <div class="col-xs-12 col-sm-4 col-md-3 product-item">
                            <div class="product-content">
                                <div class="top">
                                    <div class="img">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                            <img src="{{ $product->image_url }}" alt="">
                                        </a>
                                    </div>
                                    <div class="price"><b>￥</b>{{ $product->price }}</div>
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a>
                                </div>
                                <div class="bottom">
                                    <div class="sold_count">销量 <span>{{ $product->sold_count }}笔</span></div>
                                    <div class="review_count">评价 <span>{{ $product->review_count }}</span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pull-right">{{ $products->render() }}</div>
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
    </script>
@endpush