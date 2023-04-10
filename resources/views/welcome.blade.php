@extends('layouts.app')

@section('content')

<div class="container">
    <h1>current series</h1>
    
    <div class="row">
        
            
        @foreach ($comics as $comic)
            <div class="col-2">
                <h3>{{'title'}}</h3>
            </div>
        @endforeach
            
        
    </div>
</div>
    
@endsection

@section('page-title', $page_title)