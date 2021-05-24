@extends('backend.layouts.salesreturn')
@section('title', app_name() . ' | ' . __('Stocks'))




@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Stock') }} <small class="text-muted">{{ __('Products') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="stocks-table" class="table" data-ajax_url="{{ route("admin.products.currentstock") }}" style="margin-top:30px">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.products.table.title') }}</th>
                              
                                <th>Current Stock</th>
								  <th>{{ trans('labels.backend.access.products.table.status') }}</th>
                              
                            </tr>
                        </thead>
						
						<?php
						
						foreach($stocks as $stock )
                        {
						  ?>
						<!--  <tr>
						    <td>
							<?php echo  $stock->product_name ?>
							</td>
							<td>
							<?php echo  $stock->product_code ?>
							</td>
							
							<td>
							30
							</td>
						  </tr>-->
						  
						  
							<?php
                        }							
						?>

                    </table>
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->


    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
    FTX.Utils.documentReady(function() {
        
	   (function () {

    FTX.Products1 = {
		
		

        list: {

            selectors: {
                products_table: $('#stocks-table'),
            },

            init: function () {

                this.selectors.products_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.products_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'product_name', name: 'products.product_name' },
                        { data: 'product_code', name: 'products.product_code' },
                        { data: 'display_status', name: 'products.status' }
                        
                       

                    ],
                    order: [[2, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        }

       
    }
})();
	   
	   
	   FTX.Products1.list.init();
	   
    });
</script>
@stop