<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Preloader -->

    <div class="content-wrapper">
      <div class="row m-0 p-0">
        <div class="col-12 mx-auto p-sm-3">
          <ul class="nav nav-tabs bg-light" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="text-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#table">เพิ่มรายการใหม่</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#text">นำเสนอร่าง<span class="badge badge-primary">2</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ไม่สำเร็จ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ไม่สำเร็จ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">วันหยุด</a>
            </li>
          </ul>
          <div class="tab-content h-100 " id="nav-tabContent">


            <div id="table" role="tabpanel" class="card p-3 tab-pane fade show active mt-3" aria-labelledby="text-tab">
              <h3>เพิ่มข้อมูลรายการ</h3>

              <form action="<?php echo site_url('Form/form_add') ?>" method="POST">
                <div class="row m-0 p-0 form-group">

                  <div class="col-12">
                    <?php foreach ($rs as $i) { ?>
                      <p class="text-dark">


                        ตรงวันหยุด <span class="text-danger"><?= ($i['total_date']) ?></span> วัน

                      </p>


                      วันหมดอายุ <?echo ($i['total']) ?>
                      เหลือเวลา <?= ($i['dateoff_list']) ?>
                    <?php } ?>
                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>เลขที่หน่วยงาน</small>
                    <input class="form-control" type="text">
                  </div>

                  <div class="col-12 col-sm-3 pt-3">
                    <small>หน่วยงาน</small>
                    <select name="" class="form-control selectpicker">
                      <option value="">Select your /Office</option>
                      <option> of Engineering</option>
                      <option> of Agriculture</option>
                      <option>Accounting Office</option>
                      <option>Tresurer's Office</option>
                      <option>MPDC</option>
                      <option>MCTC</option>
                      <option>MCR</option>
                      <option>Mayor's Office</option>
                      <option>Tourism Office</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-3 pt-3">
                    <small>สถานที่</small>
                    <select name="" class="form-control selectpicker">
                      <option value="">Select your /Office</option>
                      <option> of Engineering</option>
                      <option> of Agriculture</option>
                      <option>Accounting Office</option>
                      <option>Tresurer's Office</option>
                      <option>MPDC</option>
                      <option>MCTC</option>
                      <option>MCR</option>
                      <option>Mayor's Office</option>
                      <option>Tourism Office</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>ชื่อเรื่อง</small>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-6 col-sm-3  pt-3">
                    <small>จำนวน</small>
                    <select name="" class="form-control selectpicker">
                      <option value=""></option>
                      <option>ตู้</option>
                      <option>บาน</option>
                      <option>ม้วน</option>
                      <option>เส็น</option>
                      <option>เมตร</option>
                    </select>
                  </div>
                  <div class="col-6 col-sm-3 pt-3 ">
                    <small>หน่วย</small>
                    <select name="" class="form-control selectpicker">
                      <option value=""></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>

                  <div class="col-12 col-sm-3 pt-3">
                    <small>ประเภทงาน</small>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-12 col-sm-3 pt-3">
                    <small>งวดงาน</small>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-12 col-sm-3 pt-3">
                    <small>เริ่ม</small>
                    <input class="form-control" type="date" name="start">
                  </div>
                  <div class="col-12 col-sm-3 pt-3">
                    <small>สิ้นสุด</small>
                    <input class="form-control" type="date" name="end">
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <button class="w-100  btn btn-primary">ยื่นเอกสาร
                    </button>
                  </div>

                </div>
              </form>

            </div>
            <div id="text" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">

              <table id="example" class="table table-striped table-bordered tab-pane">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อลำดับ</th>
                    <th>ผู้ร้องขอ</th>
                    <th>สถานะ</th>
                    <th>แก้ไข้</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>การก่อสร้างผนังประตู</td>
                    <td>ธนพล กัลปพฤกษ์</td>
                    <td>
                      <p class=" badge rounded-pill bg-primary">เรียบร้อย</p>
                    </td>
                    <td>
                      <div class="btn btn-primary">
                        Edit
                      </div>
                    </td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>