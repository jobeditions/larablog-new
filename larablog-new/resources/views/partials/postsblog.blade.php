
		<div class="grid box">
			<div class="grid-header">
				<h3><a href="posts/{{ $posting->id }}">{{ $posting->title }}</a></h3>
				<ul>
				<li><span>Post By <a href="#">Admin</a> on {{ $posting->created_at}} </span></li>
				<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href=""><img src="images/img13.jpg" class="img-responsive" alt="" /></a>
				
				{{ $posting->body }}

				<div class="clearfix"> </div>
			</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="images/views.png" title="view" /></a></li>
				<li><a href="#"><img src="images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="images/link.png" title="link" /></a></li>
				<li><a class="readmore" href="posts/{{ $posting->id }}">ReadMore</a></li>
			</ul>
			</div>
		</div>