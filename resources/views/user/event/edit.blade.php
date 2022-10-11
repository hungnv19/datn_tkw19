@extends('layouts.user')
@php
if (isset($errors) && count($errors)) {
    // dd($errors);
}
@endphp
@section('content')
    <event-form
        :data="{{ json_encode([
            'editMode' => true,
            'urlStore' => route('event.store'),
            'urlEventList' => route('event.index'),
            'urlUploadFile' => route('upload'),
            'urlSearchTag' => route('search-tag'),
            'event' => $event,
            'categories' => $categories,
            'areas' => $areas,
            'prefectures' => $prefectures,
            'suggestTags' => $suggestTags,
            'userCredit' => $userCredit,
            'STRIPE_PUBLISH_KEY' => env('STRIPE_PUBLISH_KEY'),
        ]) }}">
    </event-form>
@endsection
