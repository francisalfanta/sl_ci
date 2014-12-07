http://www.ahmed-samy.com/php-codeigniter-full-featrued-jquery-datatables-part-1/

<!-- Page Specific JS Libraries Tables Pages-->
    <script src="<?php echo base_url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>"></script>
    <script src="<?php echo base_url().'assets/js/pages/datatables.js'; ?>"></script>

    <!-- custom added for datatable 12-05-2014 -->
    <script src="<?php echo base_url().'assets/js/dataTables.jqueryui.js'; ?>"></script>

  <!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/css/jquery.dataTables.css">
  
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.js"></script>
  
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.js"></script>

       editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extension:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date"
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
    } );
 
    // Activate an inline edit on click of a table cell
    $('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );
 
    $('#example').DataTable( {
        dom: "Tfrtip",
        ajax: "../php/staff.php",
        columns: [
            { data: null, defaultContent: '', orderable: false },
            { data: "first_name" },
            { data: "last_name" },
            { data: "position" },
            { data: "office" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        order: [ 1, 'asc' ],
        tableTools: {
            sRowSelect: "os",
            sRowSelector: 'td:first-child',
            aButtons: [
                { sExtends: "editor_create", editor: editor },
                { sExtends: "editor_edit",   editor: editor },
                { sExtends: "editor_remove", editor: editor }
            ]
        }
    } );


      <tr> 
                                                <td><small>fullname</small></td>                 
                                                <td><small>address</small></td>
                                                <td><small>mobileno</small></td>                                               
                                                <td><small>telephoneno</small></td>
                                                <td><small>property</small></td>
                                                <td><small>property type</small></td>
                                                 <th><small>Bldg Name</small></th>                                                 
                                                <td><small>active</small></td>
                                              
                                                <td>
                                                   option
                                                </td>
                                            </tr>


                                             <table id="owner_table" data-sortable class="table table-striped table-bordered display compact"  cellspacing="0" width="100%">
                                    <thead>
                                        <tr>    
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                            <th><small>Bldg Name</small></th>                                                
                                            <th><small>Status</small></th>                                            
                                            <th data-sortable="false">Option</th>
                                        </tr>
                                    </thead> 
                                    <tfoot>
                                        <tr>                                            
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                            <th><small>Bldg Name</small></th>     
                                            <th><small>Status</small></th>                                          
                                            <th data-sortable="false">Option</th>
                                            </tr>
                                    </tfoot>                                       
                                      
                                    </table>