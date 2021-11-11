@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'body',
        'label' => 'Body',
        'maxlength' => 100
    ])
    @formField('select', [
        'name' => 'post_id',
        'label' => 'Post',
        'options' => $posts
    ])
@stop
