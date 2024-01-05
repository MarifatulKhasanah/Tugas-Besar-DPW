@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Car Details</h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/22/8d/9f/228d9f32720a572f704a88d816487c5c.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div>
                  <!-- Product name-->
                  <h3 class="fw-bolder text-primary">Description</h3>
                  <p>
                    Enjoy your adventure with our rental car, Mitsubishi Pajero Sport, 
                    which offers the perfect combination of comfort and performance 
                    Tough. With advanced engine specifications, the Pajero Sport gives the engine a high performance. 
                    an impressive driving experience, equipped with features 
                    Current security to ensure your trip is safe and enjoyable.
                  <div class="mobil-info-list border-top pt-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>P3K</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>CHARGER</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>AUDIO</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>AC</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card">
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <h5 class="fw-bolder">Special Item</h5>
                    <div class="rent-price mb-3">
                      <span style="font-size: 1rem" class="text-primary"
                        >Rp.1.000.000/</span
                      >day
                    </div>
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Diesel</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Chairs Amount</span>
                      <span style="font-weight: 600">7</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmission</span>
                      <span style="font-weight: 600">CVTMT</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a
                    class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                    href="https://wa.me/+62895377044585"
                    style="column-gap: 0.4rem"
                    >Rent This Car <i class="ri-whatsapp-line"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection