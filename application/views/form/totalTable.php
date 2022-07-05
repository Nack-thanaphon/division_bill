<table id="totalTable" class="table table-bordered table-striped">

</table>


<script>
  $.fn.dataTable.ext.errMode = 'none';
  $('#totalTable').DataTable({
    ajax: {
      url: "<?php echo base_url(); ?>Form/getTotallist",
      type: 'GET'
    },
    dom: 'Bflrtip',
    buttons: ["copy", "csv", "excel", "pdf", "print"],
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
        className: "align-middle",
        data: "b_status",
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
</script>



</body>

</html>