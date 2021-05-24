(function () {
 

    FTX.Sales = {

        list: {

            selectors: {
                sales_table: $('#sales-table'),
            },

            init: function () {

                this.selectors.sales_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.sales_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'sale_no', name: 'sales.sale_no' },
                        { data: 'sale_netamount', name: 'sales.sale_netamount' },
                        { data: 'sale_date', name: 'sales.sale_date' },
                        { data: 'created_by', name: 'sales.created_by' },
                        { data: 'created_at', name: 'sales.created_at' },
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

        edit: {
            selectors: {
                tags: jQuery(".tags"),
                categories: jQuery(".categories"),
                status: jQuery(".status"),
                publish_datetime: jQuery("#publish_datetime"),
            },

            init: function (locale) {
                this.addHandlers(locale);
                FTX.tinyMCE.init(locale);
            },

            addHandlers: function (locale) {

                this.selectors.tags.select2({
                    tags: true,
                    width: '100%',
                });

                this.selectors.categories.select2({
                    width: '100%',
                    tags: true,
                    placeholder: 'Select category'
                });

                this.selectors.status.select2({
                    width: '100%'
                });

                this.selectors.publish_datetime.datetimepicker({
                    locale: (locale === undefined ? 'en_US' : locale),
                });
            },
        },
    }
})();