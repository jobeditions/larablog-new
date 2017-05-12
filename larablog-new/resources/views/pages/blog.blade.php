@extends ('layouts.master')
@section('title')
Blog écrivain-blog
@endsection
@section ('content')
<div class="col-md-9 top-right">
  <div class="content">
	<div class="grids">
		@include ('partials.postsblog')
		@include ('partials.postsblog')
		@include ('partials.postsblog')
		@include ('partials.postsblog')
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
 </div>
<div class="clearfix"> </div>
		<div class="content-pagenation">
						<li><a href="#">Frist</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>....</span></a></li>
						<li><a href="#">Last</a></li>
						<div class="clear"> </div>
					</div>
					<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
@endsection