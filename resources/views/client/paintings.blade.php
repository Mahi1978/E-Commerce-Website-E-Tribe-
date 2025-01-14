@extends('theme/main')

@section('title','Paintings')

@section('content')

<div class="container mt-2">
		<!-- Home -->

	<div class="home" style="background-image:url({{asset('client/images/75.jpg')}} ); width: 102.8%;height: 340px;left: -14px;top: -20px;" >
	</div>
<span class="span_title">Paintings</span>

	<br><br><br><br>

	<!-- Products -->

		<div class="products">
			<div class="section_container">
				<div class="container">
					<div class="row">

						@foreach ($data as $i)
						<div class="col-sm-4">
								<!-- Product -->
								<div class="product grid-item hot">
									<div class="product_inner">
										<div class="product_image">

											<a href="{{url('product_details/'.$i->product_id)}}">
												<img src="{{asset('productcategoryimages/Paintings/'.$i->supplier_id.'/'.$i->image)}}"  alt="">
											</a>

										</div>
										<div class="product_content text-center">
											<div class="product_title">{{$i->product_name}}</div>
											<div class="product_price">{{$i->price}}</div>
											<div class="product_button ml-auto mr-auto trans_200"><a href="{{url('cartProduct/'.$i->product_id)}}">add to cart</a></div>
										</div>
									</div>
								</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>


</div>

@endsection
