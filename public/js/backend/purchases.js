(function () {
 

    FTX.Purchases = {

        list: {

            selectors: {
                purchases_table: $('#purchases-table'),
            },

            init: function () {

                this.selectors.purchases_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.purchases_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'purchase_no', name: 'purchases.purchase_no' },
                        { data: 'purchase_netamount', name: 'purchases.purchase_netamount' },
                        { data: 'purchase_date', name: 'purchases.purchase_date' },
                        { data: 'created_by', name: 'purchases.created_by' },
                        { data: 'created_at', name: 'purchases.created_at' },
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