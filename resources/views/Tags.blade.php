<!DOCTYPE html>
@extends('layouts.gest')
@section('content')

    <div class="row" style="padding: 0 2%;">
        <div class="card lg-2">
            <div class="card-body">
                <div class="position-relative start-50 translate-middle-x">
                    <h1 class="text-center"> Liste Des MotsClés</h1>
                </div>
                @livewire('mots-cles')
            </div>
        </div>
    </div>
@endsection
