@extends('site')

@section('content')

	
	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-spacer fh5co-spacer-sm"></div>
					<p>
					<img width="200px" src="uploads/{{$article->photo}}" alt="Автор виробів" class="img-rounded img-responsive"></p>
					<p>{{$article->text}}</p>
					
				</div>
				
        		
        	</div>
       </div>
	</div>

@endsection