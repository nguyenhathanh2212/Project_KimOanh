         <div class="left-home">
         	<div class="top-lmenu">
         	</div>
         	<div class="list-news-h">
         		<h2>Giới thiệu</h2>
         		<ul>
                  @foreach($cats as $cat)
         			<li class="">
         				<a target="_self" href="">{{ $cat->name}}</a>
         			</li>
         			@endforeach 
         		</ul>
         	</div>
         	<div class="bottom-lmenu">
         	</div>

         </div>