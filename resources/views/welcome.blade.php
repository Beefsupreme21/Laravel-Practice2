

<x-alert/>

<h1>{{$heading}}</h1>
@foreach ($listings as $listing)
    <a href="/help/{$id}"><h2>{{$listing['title']}}</h2></a>
    
    <p>{{$listing['description']}}</p>
@endforeach

<a href="/help">Help</a>