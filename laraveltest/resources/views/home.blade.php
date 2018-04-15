<?php
/**
 * Created by PhpStorm.
 * User: bilbil
 * Date: 15/04/2018
 * Time: 19:32
 */
?>

@extends('layouts.app')

@section('content')
<h1> Welcome home </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at consequatur distinctio dolorum earum eos, eum hic, incidunt itaque magni mollitia necessitatibus obcaecati odit perspiciatis reprehenderit sequi sint totam voluptatem.</p>
@endsection('content')

@section('sidebar')
    @parent
<p>THE SIDEBAR</p>
@endsection