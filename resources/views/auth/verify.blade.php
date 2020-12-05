@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('დაადასტურეთ ელ-ფოსტა') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ახალი ვერიფიკაციის ლინკი გამოიგზავნა თქვენ ელ-ფოსტაზე.') }}
                        </div>
                    @endif

                    {{ __('გაგრძელებამდე, გთხოვთ შეამოწმოთ მეილი ვერიფიკაციის ლინკისთვის.') }}
                    {{ __('თუ ვერ მიიღეთ ლინკი') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('დააჭირეთ აქ ხელმეორედ მოთხოვნისთვის') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
