@extends('layouts.app')

@section('title', 'Welcome')
@section('main-top')
<div class="text-center py-4">
    <button type="button" class="btn btn-primary"><a href="{{ route('admin.comics.index')}}">GO TO ADMIN/COMICS </a></button>

</div>


@endsection
@section('main-bottom')

<section class="d-flex flex-wrap justify-content-between py-5">
    @foreach($serieslist as $singleserie)
        <div class="d-flex series-container align-items-center">
        
            <div class="image-container">
                <img src="{{ $singleserie['thumb'] }}" alt="">
            </div>
            <div class="title-container">
                <p>{{ $singleserie['series'] }}</p>
            </div>
        <div class="actions">
             
        </div>
            
        </div>

        
    @endforeach
    
</section>
    

@endsection

@section('footer-top')


@endsection

@section('footer-bottom')

            <section class="footer-bottom">
                    <section class="container">
                        <div>
                            <button class="btn ">SIGN-UP NOW!</button>
                        </div>
                        <div>
                            <div>
                                <h3>FOLLOW US</h3>
                            </div>
                            <nav>
                                <ul>
                                    <li>

                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </section>    
            </section>
@endsection