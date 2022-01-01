@extends('Layouts.home')
@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="hero-wrapper-two bg_cover" style="background-image: url(assets/images/cover.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <h1>Bibliothèque Tlemcen</h1>
                            <h3>Trouvez Votre Livre</h3>
                            <div class="hero">
                                <div class="form_group">
                                    <a type="button" href="http://localhost:8000/livres" class="main-btn icon-btn">Rechercher</a>
                                </div>

                            </div>
                            <br>
                            <p class="tags">
                                <span>Popular:</span>
                                <a href="http://localhost:8000/livres/category/1">Computers & Technology</a>,
                                <a href="http://localhost:8000/livres/category/2">Arts & Photography</a>,
                                <a href="http://localhost:8000/livres/category/3">Medical Books</a>,
                                <a href="http://localhost:8000/livres/category/4">Science & Math</a>,
                                <a href="http://localhost:8000/livres/category/5">Children's Books</a>,
                                <a href="http://localhost:8000/livres/category/6">Self-Help</a>,
                                <a href="http://localhost:8000/livres/category/7">Sports & Outdoors</a>,
                                <a href="http://localhost:8000/livres/category/8">History</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->
    <!--====== Start category Section ======-->
    <section class="category-area pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-title-two text-center mb-60">
                        <h2><span class="line">Livres</span> Category</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/computer.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/1"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="ti-desktop"></i>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/1">Computers & Technology	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/Photography.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/2"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-camera-retro"></i>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/2">Arts & Photography	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/Medical-help.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/3"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-comment-medical"></i>

                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/3">Medical Books	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/Math.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/4"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/4">Science & Math	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/children.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/5">
                                        <i class="fas fa-brain"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/5">Children's Books</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/self-help.jpg" width="250" height="250"  alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/6">
                                        <i class="fas fa-child"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/6">Self-Help	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/sport.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/7">
                                        <i class="fas fa-child"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-running"></i>                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/7">Sports & Outdoors	</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="category-item category-item-two mb-25">
                        <div class="category-img">
                            <img src="assets/images/category/history.jpg" width="250" height="250" alt="Category Image">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <a href="http://localhost:8000/livres/category/8"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="icon">
                                <i class="fas fa-history"></i>                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/category/8">History</a></h3>
                            <span class="listing">15 Listing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End category Section ======-->
    <!--====== Start Newsletter Section ======-->
    <section class="newsletter-area">
        <div class="newsletter-wrapper newsletter-wrapper-two bg_cover pt-75" style="background-image: url(assets/images/bg/newsletter-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="newsletter-content-box-one">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="content">
                                <h2>Get Special
                                    Rewards</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form">
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Enter Address" name="email" required>
                                <i class="ti-location-pin"></i>
                                <button class="main-btn icon-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Newsletter Section ======-->


    <!--====== Start Blog Section ======-->
    <section class="blog-area pt-110 pb-80 bg_cover" style="background-image: url(assets/images/bg/blog-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-title-two text-center mb-60">
                        <h2><span class="line">Nouveaux</span> Livres</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($books as $book)

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item blog-post-item-two mb-40">
                        <div class="post-thumbnail">
                            <img src="{{$book->Photo}}" alt="Listing Image" width="370"height="360">
                        </div>
                        <div class="entry-content text-center">
                            @foreach($book->categories as $category)
                                <a href="http://localhost:8000/livres/category/{{$category->id}}" class="cat-btn">{{$category->name}}</a>

                            @endforeach
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#">{{$book->annee}}</a></span></li>
                                    <li><span><a href="#">{{$book->langue}}</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="http://localhost:8000/livres/id/{{$book->id}}">{{$book->titre}}</a></h3>

                            <a href="http://localhost:8000/livres/id/{{$book->id}}" class="btn-link">Voir le Livre</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--====== End Blog Section ======-->
@endsection
