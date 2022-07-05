<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <div class="content-wrapper">
      <div class="row m-0 p-0">
        <div class="col-12 mx-auto p-sm-3">
          <ul class="nav nav-tabs bg-light" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#adddata">เพิ่มรายการใหม่</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#req">นำเสนอร่าง<span class="badge badge-primary"><?php echo ($countReq) ?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#pass">อนุมัติ<span class="badge badge-primary"><?php echo ($countPass) ?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#fail">ไม่อนุมัติ<span class="badge badge-primary"><?php echo ($countNopass) ?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#cancle">ยกเลิก<span class="badge badge-primary"><?php echo ($countFail) ?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#total">ทั้งหมด</span></a>
            </li>

          </ul>
          <div class="tab-content h-100 " id="nav-tabContent">


            <div id="adddata" role="tabpanel" class="card p-3 tab-pane fade show active mt-3" aria-labelledby="text-tab">
              <h3>เพิ่มข้อมูลรายการ</h3>

              <form action="<?php echo site_url('Form/form_add') ?>" method="POST">
                <div class="row m-0 p-0 form-group">

                  <div class="col-12">
                    <!-- <?php foreach ($rs as $i) { ?>
                      <p class="text-dark">


                        ตรงวันหยุด <span class="text-danger"><?= ($i['total_date']) ?></span> วัน

                      </p>


                      วันหมดอายุ <? echo ($i['total']) ?>
                      เหลือเวลา <?= ($i['dateoff_list']) ?>
                    <?php } ?> -->
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <small>เลขที่เอกสาร</small>
                    <input class="form-control" type="text" name="b_name">
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <small>ประเภทงาน</small>
                    <select name="b_jobType_id" class="form-control selectpicker">
                      <?php
                      foreach ($jobtype as $row) {
                        echo '<option value="' . $row->j_id . '">' . $row->j_name . '</option>';
                      }
                      ?>

                    </select>
                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>หน่วยงาน</small>
                    <select name="b_address_id" class="form-control selectpicker">
                      <?php
                      foreach ($address as $row) {
                        echo '<option value="' . $row->a_id . '" >' . $row->a_name . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>สถานที่</small>
                    <select name="b_working_id" class="form-control selectpicker">
                      <?php
                      foreach ($workingArea as $row) {
                        echo '<option value="' . $row->wa_id . '">' . $row->wa_name . '</option>';
                      }
                      ?>

                    </select>
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <small>ชื่อเรื่อง</small>
                    <input class="form-control" type="text" name="b_title">
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <small>รายละเอียด</small>
                    <textarea class="form-control" type="text" name="b_detail"></textarea>
                  </div>
                  <div class="col-6 col-sm-4   pt-3">
                    <small>วงในการขออนุมัติ</small>
                    <input class="form-control " type="number" name="b_start">
                  </div>
                  <div class="col-6 col-sm-4   pt-3">
                    <small>หน่วย</small>
                    <select name="b_unit_name" class="form-control selectpicker">
                      <?php
                      foreach ($list as $row) {
                        echo '<option value="' . $row->bl_id . '" >' . $row->bl_name . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col-6 col-sm-4 pt-3 ">
                    <small>จำนวน</small>
                    <div class="input-group mb-3">
                      <div class=" input-group-prepend">
                        <span class="btn btn input-group-text" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</span>
                      </div>
                      <input type="number" id="number" name="b_unit" value="0" class="form-control text-center" aria-describedby="basic-addon1">
                      <div class=" input-group-prepend">
                        <span class="btn btn input-group-text" id="increase" onclick="increaseValue()" value="Increase Value">+</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 pt-3">
                    <small>งวดงาน</small>
                    <input class="form-control" name="b_job_order" type="text">
                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>ตั้งแต่วันที่ </small>
                    <input class="form-control " type="date" name="b_start">

                  </div>
                  <div class="col-12 col-sm-6 pt-3">
                    <small>จนถึงวันที่</small>
                    <input class="form-control " type="date" name="b_end">

                  </div>
                  <div class="col-12 py-3 ">
                    <div class="row">
                      <div class="col-12 col-sm-6 py-2 ">
                        <h2>รายละเอียดวันและเวลา</h2>
                        <h5>จำนวนวันทั้งหมด <span class="text-red">15</span> วัน</h5>
                        <h5>ตรงกับวันหยุด <span class="text-red">3</span> วัน</h5>
                      </div>
                      <div class="col-12 col-sm-6">
                        <h5>วันหยุด <span class="text-red">3</span> วัน</h5>
                        <ul>
                          <li class="list-item">
                            <p class="p-0 m-0">15 มิถุนายน 2565 - <span class="text-muted">วันพืชมงคล</span> </p>
                          </li>
                          <li class="list-item">
                            <p class="p-0 m-0">15 มิถุนายน 2565 - <span class="text-muted">วันพืชมงคล</span> </p>
                          </li>
                          <li class="list-item">
                            <p class="p-0 m-0">15 มิถุนายน 2565 - <span class="text-muted">วันพืชมงคล</span> </p>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-12 pt-3">
                    <button class="w-100  btn btn-primary py-2">ยื่นเอกสาร
                    </button>
                  </div>

                </div>
              </form>

            </div>

            <div id="req" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">
              <?php $this->load->view('form/reqTable'); ?>
            </div>

            <div id="pass" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">
              <?php $this->load->view('form/passTable'); ?>

            </div>
            <div id="fail" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">
              <?php $this->load->view('form/failTable'); ?>

            </div>
            <div id="cancle" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">
              <?php $this->load->view('form/canTable'); ?>
            </div>
            <div id="total" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">
              <?php $this->load->view('form/totalTable'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>