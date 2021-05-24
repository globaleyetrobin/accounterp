<?php

namespace App\Http\Responses\Backend\Currencies;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\BlogCurrencies\Currency
     */
    protected $Currency;
	
	

    /**
     * @param \App\Models\Currencies\Currency $Currency
     */
    public function __construct($Currency)
    {
        $this->Currency = $Currency;
		
		
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
        return view('backend.currencies.edit')
		    
            ->with('Currency', $this->Currency);
    }
}
