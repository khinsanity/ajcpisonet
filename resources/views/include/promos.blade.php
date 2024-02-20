@extends('mainlayout')
@section('title', 'AJC-Promos')
@section('content')

<div class="hero-section2">
  <div class="container">
    <h1 class="text-white" id="texts">Get your free install today and enjoy 2 months of internet on the house!</h1>
    <h1 class="mt-2" id="paragraph">Elevate your home experience with fast, reliable plans.</h1>
  </div>
  <button type="button"  class="btn button-apply-now"><a href='{{ route('applynow') }}'>Apply Now</a></button>
</div>
<section class="support-section pt-5 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <div class="exclusive-deals" id="exclusive-deals">
          <div class="support-top-details-text text-center text-md-start">
            <h2 class="fw-bolder fs-1 w-auto">Here are the exclusive deals tailored specifically for you.</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pt-5">
    <div class="row gx-3 justify-content-between overflow-auto scrollbar style-7">
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around shadow">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">20Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 899</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around shadow">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">30Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1000</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3 ">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around shadow">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">50Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1300</p>
          </div>
        </div>
      </div>
      <div class="promo-card col-sm-6 col-lg-3">
        <div class="card h-100">
          <div class="card-body d-flex flex-column h-100 justify-content-around shadow">
            <h5 class="card-title fw-bold">Exclusive Offer!</h5>
            <p class="card-text fs-1 fw-bolder">100Mbps</p>
            <p class="card-text fs-3">Fiber Unli Plan 1500</p>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="hero-section3">
    <div class="container">

        <div class="row col-sm-5">
            <img src="./assets/ads2.png" alt="ads2" class="w-100">
        </div>
    </div>
</div>

<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/productivity.png">
                <h4>Be more productive than ever</h4>
                <p>with faster speeds that Fiber Unli can provide.</p>
            </div>
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/stream.png">
                <h4>There’s no limit!</h4>
                <p>Stream to your heart’s content for as low as P899!</p>
            </div>
            <div class="col-12 col-md-4 p-2 p-md-3 p-lg-4 justify-content-center text-center">
                <img class="py-4 m-auto" src="./assets/internet.png">
                <h4>Win more rounds with AJC Internet</h4>
            </div>
        </div>
    </div>

<div class="accordion">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1">
        <label for="accordion1" class="accordion-item-title"><span class="icon"></span>What is AJC PISONET</label>
        <div class="accordion-item-desc">AJC PISONET is a service provider offering affordable and reliable internet access to customers, primarily through PISONET setups.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2">
        <label for="accordion2" class="accordion-item-title"><span class="icon"></span>How does AJC PISONET work?</label>
        <div class="accordion-item-desc"> AJC PISONET operates on a pay-per-use basis, where customers pay for internet access by inserting coins or tokens into the PISONET machines. Users can then access the internet for a predetermined amount of time based on their payment.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3">
        <label for="accordion3" class="accordion-item-title"><span class="icon"></span>How do I report issues or seek assistance with AJC PISONET services?</label>
        <div class="accordion-item-desc"> For any issues or assistance regarding AJC PISONET services, you can contact our customer support hotline or visit our official Facebook page troubleshooting guides. Additionally, on-site support may be available at certain AJC PISONET locations.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4">
        <label for="accordion4" class="accordion-item-title"><span class="icon"></span>Is there any current promotion available?</label>
        <div class="accordion-item-desc">Yes! AJC PISONET is currently offering a special promotion where you can get your free installation today and enjoy 2 months of internet on the house! Contact us for more details and to take advantage of this offer.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion5">
        <label for="accordion5" class="accordion-item-title"><span class="icon"></span>Can I use AJC PISONET for online gaming?</label>
        <div class="accordion-item-desc">Yes, AJC PISONET is suitable for online gaming with its low-latency connections and gaming-friendly services. Many gamers prefer AJC PISONET for their gaming sessions due to its reliable connectivity and affordable rates.</div>
    </div>

</div>






@endsection
