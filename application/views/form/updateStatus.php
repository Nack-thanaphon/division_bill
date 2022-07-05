<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="row m-0 p-0">
        <div class="col-12 mx-auto p-sm-3">
          <button class="btn btn-secondary my-2 col-2 w-100 text-start"> กลับ</button>
          <div role="tabpanel" class="card p-3 tab-pane fade show active mt-3" aria-labelledby="text-tab">
            <div class="row m-0">
              <div class="col-12 col-sm-8">
                <h2>รายละเอียดข้อมูล</h2>
                <?php foreach ($getData as $row) { ?>
                  <div class="row m-0 p-0 form-group">
                    <div class="col-12  pt-3">
                      <h6 class="text-muted ">เลขที่เอกสาร</h6>
                      <h1 class="font-weight-bold  text-primary "><?= $row->b_name ?></h1>
                    </div>
                    <div class="col-12 col-sm-6 pt-3">
                      <h6 class="text-muted ">งวดงานที่</h6>
                      <b><?= $row->b_job_order ?></b>
                    </div>
                    <div class="col-12 col-sm-6 pt-3">
                      <h6 class="text-muted ">ประเภทงาน</h6>
                      <b><?= $row->j_name ?></b>
                    </div>
                    <div class="col-12 col-sm-6  pt-3">
                      <h6 class="text-muted ">หน่วยงาน</h6>
                      <b><?= $row->a_name ?></b>
                    </div>
                    <div class="col-12 col-sm-6  pt-3">
                      <h6 class="text-muted ">สถานที่</h6>
                      <b><?= $row->wa_name ?></b>
                    </div>
                    <div class="col-12 col-sm-12 pt-3">
                      <h6 class="text-muted ">ชื่อเรื่อง</h6>
                      <b><?= $row->b_title ?></b>
                    </div>
                    <div class="col-12 col-sm-12 pt-3">
                      <h6 class="text-muted ">รายละเอียด</h6>
                      <b><?= $row->b_detail ?></b>
                    </div>
                    <div class="col-12  pt-3 ">
                      <h6 class="text-muted ">จำนวน</h6>
                      <b><?= $row->b_unit ?> <span class="text-bold"><?= $row->bl_name ?></span></b>

                    </div>

                    <div class="col-12 col-sm-4 pt-3">
                      <h6 class="text-muted ">ตั้งแต่วันที่ </h6>
                      <b><?= $row->b_start ?></b>
                    </div>
                    <div class="col-12 col-sm-4 pt-3">
                      <h6 class="text-muted ">จนถึงวันที่</h6>
                      <b><?= $row->b_end ?></b>
                    </div>

                  </div>
                <?php } ?>
              </div>
              <div class="col-12 col-sm-4">
                <div class="row pt-3">
                  <div class="col-6">
                    <button class="m-1 btn btn-success w-100">อนุมัติ</button>
                  </div>
                  <div class="col-6">
                    <button class="m-1 btn btn-warning w-100">ไม่อนุมัติ</button>
                  </div>
                  <div class="col-12">
                    <p class="py-2 m-0 text-right">เหลือเวลาทั้งหมด <span class="text-red">15</span> วัน</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>