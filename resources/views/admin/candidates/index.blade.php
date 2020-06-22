@extends('layouts.admin')
@section('styles')
    <link href="{{asset('admin_assets/plugins/bootstrap-table/css/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-t-0 header-title">candidates</h4>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="card-box col-md-12">

            <table data-toggle="table"
                   data-page-list="[5, 10, 20]"
                   data-page-size="5"
                   data-pagination="true" class="table-bordered ">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>position</th>
                    <th>cv</th>

                    <th data-field="Actions" data-align="center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($candidates as $candidate):
                ?>
                <tr>

                    <td>{{$candidate->first_name}}</td>
                    <td>{{$candidate->last_name}}</td>
                    <td>{{$candidate->position}}</td>
                    <td>
                        <a href="{{asset('uploads/cvs/').'/'.$candidate->cv}}" download="{{$candidate->cv}}">{{$candidate->cv}}</a>
{{--                    <a download="{{asset('uploads/cvs/').'/'.$candidate->cv}}">{{$candidate->cv}}--}}
                    </td>
                    <td>


                        <a data-toggle="modal" class="btn btn-danger" data-target=".{{$candidate['id'].'delete'}}" >Delete</a>

                    </td>
                </tr>
                {{--Modal for user delete--}}
                <div class="modal fade {{$candidate['id'].'delete'}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mt-0" style="color: red">Do You Wanna Delete This candidate</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['method'=>'Delete','action'=>['AdminCandidatesController@destroy',$candidate['id']]]) !!}
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                {!! Form::close() !!}
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                {{--End Modal for user delete--}}{{--Modal for user delete--}}
                <!-- /.modal -->
                {{--End Modal for user delete--}}

                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{asset('admin_assets/plugins/bootstrap-table/js/bootstrap-table.js')}}"></script>
    <script src="{{asset('admin_assets/pages/jquery.bs-table.js')}}"></script>
@stop













