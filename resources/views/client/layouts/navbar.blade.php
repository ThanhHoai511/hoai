<nav class="navbar navbar-default">
  	<div class="container-fluid">
    	<ul class="nav navbar-nav">
            @foreach($cate as $c)
          		<li><a href="{{ url('category', [$c->id]) }}">{{ $c->name }}</a></li>
            @endforeach
    	</ul>
  	</div>
</nav>
