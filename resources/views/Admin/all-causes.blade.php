    @include('Includes.admin_header')
    @include('Includes.admin_sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Causes</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container-fluid">
                        @if (Session::get('success'))
                        <div class="alert alert-primary">
                            {{Session::get('success')}}
                        </div>
                        @endif
                    </div>

                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Cida Uganda Causes</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <th>Goal</th>
                                        <th>Raised</th>
                                        <th>Goal</th>
                                        <th>Introduction</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($allCauses as $key => $cause)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{ $cause->title }}</td>
                                            <td>{{ $cause->goal }}</td>
                                            <td>{{ $cause->raised }}</td>
                                            <td>{{ $cause->introduction }}</td>
                                            <td colspan="2">
                                                <a href="{{ url('delete/cause/'.$cause->id)}}" onclick=" return confirm('Do you want to delete this Cause ?')" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->



    @include('Includes.admin_footer')
