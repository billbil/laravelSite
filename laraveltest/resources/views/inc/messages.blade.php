<?php
/**
 * Created by PhpStorm.
 * User: bilbil
 * Date: 15/04/2018
 * Time: 22:00
 */
?>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif