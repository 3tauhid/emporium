<script type="text/javascript" src="{{ mix('/js/header-search.js')}}"></script>

<div class="container area1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 a1">
            <img src ="/images/logo.png" alt="Logo Image">
        </div>

        <div class="col-lg-8 col-md-7 col-sm-7 hidden-xs">
            <div class='a2' style="padding-left: 130px;">
                <form action="{{ route('products.index') }}" method='GET'>
                    <select id="searchDepartment" class="search-department" name="department">
                        <option value="">All</option>
                        @foreach ($rootDepartments as $department)
                            <option value="{{ $department->id }}" {{ (request('department') == $department->id) ? 'selected' : null }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                    <input id="searchTextInput" name='search' type="text" class="form-control a5">
                    <button type="submit" class="btn btn-primary a6"><span class="glyphicon glyphicon-search"></span></i></button>

                    <script>
                        resizeHeaderSearchInput('searchDepartment', 'searchTextInput');
                    </script>
                </form>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 a7">
            @if (auth()->id())
                <form method="POST" action="{{ route('signout') }}">
                    @csrf
                    <button type='submit' class='btn btn-primary a8'>Sign Out</button>
                    <a type="button" class="btn btn-primary a9" href="{{ route('cart-items.index') }}"><span class="glyphicon glyphicon-shopping-cart" style="font-size: 25px;"></span></i> <b>Cart</b></a>
                </form>
            @else
                <a type='button' class='btn btn-primary a8' href="{{ route('signin') }}">Sign in</a>
                <a type="button" class="btn btn-primary a9" href="{{ route('cart-items.index') }}"><span class="glyphicon glyphicon-shopping-cart" style="font-size: 25px;"></span></i> <b>Cart</b></a>
            @endif
            <p style='color: white;font-size: 16px;'>24/7 Customer Service</p>
        </div>

        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <div class='a2'>
                <form action="{{ route('products.index') }}" method='GET' style="padding-left: 4%;">
                    <select id="searchDepartmentSmallDisplay" class="search-department" name="department">
                        <option value="">All</option>
                        @foreach ($rootDepartments as $department)
                            <option value="{{ $department->id }}" {{ (request('department') == 1) ? 'selected' : null }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                    <input id="searchTextInputSmallDisplay" name='search' type="text" class="form-control a5" style="width: calc(100vw - 123px);">
                    <button type="submit" class="btn btn-primary a6"><span class="glyphicon glyphicon-search"></span></i></button>

                    <script>
                        resizeHeaderSearchInput('searchDepartmentSmallDisplay', 'searchTextInputSmallDisplay');
                    </script>
                </form>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs a10">
            <ul class="nav nav-pills a11">
                <li role="presentation"> <a href="{{ route('homepage') }}"><b style='color: #fff;'>Home</b></a> </li>
                <li role="presentation"> <a href="{{ route('products.index') }}" style="outline: none;">Products</a></li>
                @if (auth()->id())
                    <li role='presentation'> <a href="{{ route('profile.show') }}">Profile</a></li>
                @endif
                @if (!auth()->id())
                    <li role="presentation"> <a href="{{ route('register') }}">Registry</a></li>
                @endif
            </ul>
        </div>
        
        <div class="hidden-lg hidden-md hidden-sm col-xs-12 a10 horizontal-centering-container">
            <ul class="nav nav-pills a11 horizontal-centering-item">
                <li role="presentation"> <a href="{{ route('homepage') }}"><b style='color: #fff;'>Home</b></a> </li>
                <li role="presentation"> <a href="{{ route('products.index') }}" style="outline: none;">Products</a></li>
                @if (auth()->id())
                    <li role='presentation'> <a href="{{ route('profile.show') }}">Profile</a></li>
                @endif
                @if (!auth()->id())
                    <li role="presentation"> <a href="{{ route('register') }}">Registry</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>