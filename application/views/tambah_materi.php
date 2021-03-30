<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Materi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>index.php/hello/materi">Materi</a></li>
                        <li class="breadcrumb-item active">Tambah Materi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Input addon -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Input Materi</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-2">Judul Materi</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Judul Materi">
                            </div>

                            <h5 class="mt-4 mb-2">Isi Materi</h5>

                            <div class="row">

                                <!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">A</span>
                                        </div>
                                        <textarea type="text" class="form-control" rows="3" placeholder="Isi Materi"></textarea>
                                    </div>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-lg-right">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>