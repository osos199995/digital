@extends('layouts.admin')
@section('content')
    <h4 class="m-t-0 header-title">Edit The Article</h4>
    {!! Form::model($service,['method'=>'PATCH','action'=>['AdminServicesController@update',$service->id],'files'=>true]) !!}
    <div class="form-group">
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Forward','Forward') !!}
            {!! Form::text('forward',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Date','Date') !!}
            {!! Form::date('date',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category','category') !!}
            {!! Form::text('category',null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('First description','first Description') !!}
            {!! Form::textarea('description1',null,['class'=>'form-control','id'=>'elm1']) !!}
            @if ($errors->has('description1'))
                <div class="alert alert-danger">{{ $errors->first('description1') }}</div>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('second description','second Description') !!}
            {!! Form::textarea('description2',null,['class'=>'form-control','id'=>'elm1']) !!}
            @if ($errors->has('description2'))
                <div class="alert alert-danger">{{ $errors->first('description2') }}</div>
            @endif
        </div>

        <div class="form-group">
            <input class="form-control"  type="file" name="image" multiple>
        </div>
        <button class="btn btn-success" type="submit">edit</button>
        <button class="btn btn-default" data-dismiss="modal" >Cancel</button>
    {!! Form::close() !!}

    @stop

    @section('scripts')
        <!-- Wysiwig js-->
            <script src="{{asset('admin_assets/plugins/tinymce/tinymce.min.js')}}"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    if($("#elm1").length > 0){
                        tinymce.init({
                            selector: "textarea#elm1",
                            theme: "modern",
                            height:300,
                            plugins: [
                                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                                "save table contextmenu directionality emoticons template paste textcolor"
                            ],
                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                            style_formats: [
                                {title: 'Bold text', inline: 'b'},
                                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                                {title: 'Example 1', inline: 'span', classes: 'example1'},
                                {title: 'Example 2', inline: 'span', classes: 'example2'},
                                {title: 'Table styles'},
                                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                            ]
                        });
                    }
                });
            </script>


@stop
