<!DOCTYPE html>
@extends('Layouts.gest')
@section('content')
    <div class="position-lg-relative start-70 translate-middle-x">
        <h1> Liste Messages</h1>
    </div>
    <div class="row" style="padding: 0 2%;">
        <div class="card lg-2">
            <div class="card-body">
                <div class="position-relative start-50 translate-middle-x">
                    <h1 class="text-center"> Liste Des Messages</h1>
                </div>
                @livewire('contact-liste')
            </div>

        </div>

    </div>
@endsection
