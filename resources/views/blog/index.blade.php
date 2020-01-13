@extends("base",['title'=>'網誌文章'])

@section('title', '網誌文章')

@section('body')
	<div class="container">
		<a href="{{route('blog/post.create')}}"><input class="btn btn-primary" name="" type="button" value="add post"></a>
		<ul>
		@foreach($posts as $post)
			<li>
				<a href="{{route('blog/post.show', [$post->id])}}">{{$post->title}}</a>
			</li>
			<form class="form-inline" action="{{route('blog/post.destroy', [$post->id])}}" method="post">
			@csrf
			@method('delete')
			<input class="btn btn-danger" name="" type="submit" value="delete">
			</form>
		@endforeach
		</ul>
	</div>

	{{--------------}}

	{{$posts->links()}}

@endsection