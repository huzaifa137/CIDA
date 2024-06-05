@include('Includes.admin_header')
@include('Includes.admin_sidebar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>All Events</h1>
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
                        <h5 class="card-title">All Cida Uganda Events</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        id
                                    </th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Introduction</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allEvents as $key => $cause)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{ $cause->title }}</td>
                                        <td>{{ $cause->goal }}</td>
                                        <td>{{ $cause->raised }}</td>
                                        <td>{{ $cause->location }}</td>
                                        <td>{{ $cause->introduction }}</td>
                                        <td colspan="2">
                                            <a href="{{ url('edit/event/'.$cause->id)}}" onclick=" return confirm('Do you want to edit this Event ?')" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ url('delete/event/'.$cause->id)}}" onclick=" return confirm('Do you want to delete this Event ?')" class="btn btn-danger btn-sm">Delete</a>
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
