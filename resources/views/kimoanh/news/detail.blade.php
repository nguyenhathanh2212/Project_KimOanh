@extends('templates.kimoanh.master')
@section('content')
<div class="news-home">
	@include('templates.kimoanh.menubar')
	<div class="right-home">
		@include('templates.kimoanh.breadcrum')

		<div class="post-wrap">
			<h1 class="title-news">
			{{$news->title}}</h1>
			<span class="date">
				{{ $news->created_at}}
			</span>
			<div class="top-news"></div>
			<div class="center-news">
				{{ $news->content}}
			</div>
				
		</div>
		<div class="bottom-news"></div>
		
	</div>


	<div class="other-news-h">
		<h4>Tin tức khác</h4>
		<ul>
			@foreach($relateNews as $rlNews)
			<li>
				<a title="" target="_self" href="{{ route('kimoanh.news.detail', [$rlNews->id])}}">{{ $rlNews->title}}</a>
				<span>{{ $rlNews->created_at}}</span>
			</li>
			@endforeach
		</ul>
	</div>
</div>
</div>

@endsection