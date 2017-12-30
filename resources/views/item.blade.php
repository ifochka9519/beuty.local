@extends('site')

@section('content')

    <h1 align="center">{{$item->title}}</h1>
    <h4 align="center">Склад : {{$item->description}}</h4>
    <div id="fh5co-main">
        <div class="container">

            <div class="row">

                <div id="fh5co-board" data-columns>

                        <div class="item">
                            <div class="animate-box">
                                <img  src="uploads/{{$item->image}}">

                            </div>
                        </div>




                    @foreach($images as $image)
                        <div class="item">
                            <div class="animate-box">
                                <img  src="uploads/{{$image->image}}">
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-main">
        <div class="container">

            <div class="row">

                <div id="fh5co-board" data-columns>


                </div>
            </div>
        </div>
    </div>

@endsection