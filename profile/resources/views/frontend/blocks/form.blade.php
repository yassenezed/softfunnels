@if (json_decode($block->details, true))
<!-- Contact Us Form Section -->
<div class="container space-2 space-3--lg">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    @foreach (json_decode($block->details, true) as $detail)
    <h2 class="h3">{{ $detail['headline'] }}</h2>
  </div>
  <!-- End Title -->

  <div class="w-lg-80 mx-auto">
    <form class="js-validate" method="POST" action="{{ route('leads.store', ['id' => $landingpage->id]) }}">
      @csrf
      {{-- {{ route('leads.store')}} --}}
      <input type="hidden" name="id" value="{{ $landingpage->id }}">
      <div class="row">
        <!-- Input -->
        <div class="col-sm-6 mb-6">
          <div class="js-form-message">
            <div class="js-focus-state input-group form">
              <input class="form-control form__input" type="text" name="name" required
                     placeholder="Nom Complet"
                     aria-label="Your name"
                     data-msg="S'il vous plait entrer votre nom."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
        </div>
        <!-- End Input -->

        <!-- Input -->
        <div class="col-sm-6 mb-6">
          <div class="js-form-message">
            <div class="js-focus-state input-group form">
              <input class="form-control form__input" type="email" name="email" required
                     placeholder="Votre Adresse Email"
                     aria-label="Your email address"
                     data-msg="S'il vous plait entrer votre addresse email"
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
        </div>
        <!-- End Input -->

        <div class="w-100"></div>

        <!-- Input -->
        <div class="col-sm-6 mb-6">
          <div class="js-form-message">
            <div class="js-focus-state input-group form">
              <input class="form-control form__input" type="text" name="adress" 
                     placeholder="Address (Optionnelle)"
                     aria-label="adress"
                     data-msg="Please enter a subject."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
        </div>
        <!-- End Input -->

        <!-- Input -->
        <div class="col-sm-6 mb-6">
          <div class="js-form-message">
            <div class="js-focus-state input-group form">
              <input class="form-control form__input" type="number" name="phone" required
                     placeholder="Numero de telephone"
                     aria-label="Your phone number"
                     data-msg="S'il vous plait entrer un numero de telephone valide."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
        </div>
        <!-- End Input -->
      </div>

      <!-- Input -->
      <div class="js-form-message mb-9">
        <div class="js-focus-state input-group form">
          <input class="form-control form__input" type="text" name="company" 
                    placeholder="Société? (Optionnelle)"
                    aria-label="How can we help you?"
                    data-msg="S'il vous plait entrer une société."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success"></textarea>
        </div>
      </div>
      <!-- End Input -->

      <!-- Input -->
      <div class="js-form-message mb-9">
        <div class="js-focus-state input-group form">
          <textarea class="form-control form__input" rows="6" name="notes" 
                    placeholder="Notes?"
                    aria-label="How can we help you?"
                    data-msg="Please enter a reason."
                    data-error-class="u-has-error"
                    data-success-class="u-has-success"></textarea>
        </div>
      </div>
      <!-- End Input -->

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-wide mb-4">{{ $detail['button'] }}</button>
      </div>
    </form>
  </div>
  @endforeach
@endif
<!-- End Contact Us Form Section -->