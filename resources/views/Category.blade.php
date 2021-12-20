<!DOCTYPE html>
@extends('layouts.gest')
@section('content')
    <div class="position-lg-relative start-70 translate-middle-x">
        <h1> Categories & Mots Clés</h1>
    </div>
    <div class="row" style="padding: 0 2%;">
        <div class="col">
            <div class="card lg-2">
                <div class="card-body">
                    @livewire('categories')
                </div>

            </div>

        </div>
        <div class="col">
            <div class="card lg-2">
                <div class="card-body">
                    @livewire('mots-cles')


                </div>

            </div>

        </div>
    </div>

@endsection
