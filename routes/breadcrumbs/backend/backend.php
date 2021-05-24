<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
require __DIR__.'/blogs/blog.php';
require __DIR__.'/blog-categories/blog-categories.php';
require __DIR__.'/blog-tags/blog-tags.php';
require __DIR__.'/pages/page.php';
require __DIR__.'/faqs/faq.php';
require __DIR__.'/email-templates/email-template.php';
require __DIR__.'/auth/permission.php';


require __DIR__.'/companies/companies.php';

require __DIR__.'/branches/branches.php';


require __DIR__.'/categories/categories.php';

require __DIR__.'/subcategories/subcategories.php';

require __DIR__.'/brands/brands.php';

require __DIR__.'/units/units.php';

require __DIR__.'/currencies/currencies.php';


require __DIR__.'/customers/customers.php';


require __DIR__.'/employees/employees.php';

require __DIR__.'/allowances/allowances.php';


require __DIR__.'/deductions/deductions.php';


require __DIR__.'/loans/loans.php';


require __DIR__.'/suppliers/suppliers.php';

require __DIR__.'/products/product.php';


require __DIR__.'/purchases/purchase.php';


require __DIR__.'/sales/sale.php';

require __DIR__.'/purchasereturns/purchasereturn.php';

require __DIR__.'/salereturns/salereturn.php';
