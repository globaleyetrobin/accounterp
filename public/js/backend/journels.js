(function () {
	
	


    FTX.Journels = {
		

        list: {

            selectors: {
                journel_table: $('#journel'),
            },

            init: function () {

                this.selectors.journel_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.journel_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
						
                        { data: 'amount', name: 'amount' },
                        { data: 'date', name: 'date' },
						
                        { data: 'journel_type', name: 'journel_type' },
                        { data: 'journel_category', name: 'journel_category' },
                        { data: 'journel_subcategory', name: 'journel_subcategory' },
                        { data: 'journel_entry', name: 'journel_entry' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [[6, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            },

                     init1: function () {

                this.selectors.journel_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.journel_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
                        
                        { data: 'amount', name: 'amount' },
                        { data: 'date', name: 'date' },
                        
                        { data: 'journel_type', name: 'journel_type' },
                        { data: 'journel_category', name: 'journel_category' },
                        { data: 'journel_subcategory', name: 'journel_subcategory' },
                        { data: 'journel_entry', name: 'journel_entry' },
                      

                    ],
                    order: [[6, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }

        },
    }
})();