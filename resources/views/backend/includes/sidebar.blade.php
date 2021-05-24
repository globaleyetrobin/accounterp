<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/permission*'))
                            }}" href="{{ route('admin.auth.permission.index') }}">
                                @lang('labels.backend.access.permissions.management')
                            </a>
                        </li>
						
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/employee/employees*'))
                        }}" href="{{ route('admin.employees.index') }}">
                                @lang('menus.backend.sidebar.employee')
                            </a>
                        </li>
						
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/allowance/allowances*'))
                        }}" href="{{ route('admin.allowances.index') }}">
                                @lang('menus.backend.sidebar.allowance')
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/deduction/deductions*'))
                        }}" href="{{ route('admin.deductions.index') }}">
                                @lang('menus.backend.sidebar.deduction')
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/loan/loans*'))
                        }}" href="{{ route('admin.loans.index') }}">
                                @lang('menus.backend.sidebar.loan')
                            </a>
                        </li>
						
						
						
						
						
						
                    </ul>
                </li>

                <li class="divider"></li>
				
				
				<li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/blogs'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/blogs*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-rss"></i> @lang('menus.backend.sidebar.inventory_management')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/category/categories*'))
                        }}" href="{{ route('admin.categories.index') }}">
                                @lang('menus.backend.sidebar.categories')
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/subcategory/subcategories*'))
                        }}" href="{{ route('admin.subcategories.index') }}">
                                @lang('menus.backend.sidebar.subcategories')
                            </a>
                        </li>
						
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/unit/units*'))
                        }}" href="{{ route('admin.units.index') }}">
                                @lang('menus.backend.sidebar.units')
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/unit/units*'))
                        }}" href="{{ route('admin.units.index') }}">
                                @lang('menus.backend.sidebar.currency')
                            </a>
                        </li>
						
						
						<li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/brand/brands*'))
                        }}" href="{{ route('admin.brands.index') }}">
                                @lang('menus.backend.sidebar.brands')
                            </a>
                        </li>
						
						
						
						<li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/product/products*'))
                        }}" href="{{ route('admin.products.index') }}">
                                @lang('menus.backend.sidebar.products')
                            </a>
                        </li>
						
						
						<li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/purchase/purchases*'))
                        }}" href="{{ route('admin.purchases.index') }}">
                                @lang('menus.backend.sidebar.purchase')
                            </a>
                       </li>
					   
					   	<li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/purchasereturn/purchasereturns*'))
                        }}" href="{{ route('admin.purchasereturns.index') }}">
                                @lang('menus.backend.sidebar.purchasereturn')
                            </a>
                       </li>
					   
					   
					   <li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('product/products/stock*'))
                        }}" href="{{ url('admin/product/products/stock') }}">
                                @lang('menus.backend.sidebar.stocks')
                            </a>
                       </li>
						
						
						<li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/sale/sales*'))
                        }}" href="{{ route('admin.sales.index') }}">
                                @lang('menus.backend.sidebar.sales')
                            </a>
                       </li>
					   
					   
					   <li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/salereturn/salereturns*'))
                        }}" href="{{ route('admin.salereturns.index') }}">
                                @lang('menus.backend.sidebar.salereturns')
                            </a>
                       </li>
					   
					   
					   
					   <li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/customer/customers*'))
                        }}" href="{{ route('admin.customers.index') }}">
                                @lang('menus.backend.sidebar.customers')
                            </a>
                       </li>
					   
					   
					   <li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/supplier/suppliers*'))
                        }}" href="{{ route('admin.suppliers.index') }}">
                                @lang('menus.backend.sidebar.suppliers')
                            </a>
                       </li>


                       
						
						
                    </ul>
                </li>
				
				
				<li class="divider"></li>

               <!-- <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/pages'))
                    }}" href="{{ route('admin.pages.index') }}">
                        <i class="nav-icon fas fa-file"></i>
                        @lang('menus.backend.sidebar.pages')
                    </a>
                </li>

                <li class="divider"></li>

                <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/faqs'))
                    }}" href="{{ route('admin.faqs.index') }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        @lang('menus.backend.sidebar.faqs')
                    </a>
                </li>

                <li class="divider"></li>

                <li class="nav-item">
                    <a class="nav-link {{
                        active_class(Route::is('admin/email-templates'))
                    }}" href="{{ route('admin.email-templates.index') }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        @lang('menus.backend.sidebar.email-templates')
                    </a>
                </li>

                <li class="divider"></li> -->
				

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/blogs'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/blogs*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-rss"></i> @lang('menus.backend.sidebar.system_setting')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/company/companies*'))
                        }}" href="{{ route('admin.companies.index') }}">
                                @lang('menus.backend.sidebar.company')
                            </a>
                        </li>
						
						<li class="nav-item">
                           <a class="nav-link {{
                            active_class(Route::is('admin/branch/branches*'))
                        }}" href="{{ route('admin.branches.index') }}">
                                @lang('menus.backend.sidebar.branch')
                            </a>
                        </li>
						
						

                       
						
						
                    </ul>
                </li>

                <!--<li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li> -->
				
            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
