<?php

namespace App\Models\Traits\Attributes;

trait LoanAttributes
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
		            '.$this->getShowButtonAttribute('edit-loan', 'admin.loans.emi').'
                    '.$this->getEditButtonAttribute('edit-loan', 'admin.loans.edit').'
                    '.$this->getDeleteButtonAttribute('delete-loan', 'admin.loans.destroy').'
                </div>';
    }
	
	public function getShowButtonAttribute($class='btn btn-success btn-sm')
    {
        if (access()->allow('edit-sale')) {
            $class='btn btn-success btn-sm';
			
			$class_print='btn btn-danger btn-sm';
			
            return '<a class="'.$class.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.loans.emi', $this).'" title="Pay EMI"> 
                    <i class="fa fa-dollars""></i> Pay EMI
                </a>  <a class="'.$class_print.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.loans.emilist', $this).'" title="EMI Paid"> 
                    <i class="fa fa-print""></i> Paid EMI
                </a>';
        }
    }
	

    /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='label label-success'>".trans('labels.general.active').'</label>';
        }

        return "<label class='label label-danger'>".trans('labels.general.inactive').'</label>';
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }

    /**
     * Get Display Status Attribute.
     *
     * @var string
     */
    public function getDisplayStatusAttribute(): string
    {
        return $this->isActive() ? 'Active' : 'InActive';
    }
}
