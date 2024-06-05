

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
              <h5 class="card-title">Edit Cause</h5>

              <!-- General Form Elements -->
              <form method="POST" action="{{ route('store-edit-cause') }}" enctype="multipart/form-data">
                @csrf


                <input type="hidden" class="form-control" name="record_id" value="{{$causeRecord->id}}" >


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" name="title" value="{{$causeRecord->title}}" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Goal</label>

                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="goal" value="{{$causeRecord->goal}}" required>
                  </div>

                  <label for="inputEmail" class="col-sm-2 col-form-label">Raised</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="raised" value="{{$causeRecord->raised}}" required>
                  </div>

                </div>
              
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Introduction</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="introduction" value="{{$causeRecord->introduction}}" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="editorContent" id="editorContent" class="form-control" required>value="{{$causeRecord->editorContent}}"</textarea>
                  </div>
                </div>
          
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="imageUpload" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Save cause</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Cause</button>
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

  