@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'name',
        'label' => 'Name',
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'path',
        'label' => 'Path',
        'maxlength' => 100
    ])
@stop
