
@include('layoutscotisa.header')


<div class="container-fuid">
  <div class="row">
    <div class="col-md-12">
      <div style="position: relative; text-align: center;">
        <img src="{{ asset('dist/imagecotisa/ibg7.png') }}" alt="" class="img-fluid" style="width: 100%; height:100%">
        <div style="position: absolute;
    position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%); color: #fff; padding: 70px; font-size: 23px; width: 640px; height: 100px;">
        <a href="{{url('/')}}" class="btn"> <img src="{{ asset('dist/imagecotisa/LOGO COTISA central grand.png') }}" alt="" class="img-fluid" style="width: 40%;position: absolute; left: 30%;top: -123%;"></a>
        </div>

        <h4 style=" position: fixed;margin: 0 auto;
          color: #fff; top: 20%; left: 50%;
           transform: translate(-50%, -50%);">
          Bienvenue sur votre compte Employeur
          </h4>
           

        <div class="col-md-2 text-center btn" 
         style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#036414; color: #fff;position: fixed; top: 52%; left: 50%; transform: translate(-50%, -50%);"
         onmouseover="this.style.backgroundColor='#0F9727';" 
         onmouseout="this.style.backgroundColor='#036414';">
    <a href="{{route('declaration')}}" class="text-white">Déclarer un employé</a>
    </div>


    <div class="col-md-3 text-center btn" 
         style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#036414; color: #fff;position: fixed; top: 60%; left: 50%; transform: translate(-50%, -50%);"
         onmouseover="this.style.backgroundColor='#0F9727';" 
         onmouseout="this.style.backgroundColor='#036414';">
    <a href="{{route('inscription')}}" class="text-white">Effectuer une cotisation</a>
    </div>

    <div class="col-md-3 text-center btn" 
         style="border-radius:50px; box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#410364; color: #fff;position: fixed; top: 68%; left: 50%; transform: translate(-50%, -50%);"
         onmouseover="this.style.backgroundColor='#6C149E';" 
         onmouseout="this.style.backgroundColor='#410364';">
      <a href="{{route('identification')}}" class="text-white">Déclarer son entreprise</a>
    </div>

    <div class="col-md-3 text-center btn" style=" border-radius:50px;box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer;position: fixed; top: 76%; left: 50%; transform: translate(-50%, -50%); margin: 0 auto;background-color:#E98109; color: #fff;"
         onmouseover="this.style.backgroundColor='#FFA500';" 
         onmouseout="this.style.backgroundColor='#E98109';">
      <a href="{{route('liste_des_declares')}}" class="text-white">Voir liste d'employés déclarés</a>
    </div>

    
   

   
      </div>
    </div>
  </div>
</div>





<!-- <i class="fas fa-hand-pointer" style="color: dark;"></i> -->
<!-- bouton cotisa style -->
<div class="container-fluid" >
    
</div>




<!-- <div class="container-fluid">
  <div class="row py-5" style="background-color: #ECEBEB;">
    <div class="col-md-2 text-center btn " style="box-shadow: 0px 5px 10px rgba(2, 2, 20, 0.6); cursor: pointer; margin: 0 auto;background-color:#E98109; color: #fff;">
      <a href="#" class="text-white">Commencer maintenant</a>
    </div>
  </div>
</div> -->



<!-- <div class="row">
        <div class="col-md-12">
        <img src="{{asset('dist/imagecotisa/ibg1.png')}}" alt="" style="width:100%;" />
        </div>
    </div> -->
@include('layoutscotisa.footer')



