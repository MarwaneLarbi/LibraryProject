<!DOCTYPE html>
@extends('Layouts.gest')
@section('content')

    <div class="row" style="padding: 0 2%;">
        <div class="card lg-2">
            <div class="card-body">
                <div class="position-relative start-50 translate-middle-x">
                    <h1 class="text-center"> Liste Des Categories</h1>
                </div>
                @livewire('categories')
            </div>
        </div>
    </div>
@endsection
