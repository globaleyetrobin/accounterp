<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Associated Roles',
                    'dependencies' => 'Dependencies',
                    'display_name' => 'Display Name',
                    'group' => 'Group',
                    'group_sort' => 'Group Sort',

                    'groups' => [
                        'name' => 'Group Name',
                    ],

                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'system' => 'System',
                ],

                'roles' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name' => 'Name',
                    'sort' => 'Sort',
                ],

                'users' => [
                    'active' => 'Active',
                    'associated_roles' => 'Associated Roles',
                    'confirmed' => 'Confirmed',
                    'email' => 'E-mail Address',
                    'name' => 'Name',
                    'last_name' => 'Last Name',
                    'first_name' => 'First Name',
                    'other_permissions' => 'Other Permissions',
                    'password' => 'Password',
                    'password_confirmation' => 'Password Confirmation',
                    'send_confirmation_email' => 'Send Confirmation E-mail',
                    'timezone' => 'Timezone',
                    'language' => 'Language',
                ],

                'pages' => [
                    'name' => 'Page Name',
                    'slug' => 'Page Slug',
                    'description' => 'Description',
                    'cannonical_link' => 'Cannonical Link',
                    'seo_title' => 'Meta Keywords',
                    'seo_keywords' => 'Meta Description',
                    'seo_description' => 'SEO Description',
                    'status' => 'Status',
                ],

                'faqs' => [
                    'question' => 'Question',
                    'answer' => 'Answer',
                    'status' => 'Status',
                ],

                'email-templates' => [
                    'title' => 'Email Template Title',
                    'slug' => 'Email Template Slug',
                    'content' => 'Content',
                    'status' => 'Status',
                ],

                'blog-categories' => [
                    'name' => 'Category Name',
                    'status' => 'Status',
                ],

                'blog-tags' => [
                    'name' => 'Tag Name',
                    'status' => 'Status',
                ],

                'blogs' => [
                    'title' => 'Blog Title',
                    'blog_categories' => 'Blog Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'featured_image' => 'Featured Image',
                    'content' => 'Content',
                    'tags' => 'Tags',
                    'meta_title' => 'Meta Title',
                    'slug' => 'Blog Slug',
                    'cannonical_link' => 'Cannonical Link',
                    'meta_keywords' => 'Meta Keywords',
                    'meta_description' => 'Meta Description',
                    'status' => 'Status',
                ],
				
				
				'companies' => [
                    'name' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
					'website' => 'Website',
					'currency' => 'Currency',
                    'status' => 'Status',
                ],
				
				'branches' => [
                    'name' => 'Branch Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
					'website' => 'Website',
                    'status' => 'Status',
                ],
				
				 'categories' => [
                    'name' => 'Category Name',
                    'status' => 'Status',
					'parentcategory' => 'Parent Category'
                ],
				
				
				'subcategories' => [
                    'name' => 'Sub Category Name',
                    'status' => 'Status',
					'parentsubcategory' => ' Category'
                ],
				
				 'brands' => [
                    'name' => 'Brand Name',
                    'status' => 'Status',
					'short_name' => 'Short Name'
                ],
				
				'units' => [
                    'name' => 'Unit Name',
                    'status' => 'Status',
					'short_name' => 'Short Name'
                ],
				
				'allowances' => [
                    'name' => 'Allowance Name',
                    'status' => 'Status',
					'short_name' => 'Field Name'
                ],
				'deductions' => [
                    'name' => 'Deduction Name',
                    'status' => 'Status',
					'short_name' => 'Field Name'
                ],
				'loans' => [
				
                     'name' => 'Loan Name',
					'employee' => 'Employee',
					'amount' => 'Loan Amount',
					'duration' => 'Duration',
					'emi' => 'Emi',
					'interest' => 'Interest',
					'total_interest' => 'Total Interest',
					'total_amount' => 'Total Amount',
					'startdate' => 'Start Date',
					'enddate' => 'End Date',
                    
                    'status' => 'Status',
					
                ],
				
				'currencies' => [
                    'name' => 'Currency  Name',
                    'status' => 'Status',
					'short_name' => 'Currency  Code'
                ],
				
				'customers' => [
                    'name' => 'Customer Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
					'website' => 'Website',
                    'status' => 'Status',
                ],
				'employees' => [
                    'name' => 'Employee Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
					'website' => 'Website',
                    'status' => 'Status',
                ],
				
				'suppliers' => [
                    'name' => 'Supplier Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
					'website' => 'Website',
                    'status' => 'Status',
                ],
				
				'products' => [
                    'title' => 'Product Name',
					'code' => 'Product Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
					
					'product_subcategories' => 'Sub Categories',
					
					
                    'publish_date_time' => 'Publish Date & Time',
                    'product_image' => 'Product Image',
                    'content' => 'Description',
					'price' => 'Price',
                    
                    'status' => 'Status',
                ],
				
				
				
				'purchases' => [
                    'title' => 'Purchase Name',
					'code' => 'Purchase Code',
					
					'discountamount' => 'Discount Amount',
					'discounttype' => 'Discount Type',
					'discounttotal' => 'Discount Total',
					
					'taxamount' => 'Tax Amount',
					'taxtype' => 'Tax Type',
					
					'category' => 'Category',
					
					'subcategory' => 'Sub Category',
					
					'products' => 'Product Name',
					
					
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchase_image' => 'Purchase Image',
                    'purchase_notes' => 'Notes',
					'price' => 'Price',
					
					'purchaseno' => 'Purchase No',
					
					'purchasedate' => 'Purchase Date',
					
					'supplier' => 'Supplier',
					
					'company' => 'Company',
					
					'branch' => 'Branch',
					
					
                    
                    'status' => 'Purchase Status',
                ],
				
				
				
				'purchasereturns' => [
                    'purchasereturnname' => 'Purchase Return Name',
					'code' => 'Purchase Code',
					
					'discountamount' => 'Discount Amount',
					'discounttype' => 'Discount Type',
					'discounttotal' => 'Discount Total',
					
					'taxamount' => 'Tax Amount',
					'taxtype' => 'Tax Type',
					
					'products' => 'Product Name',
					
					
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchasereturn_image' => 'Purchase Return Image',
                    'purchasereturn_notes' => 'Notes',
					'price' => 'Price',
					
					'purchaseno' => 'Purchase Return No',
					
					'purchasereturnno' => 'Purchase Return No',
					
					'purchasereturndate' => 'Date',
					
					'supplier' => 'Supplier',
					
					'company' => 'Company',
					
					'branch' => 'Branch',
					
					
                    
                    'status' => 'Purchase Status',
                ],
				
				
				
				'sales' => [
                    'title' => 'Sale Name',
					'code' => 'Sale Code',
					
					'discountamount' => 'Discount Amount',
					'discounttype' => 'Discount Type',
					'discounttotal' => 'Discount Total',
					
					'taxamount' => 'Tax Amount',
					'taxtype' => 'Tax Type',
					
					'products' => 'Product Name',
					'salereturn_image' => 'Attached Image',
					'salereturn_notes' => 'Notes',
					
					
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'sale_image' => 'Sale Image',
                    'sale_notes' => 'Notes',
					'price' => 'Price',
					
					'saleno' => 'Sale No',
					
					'saledate' => 'Sale Date',
					
					'customer' => 'Customer',
					
					'company' => 'Company',
					
					'branch' => 'Branch',
					
					
                    
                    'status' => 'Sale Status',
                ],
				
				
				
				'salereturns' => [
                    'title' => 'Sale Name',
					'code' => 'Sale Code',
					
					'discountamount' => 'Discount Amount',
					'discounttype' => 'Discount Type',
					'discounttotal' => 'Discount Total',
					
					'taxamount' => 'Tax Amount',
					'taxtype' => 'Tax Type',
					
					'products' => 'Product Name',
					
					'salereturndate' => 'Return Date',
					'salereturnno' => 'Sales Return No',
					'salereturn_image' => 'Attached Image',
					'salereturn_notes' => 'Notes',
					
					
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'sale_image' => 'Sale Image',
                    'sale_notes' => 'Notes',
					'price' => 'Price',
					
					'saleno' => 'Sale No',
					
					'saledate' => 'Sale Date',
					
					'customer' => 'Customer',
					
					'company' => 'Company',
					
					'branch' => 'Branch',
					
					
                    
                    'status' => 'Sale Status',
                ],



				
            ],
        ],

        'frontend' => [
            'avatar' => 'Avatar Location',
            'email' => 'E-mail Address',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'name' => 'Full Name',
            'password' => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'phone' => 'Phone',
            'message' => 'Message',
            'new_password' => 'New Password',
            'new_password_confirmation' => 'New Password Confirmation',
            'old_password' => 'Old Password',
            'timezone' => 'Timezone',
            'language' => 'Language',
        ],
    ],
];
