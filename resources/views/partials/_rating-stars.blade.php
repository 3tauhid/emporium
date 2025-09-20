@if ($product->average_rating>=4)
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
@endif
@if ($product->average_rating>=3 && $product->average_rating<4)
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
@endif
@if ($product->average_rating>=2 && $product->average_rating<3)
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
@endif
@if ($product->average_rating>=1&& $product->average_rating<2)
	<span class='glyphicon glyphicon-star'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
@endif
@if ($product->average_rating>=0 && $product->average_rating<1)
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
	<span class='glyphicon glyphicon-star-empty'></span>
@endif