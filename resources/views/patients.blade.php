@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الرقم القومي</th>
                            <th>رقم التليفون</th>
                            <th>تسجيل الدخول</th>
                            <th>تسجيل الخروج</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $i => $patient)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->national_id }}</td>
                            <td>{{ $patient->mobile }}</td>
                            <td>{{ $patient->checkin }}</td>
                            <td>{{ $patient->checkout == null ? "" : $patient->checkout}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection