@extends('backend.layout.app')
@section('main')
<div class="main">


    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Leads</h1>

            <div class="row">






                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Leads Table</h5>
                            <h6 class="card-subtitle text-muted">Here comes the lead from your website.</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Service</th>
                                        <th>Email</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($leads as $lead)
                                    <tr>
                                        <td>{{ ucfirst($lead->name) }}</td>
                                        <td><a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a></td>
                                        <td>{{ $lead->service }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ date('h:i a', strtotime($lead->created_at->toTimeString())) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($lead->created_at->toDateString())) }}</td>
                                        <td>
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>


    @endsection