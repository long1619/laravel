@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
	@foreach($brand_name_1 as $Key =>$name)
	<h2 class="title text-center">Thương Hiệu {{$name->brand_name}}</h2>

	@endforeach
	@foreach($brand_by_id as $Key => $category_by_id1 )
	<a href="{{url('chi-tiet-san-pham/'.$category_by_id1->product_id)}}">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{url('./upload/product/'.$category_by_id1->product_image)}}" alt="" />

						<h2>{{number_format($category_by_id1 ->product_price).' VNĐ'}}</h2>
						<p>{{$category_by_id1 ->product_name}}</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
					</div>

				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="#"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
						<li><a href="#"><i class="fa fa-plus-square"></i>So Sánh</a></li>
					</ul>
				</div>
			</div>


		</div>

	</a>
	@endforeach


</div>
@stop