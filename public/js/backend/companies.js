(function () {
	
	
    FTX.Companies = {

        list: {

            selectors: {
                company_table: $('#company'),
            },

            init: function () {

                this.selectors.company_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.company_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
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