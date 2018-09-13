@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form action="{{ route('suscribirse')}}" method="POST">
                      <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="{{ config('services.stripe.key') }}"
                        data-amount="999"
                        data-name="Chef4Pets.com"
                        data-email="{{ Auth::user()->email }}"
                        data-description="Pago"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-label="Realizar Pago"
                        data-locale="auto">
                      </script>
                        {{ csrf_field() }}
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
