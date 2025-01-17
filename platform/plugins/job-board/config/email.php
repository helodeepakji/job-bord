<?php

return [
    'name' => 'plugins/job-board::job-board.emails.title',
    'description' => 'plugins/job-board::job-board.emails.description',
    'templates' => [
        'admin-new-job-application' => [
            'title' => 'plugins/job-board::email.templates.admin-new-job-application.title',
            'description' => 'plugins/job-board::email.templates.admin-new-job-application.description',
            'subject' => 'plugins/job-board::email.templates.admin-new-job-application.subject',
            'can_off' => true,
            'variables' => [
                'job_application_name' => 'plugins/job-board::email.variables.name',
                'job_application_position' => 'plugins/job-board::email.variables.position',
                'job_application_email' => 'plugins/job-board::email.variables.email',
                'job_application_phone' => 'plugins/job-board::email.variables.phone',
                'job_application_summary' => 'plugins/job-board::email.variables.summary',
                'job_application_resume' => 'plugins/job-board::email.variables.resume',
                'job_application_cover_letter' => 'plugins/job-board::email.variables.cover_letter',
                'job_application' => 'plugins/job-board::email.variables.job_application',
            ],
        ],
        'employer-new-job-application' => [
            'title' => 'plugins/job-board::email.templates.employer-new-job-application.title',
            'description' => 'plugins/job-board::email.templates.employer-new-job-application.description',
            'subject' => 'plugins/job-board::email.templates.employer-new-job-application.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_application_name' => 'plugins/job-board::email.variables.name',
                'job_application_position' => 'plugins/job-board::email.variables.position',
                'job_application_email' => 'plugins/job-board::email.variables.email',
                'job_application_phone' => 'plugins/job-board::email.variables.phone',
                'job_application_summary' => 'plugins/job-board::email.variables.summary',
                'job_application_resume' => 'plugins/job-board::email.variables.resume',
                'job_application_cover_letter' => 'plugins/job-board::email.variables.cover_letter',
                'job_application' => 'plugins/job-board::email.variables.job_application',
            ],
        ],
        'job-seeker-applied-job' => [
            'title' => 'plugins/job-board::email.templates.job-seeker-applied-job.title',
            'description' => 'plugins/job-board::email.templates.job-seeker-applied-job.description',
            'subject' => 'plugins/job-board::email.templates.job-seeker-applied-job.subject',
            'can_off' => true,
            'variables' => [
                'job_application_name' => 'plugins/job-board::email.variables.job_applicant_name',
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'company_name' => 'plugins/job-board::email.variables.company_name',
            ],
        ],
        'new-job-posted' => [
            'title' => 'plugins/job-board::email.templates.new-job-posted.title',
            'description' => 'plugins/job-board::email.templates.new-job-posted.description',
            'subject' => 'plugins/job-board::email.templates.new-job-posted.subject',
            'can_off' => true,
            'variables' => [
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'job_url' => 'plugins/job-board::email.variables.job_url',
                'job_author' => 'plugins/job-board::email.variables.job_author',
            ],
        ],
        'new-company-profile-created' => [
            'title' => 'plugins/job-board::email.templates.new-company-profile-created.title',
            'description' => 'plugins/job-board::email.templates.new-company-profile-created.description',
            'subject' => 'plugins/job-board::email.templates.new-company-profile-created.subject',
            'can_off' => true,
            'variables' => [
                'company_name' => 'plugins/job-board::email.variables.company_name',
                'company_url' => 'plugins/job-board::email.variables.company_url',
                'employer_name' => 'plugins/job-board::email.variables.employer_name',
            ],
        ],
        'job-expired-soon' => [
            'title' => 'plugins/job-board::email.templates.job-expired-soon.title',
            'description' => 'plugins/job-board::email.templates.job-expired-soon.description',
            'subject' => 'plugins/job-board::email.templates.job-expired-soon.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'job_url' => 'plugins/job-board::email.variables.job_url',
                'job_author' => 'plugins/job-board::email.variables.job_author',
                'job_list' => 'plugins/job-board::email.variables.job_list',
                'job_expired_after' => 'plugins/job-board::email.variables.job_expired_after',
            ],
        ],
        'job-renewed' => [
            'title' => 'plugins/job-board::email.templates.job-renewed.title',
            'description' => 'plugins/job-board::email.templates.job-renewed.description',
            'subject' => 'plugins/job-board::email.templates.job-renewed.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'job_url' => 'plugins/job-board::email.variables.job_url',
                'job_author' => 'plugins/job-board::email.variables.job_author',
            ],
        ],
        'payment-receipt' => [
            'title' => 'plugins/job-board::email.templates.payment-receipt.title',
            'description' => 'plugins/job-board::email.templates.payment-receipt.description',
            'subject' => 'plugins/job-board::email.templates.payment-receipt.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_name' => 'plugins/job-board::email.variables.account_name',
                'account_email' => 'plugins/job-board::email.variables.account_email',
                'package_name' => 'plugins/job-board::email.variables.package_name',
                'package_price' => 'plugins/job-board::email.variables.package_price',
                'package_percent_discount' => 'plugins/job-board::email.variables.package_percent_discount',
                'package_number_of_listings' => 'plugins/job-board::email.variables.package_number_of_listings',
                'package_price_per_credit' => 'plugins/job-board::email.variables.package_price_per_credit',
            ],
        ],
        'account-registered' => [
            'title' => 'plugins/job-board::email.templates.account-registered.title',
            'description' => 'plugins/job-board::email.templates.account-registered.description',
            'subject' => 'plugins/job-board::email.templates.account-registered.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_type' => 'plugins/job-board::email.variables.account_type',
                'account_name' => 'plugins/job-board::email.variables.account_name',
                'account_email' => 'plugins/job-board::email.variables.account_email',
            ],
        ],
        'confirm-email' => [
            'title' => 'plugins/job-board::email.templates.confirm-email.title',
            'description' => 'plugins/job-board::email.templates.confirm-email.description',
            'subject' => 'plugins/job-board::email.templates.confirm-email.subject',
            'can_off' => false,
            'variables' => [
                'verify_link' => 'plugins/job-board::email.variables.verify_link',
            ],
        ],
        'password-reminder' => [
            'title' => 'plugins/job-board::email.templates.password-reminder.title',
            'description' => 'plugins/job-board::email.templates.password-reminder.description',
            'subject' => 'plugins/job-board::email.templates.password-reminder.subject',
            'can_off' => false,
            'variables' => [
                'reset_link' => 'plugins/job-board::email.variables.reset_link',
            ],
        ],
        'free-credit-claimed' => [
            'title' => 'plugins/job-board::email.templates.free-credit-claimed.title',
            'description' => 'plugins/job-board::email.templates.free-credit-claimed.description',
            'subject' => 'plugins/job-board::email.templates.free-credit-claimed.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_name' => 'plugins/job-board::email.variables.account_name',
                'account_email' => 'plugins/job-board::email.variables.account_email',
            ],
        ],
        'payment-received' => [
            'title' => 'plugins/job-board::email.templates.payment-received.title',
            'description' => 'plugins/job-board::email.templates.payment-received.description',
            'subject' => 'plugins/job-board::email.templates.payment-received.subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'package_name' => 'plugins/job-board::email.variables.package_name',
                'package_price' => 'plugins/job-board::email.variables.package_price',
                'account_name' => 'plugins/job-board::email.variables.account_name',
                'account_email' => 'plugins/job-board::email.variables.account_email',
                'package_percent_discount' => 'plugins/job-board::email.variables.package_percent_discount',
                'package_number_of_listings' => 'plugins/job-board::email.variables.package_number_of_listings',
                'package_price_per_credit' => 'plugins/job-board::email.variables.package_price_per_credit',
            ],
        ],
        'invoice-payment-created' => [
            'title' => 'plugins/job-board::email.templates.invoice-payment-created.title',
            'description' => 'plugins/job-board::email.templates.invoice-payment-created.description',
            'subject' => 'plugins/job-board::email.templates.invoice-payment-created.subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'account_name' => 'plugins/job-board::email.variables.account_name',
                'invoice_code' => 'plugins/job-board::email.variables.invoice_code',
                'invoice_link' => 'plugins/job-board::email.variables.invoice_link',
            ],
        ],
        'job-seeker-job-alert' => [
            'title' => 'plugins/job-board::email.templates.job-seeker-job-alert.title',
            'description' => 'plugins/job-board::email.templates.job-seeker-job-alert.description',
            'subject' => 'plugins/job-board::email.templates.job-seeker-job-alert.subject',
            'can_off' => true,
            'variables' => [
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'job_url' => 'plugins/job-board::email.variables.job_url',
                'company_name' => 'plugins/job-board::email.variables.company_name',
                'account_name' => 'plugins/job-board::email.variables.account_name',
            ],
        ],
        'job-approved' => [
            'title' => 'plugins/job-board::email.templates.job-approved.title',
            'description' => 'plugins/job-board::email.templates.job-approved.description',
            'subject' => 'plugins/job-board::email.templates.job-approved.subject',
            'can_off' => true,
            'variables' => [
                'job_name' => 'plugins/job-board::email.variables.job_name',
                'job_url' => 'plugins/job-board::email.variables.job_url',
                'job_author' => 'plugins/job-board::email.variables.job_author',
            ],
        ],
        'company-approved' => [
            'title' => 'plugins/job-board::email.templates.company-approved.title',
            'description' => 'plugins/job-board::email.templates.company-approved.description',
            'subject' => 'plugins/job-board::email.templates.company-approved.subject',
            'can_off' => true,
            'variables' => [
                'company_name' => 'plugins/job-board::email.variables.company_name',
                'company_url' => 'plugins/job-board::email.variables.company_url',
            ],
        ],
    ],
];
