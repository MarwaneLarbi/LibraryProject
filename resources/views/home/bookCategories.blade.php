@extends('Layouts.home')
@section('content')
    <!--====== Start Hero Section ======-->
    <br><br>
    <div class="card" style="border: none">
        <h2 class="text-center text-primary">Liste des Catégories</h2>
    </div>
    <!--====== End Hero Section ======-->
    <!--====== Start Products Section ======-->
    <section class="products-area pt-120 pb-120">
        <div class="container">
            <div class="products-filter mb-30">
                <hr>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="sort-dropdown d-flex align-items-center">
                            <div class="show-text">
                                <p>Showing Result 1-09</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
            </div>
            <div class="products-item-wrapper">
                @if(isset($books))
                    @if( count($books) ==null)
                        <h4 class=" text-xxl-center text-danger">Aucune Resultat Trouver</h4>
                    @endif
                @endif
                <div class="row">
                    @foreach($books as $book)

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30">
                                <div class="listing-thumbnail">
                                    <img src="{{$book->Photo}}" alt="Listing Image" width="370"height="290">


                                        <span class="featured-btn"> {{$categories->name}}</span>



                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="http://localhost:8000/livres/id/{{$book->id}}">{{$book->titre}}</a></h3>
                                    <p>

                                    </p>
                                    <span class="phone-meta">
<p>{!! substr($book->description, 0, 20) !!}
</p>
                                                <span class="status st-open text-center">Livre disponible :
                                                    {{  $book->nombre_exmp-  DB::table('livre_abonne')
                ->where('livre_id', $book->id)
                ->where('status', 'pending')
                ->where('deleted_at', null)->count()}}
                                                </span></span>

                                    <div class="listing-meta">
                                        @foreach($book->tags  as $key => $tag)
                                            @if($key < 3)
                                                <span class="badge rounded-pill bg-primary ">{{$tag->name}}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button text-center align-center mt-50">
                            @if(count($books))
                                {{ $books->links('pagination::bootstrap-4') }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Products Section ======-->
@endsection
