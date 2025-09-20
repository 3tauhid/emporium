<div style='margin-top: 30px; margin-bottom: 30px;margin-left: 400px;margin-right: 400px;'>
	<form action="{{ route('sellers.update', $productSeller->id) }}" method='post'>
		@csrf
		@method('PUT')

		<p style='margin-top: 10px;'>Stock:</p>
		<input type='text' name='stock' class='form-control b79' placeholder='Stock Number' aria-describedby='basic-addon1' value="{{ $productSeller->stock }}" style='width: 100%;float: none;'>
		<p style='margin-top: 10px;'>Price:</p>
		<input type='text' name='price' class='form-control b79' placeholder='Price' aria-describedby='basic-addon1' value="{{ $productSeller->price }}" style='width: 100%;float: none;'>
		<p style='margin-top: 10px;'>Shipped from:</p>
		<input type='text' name='shipping_location' class='form-control b79' placeholder='Shipping Location' aria-describedby='basic-addon1' value="{{ $productSeller->shipping_location }}" style='width: 100%;float: none;'>
		<center>
			<button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button>
			<button type='button' class='btn btn-danger' onclick='hideNotification()' style='margin-right: 5px;'>Cancel</button>
		</center>
	</form>
</div>