{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
           
        </div>
    </div>
</div> --}}
@extends('layouts.admin_master')
       
@section('content')
<div class="cont">
                <a class="btn btn-lg btn-warning form-control" href="{{ route('userrights.index') }}">
                    User Managment
                </a>
                <a  class="btn btn-lg btn-primary form-control" href="{{ route('departments.index') }}">
                    Departments
                    </a>
                <a class="btn btn-lg btn-primary form-control" href="{{ route('programs.index') }}">
                    Programs
                </a>
                <a class="btn btn-lg btn-primary form-control" href="{{ route('exams.index') }}">
                    Exams
                </a>
                <a class="btn btn-lg btn-primary form-control" href="{{ route('sessions.index') }}">
                    Sessions
                </a>
</div>
@endsection
