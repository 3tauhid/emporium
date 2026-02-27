@foreach ($productReviews as $review)
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b87'>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b88'>
			<img src ="{{ $review->user->userImage?->url ?? '/images/user.png' }}">
			<p>{{ $review->user->name }}</p>
		</div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b89'>
				@if ($review->rating==5)
					<p>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
					</p>
				@endif
				@if ($review->rating==4)
					<p>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
					</p>
				@endif
				@if ($review->rating==3)
					<p>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
					</p>
				@endif
				@if ($review->rating==2)
					<p>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
					</p>
				@endif
				@if ($review->rating==1)
					<p>
						<span class='glyphicon glyphicon-star'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
					</p>
				@endif
				@if ($review->rating==0)
					<p>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
						<span class='glyphicon glyphicon-star-empty'></span>
					</p>
				@endif
			</div>
			<p class="utc-datetime">{{ $review->created_at }}</p>
			<p style='max-width: 850px;text-align: justify;'>{{ $review->description }}</p>
		</div>
	</div>
@endforeach