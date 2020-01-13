@extends("base", ['title'=>'upload photo'])

@section('title', 'upload image')

@section('body')
	<form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
		@csrf

       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<input name="file" type="file" accept="image/*" value=""/>
		<input name="" type="submit" value="upload"/>
	</form>
@endsection