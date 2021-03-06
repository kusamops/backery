<div class="item">
	<div class="item-content-container">

		<a href="{{ route('addtocart', $item) }}" class="btn btn-default button-join">
			Добавить в корзину
		</a>

		<a href="">
			<h2 class="item-title">
				<u>{{ $item->title }}</u>
			</h2>
		</a>

		<h2>
			{{ $item->description }}
		</h2>

		<h3>
			Цена: {{ $item->price }} UAH
		</h3>

		@if(Auth::guard('admin')->check())			
			<a href="{{ route('deleteitem', $item->id) }}" class="button">
				Удалить Товар
			</a>
		@endif
	</div>

	<div class="photo-container">
		<img class="element-photo" src="{{ $item->photo }}" alt="">
	</div>

</div>