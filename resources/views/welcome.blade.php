@extends('layouts.app')
@section('title','Home')
@section('content')




    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slid1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span>Come on !</span>
                    <p>You can join the sellers, We help you to showcase your products</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slid2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <span>Shop now</span>
                    <p>Find all your requests from various vendors <br> on the same place.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slid3.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <span>Lets volunteer</span>
                    <p>We support volunteer work and exchange of materials.</p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--latest-product-->

<div class="swiper-container">
<h2 class="text-center mb-4 text_pink">Latest Item Added</h2>
      <div class="swiper-wrapper">
      @foreach($items as $item)
        <div class="swiper-slide" style="height:350px">
           <div class="overlay" id="overlay">
            <a href="{{route('display_item',$item->id)}}" class="style-btn-link"><i class="fas fa-arrow-circle-right"></i></a>
           </div>
            <div class="card card-overlay" id="card-overlay" style="height:350px">
                <img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><i class="fas fa-signature mr-2"></i>{{$item->name}}</h4>
                   <span class="card-price-item"><i class="fas fa-hand-holding-usd mr-2"></i>{{$item->price}} JD</span>
                   <br>
                </div>
              </div>
        </div>
      @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>




    <div class=" container-fluid mx-auto mt-4 bg-light-gray shadow pt-3">
        <!--lastest-->
        <div class="last_added row my-3 mx-2 bg-white border rounded-lg p-3 justify-content-center">
        @foreach($random_item as $item)
            <div class="card mx-1 my-2 p-2 shadow ">
               <img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body" id="last-product-1">
                    <h5 class="card-title text_pink text-capitalize" id="last-product-name-1">{{$item->name}}</h5>
                    <p class="card-text text-muted" id="last-product-info-1">{{$item->price}} JD</p>
                    <a href="{{route('display_item',$item->id)}}" class="btn btn-primary bg-dark-blue stretched-link rounded-pill">Go Now</a>
                </div>
            </div>
        @endforeach
            <div class="d-block col-12 text-right mt-3"> <a href="{{route('items')}}" class="text_pink font-weight-bold text-capitalize">
                    see more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>

        <!--categorize-->
        <div class="categorize row h-25 justify-content-center text-center py-4 ">
            <div class="mx-3 py-3">
                <a href="#" class=""><img class="m-2 rounded-circle" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/ingredients-for-spring-vegetable-buddha-bowl-royalty-free-image-656873420-1558126238.jpg?crop=0.707xw:1.00xh;0.147xw,0&resize=640:*" alt="foods" />
                    <div class=" text-center text-uppercase font-weight-bold ">foods</div>
                </a>
                <div class="text-muted text-capitalize ">fruits,and vegetables (dried or Fresh), Spices, (cooked, canned, pickled, wrapped) food etc .</div>
            </div>
            <div class="mx-3 py-3">
                <a href="#"><img class="m-2 rounded-circle" src="https://www.mashahir.net/wp-content/uploads/2018/10/%D9%85%D9%88%D8%B6%D8%A9-2019.jpg" alt="clothes"/>
                    <div class=" text-center text-uppercase font-weight-bold ">Clothes</div>
                </a>
                <div class="text-muted text-capitalize ">Clothes (outdoor, indoor, sports and underwear), accessories, Perfumes, Makeup, shoes, bags, etc.</div>
            </div>
            <div class="mx-3 py-3">
                <a href="#"><img class="m-2 rounded-circle" src="https://www.grantthornton.com/-/media/content-page-files/advisory/deal-services/HM-2020-two-men-handshake.ashx" alt="services" />
                    <div class=" text-center text-uppercase font-weight-bold ">Services</div>
                </a>
                <div class="text-muted text-capitalize ">Any service you need such as Babysitting, housework (indoor and outdoor), maintenance, painting etc.</div>
            </div>
            <div class="mx-3 py-3">
                <a href="#"><img class="m-2 rounded-circle" src="https://media.zid.store/9a579690-3df2-4408-bb21-32b050a3749c/dc30359c-2b20-4e94-99e5-eb687317f811.jpeg" alt="furniture"/>
                    <div class=" text-center text-uppercase font-weight-bold ">furniture</div>
                </a>
                <div class="text-muted text-capitalize ">Indoor and outdoor furniture, cooking tools, indoor and outdoor decorative plants ect. .</div>
            </div>
            <div class="mx-3 py-3">
                <a href="#"><img class="m-2 rounded-circle" src="https://www.flymalaysia.org/wp-content/uploads/2020/09/Korean-online-shopping-malls_rs.jpg" />
                    <div class=" text-center text-uppercase font-weight-bold ">Others</div>
                </a>
                <div class="text-muted text-capitalize ">cars ,home ,piece of ground ,and any thing else.</div>
            </div>
        </div>
    </div>


    <!-- counting bar -->
    <div class=" w-100 container-fluid mx-0 px-0 text-center">
        <div class="container">
            <div class="row justify-content-center rounded-top mx-1 font-weight-bold my-5" >
                <div class="col-md-3 col-sm-6 col-12 col mr-3 py-2"><i class="far fa-user-circle text_pink text_larger" id="num_of_USERS"></i></div>
                <div class="col-md-3 col-sm-6 col-12 col mr-3 py-2"><i class="far fa-clone text_pink text_larger" id="num_of_POSTS"></i></div>
                <div class="col-md-3 col-sm-6 col-12 col mr-3 py-2"><i class="far fa-star text_pink text_larger" id="num_of_Rates"></i></div>
            </div>
        </div>
    </div>



@endsection
