@extends('layouts.admin')
@section('content')
    <h4 class="m-t-0 header-title">Edit The Article</h4>
    {!! Form::model($job,['method'=>'PATCH','action'=>['AdminJobsController@update',$job->id],'files'=>true]) !!}
    <div class="form-group">
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control','required']) !!}
        </div>


        <div class="form-group">
            <div class="form-group">
                {!! Form::label('quote','quote') !!}
                {!! Form::text('quote',null,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('job Requirements','job_requirements') !!}
                {!! Form::textarea('job_requirements',null,['class'=>'form-control','id'=>'elm1']) !!}
                @if ($errors->has('job_requirements'))
                    <div class="alert alert-danger">{{ $errors->first('job_requirements') }}</div>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('job Reponsabilities','job_reponsabilities') !!}
                {!! Form::textarea('job_reponsabilities',null,['class'=>'form-control','id'=>'elm1']) !!}
                @if ($errors->has('job_reponsabilities'))
                    <div class="alert alert-danger">{{ $errors->first('job_reponsabilities') }}</div>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('career','career') !!}
                <select  name="careers_id"  id="careers_id"   class="form-control">

                    @foreach($careers as $career)
                        @if($job->careers_id == $career->id)

                        <option value='{{$career->id}}' {{ ($job->careers_id == $career->id) ? 'selected' : '' }}>{{$career->title}}</option>
                        @else

                            <option value='{{$career->id}}'>{{$career->title}}</option>
                        @endif
                    @endforeach
                </select>
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
