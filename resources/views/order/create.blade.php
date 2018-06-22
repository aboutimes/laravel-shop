@extends('layouts.app')

@section('title', '订单确认 | ')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                订单确认
            </div>
            <div class="panel-body">
                we
                {{-- 购物车物品列表 --}}
                {{--<table class="table table-hover">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th><input type="checkbox" id="select-all"></th>--}}
                        {{--<th>商品信息</th>--}}
                        {{--<th>单价</th>--}}
                        {{--<th>数量</th>--}}
                        {{--<th>操作</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody class="product_list">--}}
                    {{--@foreach($cartItems as $item)--}}
                        {{--<tr data-id="{{ $item->productSku->id }}">--}}
                            {{--<td>--}}
                                {{--<input type="checkbox" name="select" value="{{ $item->productSku->id }}" {{ $item->productSku->product->on_sale ? 'checked' : 'disabled' }}>--}}
                            {{--</td>--}}
                            {{--<td class="product_info">--}}
                                {{--<div class="preview">--}}
                                    {{--<a target="_blank" href="{{ route('products.show', [$item->productSku->product_id]) }}">--}}
                                        {{--<img src="{{ $item->productSku->product->image_url }}">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div @if(!$item->productSku->product->on_sale) class="not_on_sale" @endif>--}}
                                    {{--<span class="product_title">--}}
                                        {{--<a target="_blank" href="{{ route('products.show', [$item->productSku->product_id]) }}">--}}
                                            {{--{{ $item->productSku->product->title }}--}}
                                        {{--</a>--}}
                                    {{--</span>--}}
                                    {{--<span class="sku_title">{{ $item->productSku->title }}</span>--}}
                                    {{--@if(!$item->productSku->product->on_sale)--}}
                                        {{--<span class="warning">该商品已下架</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</td>--}}
                            {{--<td><span class="price">￥{{ $item->productSku->price }}</span></td>--}}
                            {{--<td>--}}
                                {{--<input type="text" class="form-control input-sm amount" @if(!$item->productSku->product->on_sale) disabled @endif name="amount" value="{{ $item->amount }}">--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<button class="btn btn-sm btn-danger btn-remove">移除</button>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
                {{-- 提交订单 --}}
                {{--<select class="form-control text-center" name="address">--}}
                    {{--@foreach($addresses as $address)--}}
                        {{--<option value="{{ $address->id }}">{{ $address->full_address }} {{ $address->contact_name }} {{ $address->contact_phone }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                {{--<div class="text-center">--}}
                    {{--<button type="button" class="btn btn-primary btn-create-order">--}}
                        {{--结算--}}
                    {{--</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection