<?php

namespace App\Models\Traits\Attributes;

trait SaleAttributes
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group" role="group" aria-label="'.trans('labels.backend.access.users.user_actions').'">'.
                $this->getShowButtonAttribute('edit-sale', 'admin.sales.salesretrun').
                $this->getEditButtonAttribute('edit-sale', 'admin.sales.edit').
                
                $this->getDeleteButtonAttribute('delete-sale', 'admin.sales.destroy').
                '</div>';
    }


    public function getShowButtonAttribute($class='btn btn-success btn-sm')
    {
        if (access()->allow('edit-sale')) {
            $class='btn btn-success btn-sm';
			
			$class_print='btn btn-danger btn-sm';
			
            return '<a class="'.$class.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.sales.salesretrun', $this).'" title="Stock Return"> 
                    <i class="fa fa-shopping-cart""></i> Sales Return
                </a>  <a class="'.$class_print.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.sales.salesprint', $this).'" title="Print"> 
                    <i class="fa fa-print""></i> Print
                </a>';
        }
    }



    /**
     * Get Display Status Attribute.
     *
     * @var string
     */
    public function getDisplayStatusAttribute(): string
    {
        return $this->statuses[$this->status] ?? null;
    }

    /**
     * Get Statuses Attribute.
     *
     * @var string
     */
    public function getStatusesAttribute(): array
    {
        return $this->statuses;
    }
	
	public function getDiscounttypesAttribute(): array
    {
        return $this->discounttypes;
    }
	public function getTaxtypesAttribute(): array
    {
        return $this->taxtypes;
    }
	

    public function getSalesreturntypesAttribute(): array
    {
        return $this->salesreturntypes;
    }

	
}
