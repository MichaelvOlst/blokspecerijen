@extends('layouts.main')


@section('content')
    
    <section class="hero">
        {!! HTML::image('images/spice.jpg') !!}
    </section>
	<section class="featured-products">
        @foreach(range(1, 6, 1) as $index)
	    <article>
	        <a href="">
                <figure>{!! HTML::image('images/black-pepper11.jpg') !!}</figure>
                <section class="description">
                    <h1>DOLORE IPSUM COMMETE</h1>
                    <p>
                        Welcome to the world of the unbelievable smell and perfect taste. From ancient times...
                    </p>
                </section>
	        </a>
            <button><i class="fa fa-shopping-cart"></i><span>Voeg toe aan offerte</span></button>
	    </article>
        @endforeach
	</section>
@stop