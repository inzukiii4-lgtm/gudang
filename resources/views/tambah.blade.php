    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

                  <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

                      <!-- General Form Elements -->
              <form method="post" action="/aksitambah">
                @csrf
                <div class="row mb-3">
                  <label for="inputtext" class="col-sm-2 col-form-label">kode barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputnama" class="col-sm-2 col-form-label">nama barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang">
                  </div>
                </div>
          
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
