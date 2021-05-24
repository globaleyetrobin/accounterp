(function () {

    FTX.Allowances = {
		
		

        list: {

            selectors: {
                allowance_table: $('#allowance'),
            },

            init: function () {

                this.selectors.allowance_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.allowance_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
						
						{ data: 'short_name', name: 'short_name' },
			
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