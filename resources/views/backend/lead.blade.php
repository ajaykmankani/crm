@extends('backend.layout.app')
@section('main')
<div class="main">


    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Tables</h1>

            <div class="row">






                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Contextual Classes</h5>
                            <h6 class="card-subtitle text-muted">Use contextual classes to color table rows or individual cells.</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Name</th>
                                        <th style="width:25%">Phone Number</th>
                                        <th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vanessa Tucker</td>
                                        <td>864-348-0485</td>
                                        <td class="d-none d-md-table-cell">June 21, 1961</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>


    @endsection