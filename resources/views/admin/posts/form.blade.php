@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 100
    ])
    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Post Content',
        'toolbarOptions' => [
            ['header' => [2, 3, 4, 5, 6, false]],
            'bold',
            'italic',
            'underline',
            'strike',
            ["script" => "super"],
            ["script" => "sub"],
            "blockquote",
            "code-block",
            ['list' => 'ordered'],
            ['list' => 'bullet'],
            ['indent' => '-1'],
            ['indent' => '+1'],
            ["align" => []],
            ["direction" => "rtl"],
            'link',
            "clean",
        ],
        'placeholder' => '',
        'maxlength' => 200,
        'note' => '',
    ])
    @formField('multi_select', [
        'name' => 'pages',
        'label' => 'Pages',
        'options' => $pages
    ])
@stop
