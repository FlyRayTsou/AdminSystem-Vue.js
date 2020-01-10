@extends("base", ['title'=>'edit post'])

@section('title', 'edit post')

@section('body')
	<form method="post" action="{{($type=="edit") ?
		route("blog/post.update", ["id"=>$id]) : route("blog/post.store")}}">
		@csrf
		@method(($type=="edit")? "patch" : "post")

		<label for="title">Title:</label>
		<input name="title" type="text" value={{$title}} id="title" />
		<br/>
		<label for="content">Content:</label>
		<textarea cols="30" id="content" name="content" rows="10">{{$content}}</textarea>
		<br/>
		<input name="" type="submit" value="save">
	</form>
@endsection
