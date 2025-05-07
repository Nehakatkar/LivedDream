<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyContactPerson;
use App\Models\CompanyGodownDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userName = auth()->user()->name; 
        return view('companies.index',compact('userName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companyTypes = ['Private Limited', 'Public Limited', 'LLP'];
        $relations = ['Supplier', 'Distributor', 'Partner'];
        $categories = ['Electronics', 'Clothing', 'Food'];
        $zones = ['North', 'South', 'East', 'West'];
        $userName = auth()->user()->name; 

        return view('companies.create', compact('companyTypes', 'relations', 'categories', 'zones','userName'));
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'type' => 'required|string',
    //         'relation' => 'nullable|string',
    //         'product_category' => 'required|string',
    //         'zone' => 'required|integer',
    //         'address' => 'nullable|string',
    //         'gst' => 'nullable|integer',
    //         'city' => 'nullable|string',
    //         'pincode' => 'nullable|integer',
    //     ]);

    //     // Add the authenticated user's ID to the request data
    //     $data = $request->all();
    //     $data['user_id'] = auth()->id(); // Get the logged-in user's ID

    //     // Create the company record
    //     Company::create($data);

    //     return redirect()->back()->with('success', 'Company added successfully!');
    // }
    

    public function store(Request $request)
    {
        Log::info('Company creation request received.', ['request_data' => $request->all()]);
    
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'relation' => 'nullable|string',
            'product_category' => 'required|string',
            'zone' => 'required|integer',
            'address' => 'nullable|string',
            'gst' => 'nullable|integer',
            'city' => 'nullable|string',
            'pincode' => 'nullable|integer',
            'godown_address.*' => '',
            'godown_city.*' => '',
            'godown_pincode.*' => '',
            'sales_executive_name' => '',
            'sales_executive_phone' => '',
            'sales_executive_email' => 'nullable|email|max:255',
            'channel_partner_name' => '',
            'channel_partner_phone' => '',
            'channel_partner_email' => 'nullable|email|max:255',
            'sales_rep_name' => '',
            'sales_rep_phone' => '',
            'sales_rep_email' => 'nullable|email|max:255',
        ]);
    
        try {
            DB::beginTransaction();
            Log::info('Database transaction started.');
    
            $user_id = auth()->id();
            Log::info('Authenticated user ID:', ['user_id' => $user_id]);
    
            // Create the company
            $company = Company::create([
                'name' => $validatedData['name'],
                'type' => $validatedData['type'],
                'relation' => $validatedData['relation'],
                'product_category' => $validatedData['product_category'],
                'zone' => $validatedData['zone'],
                'address' => $validatedData['address'],
                'gst' => $validatedData['gst'],
                'city' => $validatedData['city'],
                'pincode' => $validatedData['pincode'],
                'user_id' => $user_id,
            ]);
            Log::info('Company created successfully.', ['company_id' => $company->id]);
    
            // Store godown details
            if ($request->has('godown_address')) {
                foreach ($request->godown_address as $key => $address) {
                    $godown = CompanyGodownDetail::create([
                        'company_id' => $company->id,
                        'address' => $address,
                        'city' => $request->godown_city[$key],
                        'pincode' => $request->godown_pincode[$key],
                        'user_id' => $user_id,
                    ]);
                    Log::info('Godown details added.', ['godown_id' => $godown->id]);
                }
            }
    
            // Store contact persons
            $contacts = [
                ['role' => 'Sales Executive', 'name' => $validatedData['sales_executive_name'], 'phone' => $validatedData['sales_executive_phone'], 'email' => $validatedData['sales_executive_email']],
                ['role' => 'Channel Partner', 'name' => $validatedData['channel_partner_name'], 'phone' => $validatedData['channel_partner_phone'], 'email' => $validatedData['channel_partner_email']],
                ['role' => 'Sales Representative', 'name' => $validatedData['sales_rep_name'], 'phone' => $validatedData['sales_rep_phone'], 'email' => $validatedData['sales_rep_email']],
            ];
    
            foreach ($contacts as $contact) {
                if (!empty($contact['name']) || !empty($contact['phone']) || !empty($contact['email'])) {
                    $contactPerson = CompanyContactPerson::create([
                        'company_id' => $company->id,
                        'designation' => $contact['role'],
                        'name' => $contact['name'],
                        'phone' => $contact['phone'],
                        'email' => $contact['email'],
                        'user_id' => $user_id,
                    ]);
                    Log::info('Contact person added.', ['contact_id' => $contactPerson->id, 'role' => $contact['role']]);
                }
            }
    
            DB::commit();
            Log::info('Database transaction committed successfully.');
    
            return redirect()->back()->with('success', 'Company added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to add company.', ['error' => $e->getMessage()]);
            
            return back()->with('error', 'Failed to add company: ' . $e->getMessage());
        }
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
