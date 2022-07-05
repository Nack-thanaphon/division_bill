<table id="failTable" class="table table-bordered table-striped">

</table>


<!-- Modal -->
<div class="modal fade" id="failDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดที่ไม่ผ่าน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row m-0 p-0">
          <div class="col-12">
            <h1>Lorem, ipsum dolor.</h1>
            <small>Lorem, ipsum dolor.</small>
            <hr>
            <p class="font-weight-bold">เหตุผลการพิจารณา</p>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, aut.</small>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary">รับทราบ</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#failTable').DataTable({
    ajax: {
      url: "<?php echo base_url(); ?>Form/getFaillist",
      type: 'GET'
    },
    // dom: 'Bflrtip',
    // buttons: ["copy", "csv", "excel", "pdf", "print"],
    paging: true,
    bDestroy: true,
    lengthChange: false,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    order: [
      ['0', 'desc']
    ],
    columns: [{
        title: "ลำดับ",
        className: "align-middle",
        data: "b_name",
      },
      {
        title: "เรื่อง",
        className: "align-middle",
        data: "b_title",
        width: "30%"
      },
      {
        title: "งาน",
        className: "align-middle",
        data: "b_name",
      },

      {
        title: "ผู้ร้องขอ",
        className: "align-middle",
        data: "wa_name",

      },

      {
        title: "สถานะ",
        data: function(data) {
          return '<div class="btn-group" role="group">' +
            '<button " type="button" class="btn btn-warning" id="getFail" value="' + data.b_id + '">' +
            '' + data.b_status + '' +
            '(คลิ๊กดูรายละเอียด)</button>' +
            '</div>';
        }
      },

    ],
    responsive: {
      details: {
        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
          tableClass: 'table'
        })
      }
    },
    language: {
      "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
      "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
      "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
      "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
      "infoFiltered": "(filtered from _MAX_ total records)",
      "search": 'ค้นหา',
      "paginate": {
        "previous": "ก่อนหน้านี้",
        "next": "หน้าต่อไป"
      }
    }
  }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');


  $(document).ready(function() {
    $('#getFail').click(function() {
      let id = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>Form/getFaildetail",
        data: {
          id: id
        }
      }).done(function(data) {
        let result = JSON.stringify(data);
        console.log(data)


      })
    })
  })
</script>



</body>

</html>