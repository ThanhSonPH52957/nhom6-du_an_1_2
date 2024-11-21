<?php include './views/layout/header.php'; ?>
  <!-- Navbar -->
  <?php include './views/layout/navbar.php'; ?>
  <!-- /.navbar -->
  <?php include './views/layout/sidebar.php'; ?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý dịch vụ khách sạn</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa dịch vụ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= BASE_URL_ADMIN . '?act=updatedichvu&id='.$onedichvu['id'] ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" class="form-control" name="ten_dich_vu" value="<?= $onedichvu['ten_dich_vu'] ?>" placeholder="Nhập tên dịch vụ">
                    <?php if(isset($errors['ten_dich_vu'])) { ?>
                      <p class="text-danger"><?= $errors['ten_dich_vu'] ?></p>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label>Giá dịch vụ</label>
                    <input type="number" class="form-control" name="gia_dich_vu" value="<?= $onedichvu['gia_dich_vu'] ?>" placeholder="Nhập giá dịch vụ">
                    <?php if(isset($errors['gia_dich_vu'])) { ?>
                      <p class="text-danger"><?= $errors['gia_dich_vu'] ?></p>
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea type="text" class="form-control" name="mo_ta" placeholder="Nhập mô tả"><?= $onedichvu['mo_ta'] ?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="updateCate">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './views/layout/footer.php'; ?>
<!-- Code injected by live-server -->

</body>
</html>
