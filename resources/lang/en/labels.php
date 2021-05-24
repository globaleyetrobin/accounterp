<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'label' => 'Roles',
                'all' => 'Roles',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'permissions' => [
                'all' => 'All Permissions',
                'active' => 'Permission List',
                'create' => 'Create Permission',
                'deactivated' => 'Deactivated Permission',
                'deleted' => 'Deleted Permission',
                'edit' => 'Edit Permission',
                'management' => 'Permission Management',
                'label' => 'Permissions',
                'list' => 'Permission List',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'permission' => 'Permission',
                    'display_name' => 'Display Name',
                    'sort' => 'Sort',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'permissions total|permissions total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

            'blogs' => [
                'all' => 'All Blogs',
                'active' => 'Blog List',
                'create' => 'Create Blog',
                'deactivated' => 'Deactivated Blogs',
                'deleted' => 'Deleted Blog',
                'edit' => 'Edit Blog',
                'management' => 'Blog Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Blog Title',
                    'category' => 'Blog Categories',
                    'published' => 'Publish Date & Time',
                    'featured_image' => 'Featured Image',
                    'content' => 'Content',
                    'tags' => 'Tags',
                    'meta_title' => 'Meta Title',
                    'slug' => 'Slug',
                    'cannonical_link' => 'Cannonical Link',
                    'meta_keywords' => 'Meta Keywords',
                    'meta_description' => 'Meta Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog total|blogs total',
                ],
            ],

            'blog-category' => [
                'all' => 'All Blog Categories',
                'active' => 'Blog Category List',
                'create' => 'Create Blog Category',
                'deactivated' => 'Deactivated Blog Category',
                'deleted' => 'Deleted Blog Category',
                'edit' => 'Edit Blog Category',
                'management' => 'Blog Categories',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Category Name',
                    'category' => 'Blog Categories',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog cateories total|blog categories total',
                ],
            ],

            'blog-tag' => [
                'all' => 'All Blog Tags',
                'active' => 'Blog Tag List',
                'create' => 'Create Blog Tag',
                'deactivated' => 'Deactivated Blog Tag',
                'deleted' => 'Deleted Blog Tag',
                'edit' => 'Edit Blog Tag',
                'management' => 'Blog Tags',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Tag Name',
                    'tag' => 'Blog Tag',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog tags total|blog tags total',
                ],
            ],

            'pages' => [
                'all' => 'All Pages',
                'active' => 'Page List',
                'create' => 'Create Page',
                'deactivated' => 'Deactivated Page',
                'deleted' => 'Deleted Page',
                'edit' => 'Edit Page',
                'management' => 'Pages Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'page_slug' => 'Page Slug',
                    'name' => 'Page Name',
                    'description' => 'Description',
                    'cannonical_link' => 'Cannonical Link',
                    'seo_title' => 'SEO Title',
                    'seo_keyword' => 'SEO Keyword',
                    'seo_description' => 'SEO Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'pages total|pages total',
                ],
            ],

            'faqs' => [
                'all' => 'All Faqs',
                'active' => 'Faq List',
                'create' => 'Create Faq',
                'deactivated' => 'Deactivated Faq',
                'deleted' => 'Deleted Faq',
                'edit' => 'Edit Faq',
                'management' => 'Faq Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'question' => 'Question',
                    'answer' => 'Answer',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'total' => 'faqs total|faqs total',
                ],
            ],

            'email-templates' => [
                'all' => 'All Email Templates',
                'active' => 'Email Templates List',
                'create' => 'Create Email Template',
                'deactivated' => 'Deactivated Email Template',
                'deleted' => 'Deleted Email Template',
                'edit' => 'Edit Email Template',
                'management' => 'Email Template Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'slug' => 'Slug',
                    'title' => 'Email Template Title',
                    'content' => 'Content',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'createdby' => 'Created By',
                    'total' => 'email templates total|email templates total',
                ],
            ],
			
			
			
		'companies' => [
                'all' => 'All Companies',
                'active' => 'Company List',
                'create' => 'Create Company',
                'deactivated' => 'Deactivated Company',
                'deleted' => 'Deleted Company',
                'edit' => 'Edit Company',
                'management' => 'Company',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
                    'company' => 'Company',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'companies total|blog companies total',
                ],
           ],
		   
		   
		   'branches' => [
                'all' => 'All Branches',
                'active' => 'Branch List',
                'create' => 'Create Branch',
                'deactivated' => 'Deactivated Branch',
                'deleted' => 'Deleted Branch',
                'edit' => 'Edit Branch',
                'management' => 'Branch',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Branch Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
                    'branch' => 'Branch',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'companies total|blog companies total',
                ],
            ],
			
			
			'category' => [
                'all' => 'All  Categories',
                'active' => 'Category List',
                'create' => 'Create Category',
                'deactivated' => 'Deactivated Category',
                'deleted' => 'Deleted Category',
                'edit' => 'Edit Category',
                'management' => 'Categories',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Category Name',
					'parentcategory' => 'Parent Category',
                    'category' => 'Categories',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'cateories total|categories total',
                ],
            ],
			
			
			'subcategory' => [
                'all' => 'All  Sub Categories',
                'active' => 'Subcategory List',
                'create' => 'Create Subcategory',
                'deactivated' => 'Deactivated Subcategory',
                'deleted' => 'Deleted Subcategory',
                'edit' => 'Edit Subcategory',
                'management' => 'Subcategory',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Sub Category Name',
					'parentsubcategory' => 'Category',
                    'category' => 'Categories',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'cateories total|categories total',
                ],
            ],
			
			
			'brand' => [
                'all' => 'All  Brands',
                'active' => 'Brand List',
                'create' => 'Create Brand',
                'deactivated' => 'Deactivated Brand',
                'deleted' => 'Deleted Brand',
                'edit' => 'Edit Brand',
                'management' => 'Brands',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Brand Name',
					'short_name' => 'Short_name',
                    'brand' => 'Brands',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Brand total|Brand total',
                ],
            ],
			
			'unit' => [
                'all' => 'All  Units',
                'active' => 'Unit List',
                'create' => 'Create Unit',
                'deactivated' => 'Deactivated Unit',
                'deleted' => 'Deleted Unit',
                'edit' => 'Edit Unit',
                'management' => 'Units',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Unit Name',
					'short_name' => 'Short Name',
                    'unit' => 'Units',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Unit total|Unit total',
                ],
            ],
			'allowance' => [
                'all' => 'All  Allowances',
                'active' => 'Allowance List',
                'create' => 'Create Allowance',
                'deactivated' => 'Deactivated Allowance',
                'deleted' => 'Deleted Allowance',
                'edit' => 'Edit Allowance',
                'management' => 'Allowances',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Allowance Name',
					'short_name' => 'Field Name',
                    'allowance' => 'Allowance',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Allowance total|Allowance total',
                ],
            ],
			'deduction' => [
                'all' => 'All  Deductions',
                'active' => 'Deduction List',
                'create' => 'Create Deduction',
                'deactivated' => 'Deactivated Deduction',
                'deleted' => 'Deleted Deduction',
                'edit' => 'Edit Deduction',
                'management' => 'Deductions',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Deduction Name',
					'short_name' => 'Field Name',
                    'deduction' => 'Deduction',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Deduction total|Deduction total',
                ],
            ],
			
			'loan' => [
                'all' => 'All  Loan',
                'active' => 'Loan List',
                'create' => 'Create Loan',
                'deactivated' => 'Deactivated Loan',
                'deleted' => 'Deleted Loan',
                'edit' => 'Edit Loan',
                'management' => 'Loans',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
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
                    'loan' => 'Loan',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Loan total|Loan total',
                ],
            ],
			
			'currency' => [
                'all' => 'All  Currency',
                'active' => 'Currency List',
                'create' => 'Create Currency',
                'deactivated' => 'Deactivated Currency',
                'deleted' => 'Deleted Currency',
                'edit' => 'Edit Currency',
                'management' => 'Currencies',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Currency Name',
					'short_name' => 'Currency  Code',
                    'currency' => 'Currencies',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Currency total|Currency total',
                ],
            ],
			
			
			
			 'customers' => [
                'all' => 'All Customers',
                'active' => 'Customer List',
                'create' => 'Create Customer',
                'deactivated' => 'Deactivated Customer',
                'deleted' => 'Deleted Customer',
                'edit' => 'Edit Customer',
                'management' => 'Customer',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Customer Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
                    'customer' => 'Customer',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'companies total|blog companies total',
                ],
            ],
			
			
			'employees' => [
                'all' => 'All Employees',
                'active' => 'Employee List',
                'create' => 'Create Employee',
                'deactivated' => 'Deactivated Employee',
                'deleted' => 'Deleted Employee',
                'edit' => 'Edit Employee',
                'management' => 'Employee',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Employee Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
                    'Employee' => 'Employee',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Employee total| Employee total',
                ],
            ],
			
			
			
			'suppliers' => [
                'all' => 'All Suppliers',
                'active' => 'Supplier List',
                'create' => 'Create Supplier',
                'deactivated' => 'Deactivated Supplier',
                'deleted' => 'Deleted Supplier',
                'edit' => 'Edit Supplier',
                'management' => 'Supplier',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Supplier Name',
					'companyname' => 'Company Name',
					'email' => 'Email',
					'phoneno' => 'Phone No',
					'address' => 'Address',
                    'customer' => 'Customer',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Supplier total|Supplier total',
                ],
            ],
			
			
			
			
			
			'products' => [
                'all' => 'All Products',
                'active' => 'Product List',
                'create' => 'Create Product',
                'deactivated' => 'Deactivated Products',
                'deleted' => 'Deleted Product',
                'edit' => 'Edit Product',
                'management' => 'Product Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Product Name',
					'code' => 'Product Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'product_image' => 'Product Image',
                    'content' => 'Description',
					'price' => 'Price',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog total|blogs total',
                ],
            ],
			
			
			'purchases' => [
                'all' => 'All Purchases',
                'active' => 'Purchase List',
                'create' => 'Create Purchase',
                'deactivated' => 'Deactivated Purchases',
                'deleted' => 'Deleted Purchase',
                'edit' => 'Edit Purchase',
                'management' => 'Purchase Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Purchase Name',
					'code' => 'Purchase Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchase_image' => 'Purchase Image',
                    'content' => 'Description',
					'price' => 'Price',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Purchase total|Purchase total',
                ],
            ],
			
			
			
			'purchasereturns' => [
                'all' => 'All Purchase Returns',
                'active' => 'Purchase Returns List',
                'create' => 'Create Purchase Returns',
                'deactivated' => 'Deactivated Purchase Returns',
                'deleted' => 'Deleted Purchase Returns',
                'edit' => 'Edit Purchase Returns',
                'management' => 'Purchase Returns Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Purchase Return Name',
					'code' => 'Purchase Return Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchase_image' => 'Purchase Return Image',
                    'content' => 'Description',
					'price' => 'Price',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Purchase Return total|Purchase Return total',
                ],
            ],
			
			
			
			
			'sales' => [
                'all' => 'All Sales',
                'active' => 'Sale List',
                'create' => 'Create Sale',
                'deactivated' => 'Deactivated Sale',
                'deleted' => 'Deleted Sale',
                'edit' => 'Edit Sale',
                'management' => 'Sale Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Sale Name',
					'code' => 'Sale Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchase_image' => 'Purchase Image',
                    'content' => 'Description',
					'price' => 'Price',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Sale total|Sale total',
                ],
            ],
			
			
			'salereturns' => [
                'all' => 'All Sales Return',
                'active' => 'Sale Return List',
                'create' => 'Create Sale Return ',
                'deactivated' => 'Deactivated Sale Return ',
                'deleted' => 'Deleted Sale Return',
                'edit' => 'Edit Sale Return',
                'management' => 'Sale Return Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Sale Name',
					'code' => 'Sale Return Code',
					'barcode' => 'Barcode',
					'brand' => 'Brand',
					'unit' => 'Unit',
                    'product_categories' => 'Categories',
                    'publish_date_time' => 'Publish Date & Time',
                    'purchase_image' => 'Return Image',
                    'content' => 'Description',
					'price' => 'Price',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'Sale total|Sale total',
                ],
            ],
			
			

			
			
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];
