<div class="x_panel">
 <div class="x_content">
    <div class="x_title">
  
 <!--------- end input customer--------------->     
    <h2>DATA TABEL ANAMNESA</h2>
        <ul class="nav navbar-right panel_toolbox">
                </li>
                    </ul>              
<div class="clearfix"></div>
     </div> 
 <div class="col-md-12">
   <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/');?>vendors/datatables/datatables/media/js/jquery.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "<?php echo base_url('C_anamnesa/json') ?> ", "type": "POST"},
                    columns: [
                        {
                            "data": "record_number_customer",
                            "orderable": false
                        },
                        {"data": "record"},
                        {"data": "tgl_terima"},
                        {"data": "no_antrian"},
                        {"data": "sample"},
                        {"data": "jml_sample"},
                        {"data": "kode"},
                        {"data": "nama"},
                        {"data": "bakteri"},
                        {"data": "parasit"},
                        {"data": "jamur"},
                        {"data": "virus"},
                        {"data": "logam"},
                        {"data": "view"}
                        
                        
                       ],
                    order: [[1, 'asc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
    
    
    
    <div class="dashboard_graph">
     <table id="mytable" class="table table-striped table-bordered dataTable" align="center" role="grid" aria-describedby="datatable-fixed-header_info"><thead>
       <tr role="row">
           <th class="sorting_asc"   aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width:1px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">No</th>
<<<<<<< HEAD
           <th class="sorting"  aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 60px;" aria-label="Name: activate to sort column descending">RECORD</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">NAMA</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">TELEPON</th>
           <th class="sorting"  aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Name: activate to sort column descending" >TANGGAL TERIMA</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">JUMLAH</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 1px;" aria-label="Position: activate to sort column ascending">BAKTERI</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">PARASIT</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">JAMUR</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">VIRUS</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">KUALITAS AIR</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">LOGAM BERAT</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">ACTION</th>
=======
           <th class="sorting"  aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 60px;" aria-label="Name: activate to sort column descending">Record</th>
           <th class="sorting"  aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 60px;" aria-label="Name: activate to sort column descending">Tgl.terima</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">No.urut</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Jenis</th>
           <th class="sorting"  aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Name: activate to sort column descending" >Jumlah</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">contoh_uji</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 150px;" aria-label="Position: activate to sort column ascending">pemilik</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Bakteri</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Parasit</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">jamur</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Virus</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Logam</th>
           <th class="sorting" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Action</th>
>>>>>>> 155f9cdfa597dd3c4a7ecc6f14bc32113432dcba
         </thead>
        <tbody>
        </table>
       
    </div>
</div>
</div>
</div>
</div>