<!DOCTYPE html>
@extends('layouts.gest')
@section('content')
    <div class="position-lg-relative start-70 translate-middle-x">
        <h1> Categories & Mots Clés</h1>
    </div>
    <div class="row" style="padding: 0 2%;">
        <div class="card lg-2">
            <div class="card-body">
                <div class="position-relative start-50 translate-middle-x">
                    <h1 class="text-center"> Liste Des Livres</h1>
                </div>
                @livewire('liste-livres')
            </div>

        </div>

    </div>
@endsection
