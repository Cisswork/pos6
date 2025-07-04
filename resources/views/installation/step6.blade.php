@extends('layouts.blank')

@section('content')
    <div class="text-center text-white mb-4">
        <h2>{{\App\CPU\translate('6POS Software Installation')}}</h2>
        <h6 class="fw-normal">{{\App\CPU\translate('All Done, Great Job. Your software is ready to run')}}. <a style="color:red;" href="https://weadown.com" target="_blank">weadown.com</a></h6>
    </div>

    <div class="card mt-4">
        <div class="p-4 mb-md-3 mx-xl-4 px-md-5">
            <div class="p-4 rounded mb-4 text-center">
                <h5 class="fw-bold">{{\App\CPU\translate('Configure the following setting to run the system properly')}}</h5>

                <ul class="list-group mar-no mar-top bord-no">
                    <li class="list-group-item">{{\App\CPU\translate('Business Setting')}}</li>
                </ul>
            </div>

            <div class="text-center">
                <a href="{{ env('APP_URL') }}/admin/auth/login" target="_blank" class="btn btn-dark px-sm-5">{{\App\CPU\translate('Admin Panel')}}</a>
            </div>
        </div>
    </div>
@endsection
