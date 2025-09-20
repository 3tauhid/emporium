<x-app-layout seoTitle="Users">
	<x-slot name='css'>
		<link href="{{ mix('/css/admin-search.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b99">
			</br>
			@include('partials._profile-menu')

			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b107">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b108">
					<input type="text" class="form-control b111" placeholder="Name or email" onkeyup="searchUser(value, '{{ route('search_user') }}')">
					<button class="btn btn-outline-secondary" type="button">Search</button>
				</div>
				<div class='b112'>
					<h1>Search List</h1>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b109">	
					<div style="padding-top: 10px; padding-bottom: 30px;">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p>Name</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p>Email</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p>Unblock</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<p>Delete</p>
						</div>
					</div>
					<div id='user_search'>
						@include('partials._user-list')
					</div>			
				</div>
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/users.js')}}"></script>
		<script type="text/javascript" src="{{ mix('/js/admin-block.js')}}"></script>
    </x-slot>
</x-app-layout>