(function () {

	
    FTX.Employees = {

        list: {

            selectors: {
                employee_table: $('#employee'),
            },

            init: function () {

                this.selectors.employee_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.employee_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
						 { data: 'company_name', name: 'company_name' },
						{ data: 'email', name: 'email' },
                        { data: 'phoneno', name: 'phoneno' },
                        { data: 'status', name: 'status' },
                     
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