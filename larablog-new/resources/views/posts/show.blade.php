
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include ('partials.header')
@include ('partials.sidebar')
			<div class="col-md-9 top-right">
				<div class="content">
				<div class="grids">
					<div class="grid box">
						<div class="grid-header">
						<h1>{{ $post->title }}</h1>
						<ul>
							<li><span>Post By <a href="#">Admin</a> {{ $post->created_at}}</span></li>
							<li><a href="#">5 comments</a></li>
						</ul>
						</div>
						<div class="singlepage">
							<img src="/images/img15.jpg" class="img-responsive" alt="" />
							{{ $post->body }}
							
							<div class="clearfix"> </div>
						</div>
						<div class="comments">
							<ul>
								<li><a href="#"><img src="/images/views.png" title="view" /></a></li>
								<li><a href="#"><img src="/images/likes.png" title="likes" /></a></li>
								<li><a href="#"><img src="/images/link.png" title="link" /></a></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
						<div class="comments-main">
							<div class="col-md-2 cmts-main-left">
								<img src="/images/avatar.png" alt="">
							</div>
							<div class="col-md-10 cmts-main-right">
								<h5>TOM BROWN</h5>
								<p>Vivamus congue turpis in augue pellentesque scelerisque. Pellentesque aliquam laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
								<div class="cmts">
									<div class="cmnts-left">
										<p>On April 14, 2014, 18:01</p>
									</div>
									<div class="cmnts-right">
										<a href="#">Reply</a>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>
						<div class="comments-main">
							<div class="col-md-2 cmts-main-left">
								<img src="/images/avatar.png" alt="">
							</div>
							<div class="col-md-10 cmts-main-right">
								<h5>TOM BROWN</h5>
								<p>Vivamus congue turpis in augue pellentesque scelerisque. Pellentesque aliquam laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
								<div class="cmts">
									<div class="cmnts-left">
										<p>On April 14, 2014, 18:01</p>
									</div>
									<div class="cmnts-right">
										<a href="#">Reply</a>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>
			  				</div>
			<div class="lev">
			<div class="leave">
				<h4>Leave a comment</h4>
				</div>
				<form id="commentform">
				    <label for="author">Name</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
						<label for="email">Email</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
						<label for="url">Website</label>
						<input id="url" name="url" type="text" value="" size="30">
						<label for="comment">Comment</label>
						<textarea></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Send">
					<div class="clearfix"></div>
				   </form>
				  </div>

					<div class="clearfix"> </div>
					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	
	@include ('partials.footer')