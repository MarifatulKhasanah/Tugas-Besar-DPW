@extends('layouts.frontend')

@section('content')
<!-- Section-->
<section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Choose Your Rental Car</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/22/8d/9f/228d9f32720a572f704a88d816487c5c.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp. 1.000.000/</span>day
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
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.blade.php"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/65/c3/63/65c3636ca6b81584e53084c105c7a54d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.1.500.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Chairs Amount</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmission</span>
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-danger text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/b8/f6/e4/b8f6e4317a3eaba83c580c23bd7ca5ed.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.450.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
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
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/4f/fe/6e/4ffe6e0e9f921befc74fb5c58ba3e29c.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.1.450.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
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
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-danger text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/9a/99/60/9a9960fa9b2221711d0d6f73b8684c81.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.750.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
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
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/6f/34/9c/6f349ce0caba625bba023413e6bf5e49.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.950.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
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
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-danger text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/18/77/11/187711d7d9edb6489071b165020255d7.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.400.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Chairs Amount</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmission</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://i.pinimg.com/564x/03/76/66/037666178178a974ea8ad79389eeb0de.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.650.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Fuel</span>
                      <span style="font-weight: 600">Gasoline</span>
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
                      <span style="font-weight: 600">Automatic</span>
                    </li>
                  </ul>
                </div>
              </div>     
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section>
    @endsection