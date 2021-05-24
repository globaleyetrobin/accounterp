<?php

namespace App\Models\Traits\Attributes;

trait EmployeeAttributes
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
		              '.$this->getShowButtonAttribute('edit-sale', 'admin.sales.salesretrun').'
                    '.$this->getEditButtonAttribute('edit-employee', 'admin.employees.edit').'
                    '.$this->getDeleteButtonAttribute('delete-employee', 'admin.employees.destroy').'
                </div>';
    }


       public function getShowButtonAttribute($class='btn btn-success btn-sm')
    {
        if (access()->allow('edit-sale')) {
            $class='btn btn-success btn-sm';
			
			$class_print='btn btn-danger btn-sm';
			
            return '<a class="'.$class.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.employees.salary', $this).'" title="Salary"> 
                    <i class="fa fa-dollars""></i> Salary
                </a>  <a class="'.$class_print.'" data-toggle="tooltip" data-placement="top" href="'.route('admin.employees.document', $this).'" title="Print"> 
                    <i class="fa fa-print""></i> Document
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
