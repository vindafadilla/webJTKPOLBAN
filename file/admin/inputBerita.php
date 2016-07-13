<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-newspaper-o"></i> Input Berita
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="inc/adminModel.php?a=insertBerita">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Berita</h3>
            </div>

          <div class="panel-body">


            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Judul Berita</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-2">Berita</label>
                  <div class="col-md-10">
                      <!--<input type="text" class="form-control" name="info" required/>-->
                      <textarea class="form-control" name="info"></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-2">Tanggal</label>
                  <div class="col-md-10">
                      <input type="date" class="form-control" name="tgl" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-2">Photo</label>
                  <div class="col-md-10">
                      <input type="file" name="namafilefoto" id="foto" required />
                  </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
            </div>

          </div>
        </div>
      </form>
    </div>   
  </div>  
</div>