<div>
    <br><br>
    <div class="card" style="border: none">
        <h2 class="text-center text-primary">Recherche des Livres</h2>
    </div>
    <section class="listing-grid-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget-area">
                        <div class="widget search-listing-widget mb-30">
                            <h4 class="widget-title">Filter Search</h4>
                            <form action="{{route('livres.search')}}" method="GET" id="searshform">
                                @csrf
                                <div class="search-form">
                                    <div class="form_group">
                                        <input type="search" class="form_control" placeholder="Search keyword"  wire:model="searchboook" name="searchboook">
                                        <i class="ti-search"></i>
                                    </div>
                                    <div  class="form_group">

                                        <select  name="categories"  wire:modal="categories_2" class="wide">
                                            <option value="" data-dsplay="Category">Category</option>
                                            @foreach($categories as $category)
                                                <option value="22">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <select name="auteurs"class="wide">
                                            <option value="" data-dsplay="Auteur">Auteur</option>
                                            @foreach($auteurs as $auteur)
                                                <option value="22">{{$auteur->fullname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <select class="wide" name="Langue">
                                            <option value="" data-dsplay="Langue"> Langue</option>
                                            <option value="Arabe"  >Arabe</option>
                                            <option value="Anglais">Anglais </option>
                                            <option value="Français">Français</option>
                                            <option value="Espagnol">Espagnol</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form_group">
                                    <button class="main-btn icon-btn" type="submit">Search Now</button>
                                </div>
                            </form>
                        </div>
                        <div class="widget newsletter-widget mb-30">
                            <div class="newsletter-widget-wrap bg_cover" style="background-image: url(assets/images/newsletter-widget-1.jpg);">
                                <i class="flaticon-email-1"></i>
                                <h3>Subscribe Our
                                    Newsletter</h3>
                                <button class="main-btn icon-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="listing-grid-wrapper">
                        <div class="row">
                            @foreach($books as $book)

                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="{{$book->Photo}}" alt="Listing Image" width="370"height="290">
                                            @foreach($book->categories as $category)

                                                <span class="featured-btn btn-warning   "> {{$category->name}}</span>

                                            @endforeach

                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="http://localhost:8000/livres/id/{{$book->id}}">{{$book->titre}}</a></h3>
                                            <p>

                                            </p>
                                            <span class="phone-meta">
<p>{!! substr($book->description, 0, 20) !!}
</p>
                                                <span class="status st-open text-center">Livre disponible : {{  $book->nombre_exmp-  DB::table('livre_abonne')
                ->where('livre_id', $book->id)
                ->where('status', 'pending')
                ->where('deleted_at', null)->count()}}</span></span>

                                            <div class="listing-meta">
                                                @foreach($book->tags as $tag)
                                                    <span class="badge rounded-pill bg-primary ">{{$tag->name}}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($books))
                        {{ $books->links('pagination::bootstrap-4') }}
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

