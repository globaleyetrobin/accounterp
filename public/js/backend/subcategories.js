(function () {
	
	


    FTX.Subcategories = {
		

        list: {

            selectors: {
                subcategory_table: $('#subcategory'),
            },

            init: function () {

                this.selectors.subcategory_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.subcategory_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
						{ data: 'parent_id', name: 'parent_id' },
                        { data: 'status', name: 'status' },
						
                        { data: 'created_by', name: 'created_by' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [[3, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        },
    }
})();