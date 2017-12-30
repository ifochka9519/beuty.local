@extends('site')

@section('content')

	
	
	<div id="fh5co-main">
		<div class="container">

            <div class="row">

        <div id="fh5co-board" data-columns>
			@foreach($items as $item)

				<div class="item">
					<form action="{{route('item')}}">
						<input type="hidden" name="id" value="{{$item->id}}">
					<div class="animate-box" >

						<button style="margin: 0; border: 0; padding: 0" type="submit"><img src="uploads/{{$item->image}}" alt="{{$item->title}}"></button>

					</div>
					<div class="fh5co-desc">
						<h5>{{$item->title}}</h5>
						{{--<p>{{$item->description}}</p>--}}
					</div>

					</form>
				</div>

			@endforeach

        </div>
        </div>
       </div>
	</div>
@endsection

<script>
    var token = '{{Session::token()}}';
    var url = '{{route('gallery')}}';
</script>