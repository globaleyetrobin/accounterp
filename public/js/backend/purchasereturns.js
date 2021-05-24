(function () {
 

    FTX.Purchasereturns = {

        list: {

            selectors: {
                purchasereturns_table: $('#purchasereturns-table'),
            },

            init: function () {

                this.selectors.purchasereturns_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.purchasereturns_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'purchasereturn_no', name: 'purchasereturns.purchasereturn_no' },
                        { data: 'purchasereturn_netamount', name: 'purchasereturns.purchasereturn_netamount' },
                        { data: 'purchasereturn_date', name: 'purchasereturns.purchasereturn_date' },
                        { data: 'created_by', name: 'purchasereturns.created_by' },
                        { data: 'created_at', name: 'purchasereturns.created_at' },
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