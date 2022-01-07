@extends('Layouts.home')
@section('content')
    <!--====== Start Contact Section ======-->
    <section class="contact-section pt-115 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section-title section-title-left mb-50">
                        <span class="sub-title">Contact With Us</span>
                        <h2>How Can We Help You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-information-list">
                        @if(\Illuminate\Support\Facades\Session::get('fail'))
                            <div class="alert alert-success" role="alert">
                               votre msg a ete envoyer
                            </div>
                        @endif

                        <div class="information-item mb-30">
                            <div class="icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="info">
                                <h5>Address</h5>
                                <p>22, Rue Abi Ayed Abdelkrim Fg Pasteur B.P 119 13000, Tlemcen, Algérie
                                </p>
                            </div>
                        </div>
                        <div class="information-item mb-30">
                            <div class="icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="info">
                                <h5>Phone</h5>
                                <p><a href="tel:445555552580">44 (555) 555 2580</a></p>
                                <p><a href="tel:445555552580">31 (555) 222 2560</a></p>
                            </div>
                        </div>
                        <div class="information-item mb-30">
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="info">
                                <h5>Email</h5>
                                <p><a href="mailto:info@fioxen20.com">info@BibliothqueTlemcen.com</a></p>
                                <p><a href="mailto:info@fioxen20.com">info@BibliothqueTlemcen.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-wrapper-one mb-30">
                        <div class="contact-form">
                            <form action="{{route('contact.store')}}" method="get">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="First Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Last Name" name="lastname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Your Message" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->
@endsection
