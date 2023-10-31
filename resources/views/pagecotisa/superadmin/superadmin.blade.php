@include('layoutscotisa.headeradmin')
<!-- Content Wrapper. Contains page content -->
<div class="container-fuid">
  <section>
    <div class="row py-1">
      <div class="col-md-2 pl-3 m-auto">
          <a href="#" class="btn">
            <img src="{{ asset('dist/imagecotisa/LOGO clic COTISA.png') }}" alt="" class="img-fluid"
            style="z-index: 50;">
          </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center m-auto ">
        <h5 style="color: green;z-index: 100;">
          Espace administrateur
        </h5>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-2">
      <div class=" col-md-8 m-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('dist/imagecotisa/islider1.png') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-3">
      <div class="col-md-6 text-center m-auto">
        <h5 style="color: green;">
          Vous êtes le super administrateur de la plate forme COTISA
        </h5>
      </div>
    </div>
  </section>
  <section>
    <div class="row">
      <div class="col-md-3 m-auto text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
       cursor: pointer;background-color:#E98109; color: #fff;" onmouseover="this.style.backgroundColor='#FFA500';"
        onmouseout="this.style.backgroundColor='#E98109';">
        <a href="{{route('inscription')}}" class="text-white">Ajouter un utilisateur</a>
      </div>
    </div>
  </section>
  <section>
    <div class="row py-4">
      <div class="col-md-2 m-auto text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6);
     cursor: pointer;background-color:#036414; color: #fff;
      " onmouseover="this.style.backgroundColor='#0F9727';" onmouseout="this.style.backgroundColor='#036414';">
        <a href="#" class="text-white">Paramètre</a>
      </div>
    </div>
  </section>
</div>

@include('layoutscotisa.footer')