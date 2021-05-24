(function () {

    FTX.Loans = {
		
		

        list: {

            selectors: {
                loan_table: $('#loan'),
            },

            init: function () {

                this.selectors.loan_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.loan_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
						
						{ data: 'employee_id', name: 'employee_id' },
			
                        { data: 'amount', name: 'amount' },
						
                        { data: 'duration', name: 'duration' },
                        { data: 'emi', name: 'emi' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [[4, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        },
    }
})();