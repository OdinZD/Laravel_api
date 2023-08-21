<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoiceFilters extends ApiFilter
{
/*
$table->integer('customer_id');
$table->integer('amount');
$table->string('status');
$table->dateTime('billed_date');
$table->dateTime('paid_date')->nullable();*/
    protected $safeParams = [
        'amount'=>['eq','lt', 'gt', 'lte','gte'],
        'status'=>['eq','ne'],
        'billedDate'=>['eq','lt', 'gt', 'lte','gte'],
        'paidDate'=>['eq','lt', 'gt', 'lte','gte'],
        'customerId'=>['eq'],

    ];

    protected $columnMap = [
        'billedDate'=>'billed_date',
        'paidDate'=>'paid_date',
        'customerId'=>'customer_id'
    ];

    protected $operatorMap = [
        'eq'=> '=',
        'lt'=> '<',
        'gt'=> '>',
        'lte'=> '<=',
        'gte'=> '=>',
        'ne'=> '!='
    ];



}
