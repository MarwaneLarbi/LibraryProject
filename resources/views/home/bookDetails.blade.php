@extends('Layouts.home')
@section('content')
    <!--====== Start Listing Details section ======-->
    <hr>
    <h2 class="title text-center text-primary" >{{$book->titre}}</h2>
    <section class="listing-details-section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing-details-wrapper listing-details-wrapper-one">

                        <div class="listing-features-box mb-50">
                            <h4 class="title">Détails du livre </h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-box icon-box-one">
                                        <div class="icon">
                                           <span class="text-primary fw-bold">Auteur</span>
                                        </div>
                                        <div class="info">
                                            <h6>Card Payment</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-box icon-box-one">
                                        <div class="icon">
                                            <span class="text-primary fw-bold">Langue</span>
                                        </div>
                                        <div class="info">
                                            <h6>{{$book->langue}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-box icon-box-one">
                                        <div class="icon">
                                            <span class="text-primary fw-bold">ISBN</span>
                                        </div>
                                        <div class="info">
                                            <h6>{{$book->isbn}}</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-box icon-box-one">
                                        <div class="icon">
                                            <span class="text-primary fw-bold">Annee</span>
                                        </div>
                                        <div class="info">
                                            <h6>{{$book->annee}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="icon-box icon-box-one">
                                        <div class="icon">
                                            <span class="text-primary fw-bold">#</span>
                                        </div>
                                        <div class="info">
                                            @foreach($book->categories as $category)
                                                <h6>{{$category->name}}</h6>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-content mb-50">
                            <h3 class="title">Description</h3>
                            {!!  $book->description!!}
                        </div>

                        <div class="listing-tag-box mb-50">
                            <h4 class="title">Livre Tags</h4>
                            @foreach($book->tags as $tag)
                                <a href="#">{{$tag->name}}</a>
                            @endforeach

                        </div>
                        <!--====== Start Breadcrumbs section ======-->
                        <section class="page-breadcrumbs page-breadcrumbs-one  pb-70">
                            <h4 class="title"> </h4>

                            <div class="container">
                                <div class="breadcrumbs-wrapper-one">

                                    <div class="row align-items-center">

                                        <div class="col-md-12">

                                            <div class="listing-info-name">
                                                <div class="info-name d-flex">
                                                    <div class="thumb">
                                                        <img src="{{$book->auteurs->photo}}" width="120" height="120" alt="thumb image">
                                                    </div>
                                                    <div class="content">
                                                        <span class="cat-btn">À propos de l'auteur</span>
                                                        <h3>{{$book->auteurs->fullname}}</h3>
                                                        <p class="tag">{!! $book->auteurs->description !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget-area">
                        <div class="widget contact-info-widget mb-30">
                            <div class="contact-info-widget-wrap">
                            <h4>Livre Disponible : <span class="badge bg-primary"> {{
    $book->nombre_exmp-  DB::table('livre_abonne')
                ->where('livre_id', $book->id)
                ->where('status', 'pending')
                ->where('deleted_at', null)->count()}}</span>
                            </h4>
                            </div>
                        </div>

                        <div class="widget reservation-form-widget mb-30">
                            <h4 class="widget-title text-center">Livre Cover </h4>
                            <img src="{{$book->Photo}}" alt="Listing Image" width="370"height="450">
                            <div class="featured-btn"> {{$book->titre}}</div>

                        </div>
                        <div class="widget contact-info-widget mb-30">
                            <div class="contact-info-widget-wrap">
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26179.016163497716!2d-1.3467277330735559!3d34.89698694323511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c969c3308445%3A0xb1a952ce24399c19!2sBiblioth%C3%A8que%20de%20la%20facult%C3%A9%20des%20sciences!5e0!3m2!1sfr!2sdz!4v1641035087659!5m2!1sfr!2sdz"></iframe>
                                    <a href="#" class="support-icon"><i class="flaticon-headphone"></i></a>
                                </div>
                                <div class="contact-info-content">
                                    <h4 class="widget-title">Contact Info</h4>
                                    <div class="info-list">
                                        <p><i class="ti-tablet"></i><a href="tel:+98265365205">+213 10 10 10 10</a></p>
                                        <p><i class="ti-location-pin"></i>45/A Tlemcen,Algerie</p>
                                        <p><i class="ti-email"></i><a href="mailto:Bibliotheque@tlemcen.dz">Bibliotheque@tlemcen.dz</a></p>
                                        <p><i class="ti-world"></i><a href="www.Bibliothequetlemcen.com">www.Bibliothequetlemcen.com</a></p>
                                    </div>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#"><i class="ti-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Listing Details section ======-->@endsection
