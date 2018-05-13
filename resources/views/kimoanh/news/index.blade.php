@extends('templates.kimoanh.master')
@section('content')
<div class="news-home">
	@include('templates.kimoanh.menubar')
	@include('kimoanh.news.content')
</div>

@endsection