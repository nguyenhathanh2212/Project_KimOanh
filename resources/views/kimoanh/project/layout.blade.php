@extends('templates.kimoanh.master')
@section('title')
	Project
@endsection
@section('content')
<div id="ctl00_divAlt1" class="altcontent1 cmszone">
	<section class="breadcrumb-wrap">
		<div class='Module Module-89'>
			<div class='ModuleContent'>
				<div class="breadcrumb-img">
	  				<img src="{{ config('setting.folder_image_public') }}Data/Sites/1/Banner/banner-duan.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="breadcrumb-content">
			<div class='container Module Module-148'>
				<ol class='breadcrumb'>
		    		<li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
		    			<a href='http://diaockimoanh.vn' class='itemcrumb' itemprop='url'>
		    				<span itemprop='title'>Trang chủ</span>
		    			</a>
		    		</li>
	            	<li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>
	            		<a href='/du-an/du-an-dang-trien-khai' class='itemcrumb' itemprop='url'>
	            			<span itemprop='title'>Dự án</span>
	            		</a>
	            	</li>
				</ol>
			</div>
		</div>         
	</section>      
</div>
@yield('content-project')
@endsection
@push('scripts')
@endpush
