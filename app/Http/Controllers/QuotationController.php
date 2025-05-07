<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function create()
    {
        // $companies = Company::select('id', 'name')->get();
        // $sample = Sample::select('id', 'name')->get();
        $userName = auth()->user()->name; 
        return view('quotations.create_quotation',compact('userName'));
    }

    public function newquotation()
    {
        // $companies = Company::select('id', 'name')->get();
        // $sample = Sample::select('id', 'name')->get();
        $userName = auth()->user()->name; 
        return view('quotations.new_quotation',compact('userName'));
    }

    public function productList()
    {
        $userName = auth()->user()->name; 
        return view('quotations.product_list',compact('userName'));
    }

    public function productDetails()
    {
        $userName = auth()->user()->name; 
        return view('quotations.product_details',compact('userName'));
    }

    public function productCart()
    {
        $userName = auth()->user()->name; 
        return view('quotations.product_cart',compact('userName'));
    }

    public function clientDetails()
    {
        $userName = auth()->user()->name; 
        return view('quotations.client_details',compact('userName'));
    }
    

    public function quotationsummary()
    {
        $userName = auth()->user()->name; 
        return view('quotations.quatations_summary',compact('userName'));
    }


    public function paymentsterms()
    {
        $userName = auth()->user()->name; 
        return view('quotations.payment_terms',compact('userName'));
    }

    public function advancedpayment()
    {
        $userName = auth()->user()->name; 
        return view('quotations.advanced_payment',compact('userName'));
    }
}
