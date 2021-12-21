@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center"><h5>{{ __('基本情報') }}</h5> <a href="{{url('/user/edit')}}" class="btn btn-info">編集する</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table table-borderless">
                            <tr>
                                <th class="text-right">
                                {{ __('Name') }}
                                </th>
                                <td>
                                    {{Auth::user()->name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-right">
                                {{ __('E-Mail Address') }}
                                </th>
                                <td>
                                    {{Auth::user()->email}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-right">
                                {{ __('電話番号') }}
                                </th>
                                <td>
                                    {{Auth::user()->phone_number}}
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
