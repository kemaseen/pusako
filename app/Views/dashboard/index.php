<?= $this->extend('dashboard/layout/template'); ?>

<?= $this->section('title'); ?>
<title>AdminLTE 2 | Dashboard</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="col-md-12">
      <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Dashboard</h3>
            </div>
            <div class="box-body pad table-responsive">
              <p>Content</p>
            </div>
            <!-- /.box -->
          </div>
      </div>
      </div>
  </section>
</div>
<?= $this->endSection(); ?>