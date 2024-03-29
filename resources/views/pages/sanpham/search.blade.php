@extends('layout')
@section('content')

					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Tìm Kiếm Sản Phẩm</h2>

<!-- khi gõ tìm kiếm ở trang home chính , Kết quả trả về trang tìm kiếm ----->

@foreach($search as $Key => $product)
<a href=" {{url('chi-tiet-san-pham/'.$product->product_id)}}">



						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{url('./upload/product/'.$product->product_image)}}" alt="" />

											<h2>{{number_format($product->product_price).' VNĐ'}}</h2>
										<p> {{$product->product_name}} </p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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


			@endforeach()


					</div>

					<!----------------------------------------------------------------------->
			@stop