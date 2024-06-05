

@include('Includes.admin_header')

@include('Includes.admin_sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cida Uganda</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Event</h5>

              <!-- General Form Elements -->
              <form method="POST" action="{{ route('store-edit-event') }}" enctype="multipart/form-data">

                <input type="hidden" class="form-control" value="{{$eventRecord->id}}" name="record_id" required>


                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" value="{{$eventRecord->title}}" name="title" required>
                  </div>
                </div>


                <div class="row mb-3">


                  <label for="inputEmail" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-2">
                    <input type="date" class="form-control" name="Start_time" value="{{$eventRecord->goal}}" required>
                  </div>

                  <label for="inputEmail" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="End_time" value="{{$eventRecord->raised}}" required>
                  </div>

                  <label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="location" value="{{$eventRecord->location}}" required>
                  </div>
                  

                </div>
              
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Introduction</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="introduction" value="{{$eventRecord->introduction}}" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="editorContent" id="editorContent" class="form-control">{{$eventRecord->editorContent}}</textarea>
                  </div>
                </div>
          
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="imageUpload" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Save Event</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save Event</button>
                  </div>
                </div>


                <script>
                  // Initialize CKEditor
                  CKEDITOR.replace('editorContent');
              </script>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->


  @include('Includes.admin_footer')