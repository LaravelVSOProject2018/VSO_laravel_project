
@extends('layouts.admin_master')
       
@section('content')
<div class="cont">
                <a class="btn btn-lg btn-warning btn-block" href="{{ route('userrights.index') }}">
                    User Managment
                </a>
                <a  class="btn btn-lg btn-primary btn-block" href="{{ route('departments.index') }}">
                    Departments
                    </a>
                <a class="btn btn-lg btn btn-success btn-block" href="{{ route('programs.index') }}">
                    Programs
                </a>
                <a class="btn btn-lg btn-info btn-block" href="{{ route('exams.index') }}">
                    Exams
                </a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ route('sessions.index') }}">
                    Sessions
                </a>
</div>
@endsection
