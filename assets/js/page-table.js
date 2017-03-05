

/* 
    Created on  : Tuesday, 01 Nov 2016 at 10:20 AM
    Author      : Prakasam Mathaiyan
    URL         : http://www.prakasam.co
    E-Mail      : hello@prakasam.co
*/



var DataTableBasic = function() {
    
    var handle_DataTable = function() {
        
        $('.table-dataTable').DataTable({
            
            "oLanguage": {
                "sLengthMenu": "_MENU_ Rows",
                "sSearch": ""                
            },
            "aLengthMenu": [
                [5, 10, 15, 20, 50, -1],
                [5, 10, 15, 20, 50, "All"] // change per page values here
            ],
            
            "iDisplayLength": 10    // set the initial value
        });
       
        $('.dataTables_filter input').attr("placeholder", "Search...");
        
    };  //  Function to handle Data TAble
    
       
    return {        
        init: function() {
            handle_DataTable();
        }
         
    };
}();



var EditableDataTables = function() {
    
    
    var handleDataTable = function() {
        
        var oTable = $('.table-dataTable').dataTable({
            
            "oLanguage": {
                "sLengthMenu": "_MENU_ Rows",
                "sSearch": ""                
            },
            "aLengthMenu": [
                [5, 10, 15, 20, 50, -1],
                [5, 10, 15, 20, 50, "All"] // change per page values here
            ],
            
            "iDisplayLength": 10    // set the initial value
            
        });
        $('.dataTables_filter input').attr("placeholder", "Search...");
        
        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable( {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function (value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            }
            
        });
        
    };     // Handle Editable Data Tables
    
    
    
    return {
        init: function() {
            handleDataTable();
        }
    };
}();


