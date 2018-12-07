
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

<!-- <script type="text/javascript"  src="js/cnrm.js"/> -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script>
$( document ).ready(function() {
$.ajax({url: "report.php", 
	dataType: "json",
	method: "GET",
	success: function(result){	
        	$('#cnrm_data').dataTable( {
        		data: result,
        		dom: 'Bfrtip',
    	        buttons: [
    	            'copy', 'csv', 'excel', 'pdf', 'print'
    	        ]
        	 } );
    }});

});

</script>

</head>


<table id="cnrm_data" class="display" style="width:100%">
        <thead>
            <tr>
            	<th>subject_id</th>
                <th>first_name</th>
                <th>middle_name</th>
                <th>last_name</th>              
            </tr>
        </thead>
        <tfoot>
            <tr>
               	<th>subject_id</th>
                <th>first_name</th>
                <th>middle_name</th>
                <th>last_name</th>
            </tr>
        </tfoot>
        </table>
       
</html>


