@include('partials.css')
<div class="container" style="margin-top: 100px;">
 <!-- Pricing -->
 <center><h2>Renouveller Votre Abonnement</h2></center>
  <!-- Pricing -->
  <div class="row" id="section4" style="padding-top: 80px;">
    <div class="col-md-6">

  <div class="card mb-5 mb-sm-0">
    <!-- Header -->
    <header class="card-header text-center p-5">
      <h4 class="h6 text-primary mb-3">Basique</h4>
      <span class="d-block">
        <span class="display-4 text-dark">
          90 MAD
        </span>
        <span class="d-block text-secondary font-size-14">par mois</span>
      </span>
    </header>
    <!-- End Header -->

    <!-- Content -->
    <div class="card-body p-5">
      <ul class="list-unstyled mb-4">
       <li class="font-size-14 py-2">Type de blocs limités</li>
        <li class="font-size-14 py-2">Génération sécurisée de vos landing pages</li>
        <li class="font-size-14 py-2">Génération sécurisée de vos blocs</li>
        <li class="font-size-14 py-2">Réception sécurisée des formulaires clients</li>
        <li class="font-size-14 py-2">Ajout facile des clients en un seul clic</li>
        <li class="font-size-14 py-2">Support client réactif</li>

      </ul>

      <a href="{{ route('stripe.renew', ['id_pack' => '1', 'price' => '90', 'type' => 'Basique', 'quantity' => '1', 'user_id' => request('user_id')]) }}" class="href">
        <button type="button" class="btn btn-primary card-img-bottom">Renew</button>
      </a>         </div>
    <!-- End Content -->
  </div>
 </div>

  <!-- End Pricing -->


  {{-- Second Pricing --}}
  <!-- Pricing -->
  <div class="col-md-6">

  <div class="card mb-5 mb-sm-0">
    <!-- Header -->
    <header class="card-header text-center p-5">
      <h4 class="h6 text-primary mb-3">Premium</h4>
      <span class="d-block">
        <span class="display-4 text-dark">
          190 MAD
        </span>
        <span class="d-block text-secondary font-size-14">par mois</span>
      </span>
    </header>
    <!-- End Header -->

    <!-- Content -->
    <div class="card-body p-5">
      <ul class="list-unstyled mb-4">
       <li class="font-size-14 py-2">Type de blocs illimités</li>
        <li class="font-size-14 py-2">Génération sécurisée de vos landing pages</li>
        <li class="font-size-14 py-2">Génération sécurisée de vos blocs</li>
        <li class="font-size-14 py-2">Réception sécurisée des formulaires clients</li>
        <li class="font-size-14 py-2">Ajout facile des clients en un seul clic</li>
        <li class="font-size-14 py-2">Support client réactif</li>

      </ul>

      <a href="{{ route('stripe.renew', ['id_pack' => '2', 'price' => '190', 'type' => 'Premium', 'quantity' => '1', 'user_id' => request('user_id')]) }}" class="href">
        <button type="button" class="btn btn-primary card-img-bottom">Renew</button>
      </a>       </div>
    <!-- End Content -->
  </div>
 </div>

 </div>

  <!-- End Pricing -->
</div>
  @include('partials.newfooter')
  @include('partials.js')
  <!-- End Pricing -->