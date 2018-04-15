<?php
/**
 * Created by PhpStorm.
 * User: bilbil
 * Date: 15/04/2018
 * Time: 23:16
 */
?>


@extends('layouts.app')

@section('content')
    <h1> Messages </h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item"> Name: {{$message->name}} </li>
                <li class="list-group-item"> Email: {{$message->email}} </li>
                <li class="list-group-item"> Message: {{$message->message}} </li>
            </ul>
        @endforeach
    @endif
@endsection('content')

@section('sidebar')
    @parent
    <p>THE SIDEBAR</p>
@endsection
