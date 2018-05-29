<div class="right-home">
@include('templates.kimoanh.breadcrum')
@foreach($news as $new)
<article class="post-h">
	<a class="post-h-img" href="{{ route('kimoanh.news.detail', [$new->id])}}" title="{{ $new->title}}">
		<img width="196" height="117" src="../images/news/52/2868/tong-the-11-3-small.jpg" alt="{{ $new->title}}">
	</a>
	<div class="item-news-h">
		<h1 class="post-h-title">
			<a title="{{ $new->title}}ỹ" target="_self" href="{{ route('kimoanh.news.detail', [$new->id])}}">{{ $new->title}}</a>
		</h1>
		<span class="date">{{ $new->created_at}}</span>
		<div class="post-desc">{{ $new->preview}}&nbsp;<br />
		</div>
	</div>
	<div class="clear">
	</div>
</article>
@endforeach

</div>