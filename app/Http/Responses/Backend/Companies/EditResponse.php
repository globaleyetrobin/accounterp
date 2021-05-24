<?php

namespace App\Http\Responses\Backend\Companies;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCategories\Company
     */
    protected $company;

    /**
     * @param \App\Models\BlogCategories\Company $company
     */
    public function __construct($company , $currencies)
    {
        $this->Company = $company;
		$this->currencies = $currencies;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.companies.edit')
               ->with('Company', $this->Company)
			   ->with('currencies', $this->currencies);
			   
    }
}
