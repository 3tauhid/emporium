@foreach ($productFaqs as $faq)
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b83'>
		<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8 b82'>
			<p><b>Qustion: {{ $faq->question }}</b></p>
			<p><b>Answer: </b>{{ $faq->answer }}</p>
		</div>
	</div>
@endforeach