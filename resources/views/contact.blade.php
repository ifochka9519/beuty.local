@extends('site')

@section('content')

	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Напишіть нам</h2>
					<div class="fh5co-spacer fh5co-spacer-sm"></div>
					<form method="post" action="{{route('send')}}">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" class="form-control" placeholder="Ім'я">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="last_name" class="form-control" placeholder="Прізвище">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Ваш Email">
								</div>
								<div class="form-group">
									<textarea name="message"  id="message" cols="30" class="form-control" rows="10"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Відправити повідомлення">
								</div>
							</div>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
					
				</div>
        		
        	</div>
       </div>
	</div>

@endsection