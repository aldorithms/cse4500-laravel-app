@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Header</h1>
@stop

@section('content')
    <p>Content here</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

/*
I think on Heroku you just click the Resources tab when you're on your website's Overview 
and it should say Add-ons and a search bar right below it, search "Postgres" and Heroku Postgres should come up.

Add it, and it should take you to another tab. 
You should be able to find the URI for your Database by going to the Settings and clicking View Credentials.
Copy and paste the URI into the DB_HOST in your .env file and see if it connects with the code he gives in Assignment 5:

Route::get('/db-test', function () {
    try {
         echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
          echo 'None';
    }
});

You should get a random string like: d4q3oni2d3ftgh
*/