<?php

namespace App\Models\Traits\Attributes;

trait PurchasereturnAttributes
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group" role="group" aria-label="'.trans('labels.backend.access.users.user_actions').'">'.
                $this->getEditButtonAttribute('edit-purchasereturn', 'admin.purchasereturns.edit').
                $this->getDeleteButtonAttribute('delete-purchasereturn', 'admin.purchasereturns.destroy').
                '</div>';
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
	
	
}
