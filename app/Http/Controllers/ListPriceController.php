<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ListPrice;
use App\Models\DownPayment;
use App\Models\InstallmentPriceWithDownPayment;
use App\Models\InstallmentPriceNoDownPayment;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ListPriceController extends Controller
{
    public function showPricelistWithDP(Request $request){

        if($request->ajax()){
            $products = Product::with(['productType', 'productCategory', 'listPrice', 'downPayment'])->latest()->get();
    
            $data = [];
    
            foreach ($products as $product) {
                $data[] = [
                    'id' => $product->id,
                    'product_type' => $product->productType->product_type,
                    'product_category' => $product->productCategory->product_category,
                    'contract_price' => $product->listPrice->contract_price,
                    'spot_cash' => $product->listPrice->spot_cash,
                    'at_need_price' => $product->listPrice->at_need_price,
                    'down_payment_rate' => $product->downPayment->down_payment_rate,
                    'down_payment_amount' => $product->downPayment->down_payment_amount,
                    'balance' => $product->downPayment->balance,
                    'description' => $product->description,
                ];
            }
            return DataTables::of($data)->make(true);
        }
        return view('admin.manager.content.index-show-pl-with-dp');
    }//End Show Manager Pricelist

    public function addPricelistWithDP(Request $request){
        
        return view('admin.manager.content.index-add-pl-with-dp');
    }//End Show Form Manager Pricelist

    public function storePricelistWithDP(Request $request){
        
        $user = Auth::user();
    
        $request->validate([
            'product_type' => 'required',
            'product_category' => 'required',   
            'contract_price' => 'required',
            'spot_cash' => 'required',
            'at_need_price' => 'required',
            'down_payment_rate' => 'required',
            'down_payment_amount' => 'required',
            'balance' => 'required',
            'description' => 'required',
        ]);
    
        $productType = ProductType::firstOrCreate([
            'product_type' => $request->input('product_type'),
        ]);

        $productCategory = ProductCategory::firstOrCreate([
            'product_category' => $request->input('product_category'),
        ]);
        
        $listPrice = ListPrice::firstOrCreate([
            'contract_price' => $request->input('contract_price'),
            'spot_cash' => $request->input('spot_cash'),
            'at_need_price' => $request->input('at_need_price'),
        ]);

        $downPayment = DownPayment::firstOrCreate([
            'down_payment_rate' => rtrim($request->input('down_payment_rate'), '%'),
            'down_payment_amount' => $request->input('down_payment_amount'),
            'balance' => $request->input('balance'),
        ]);

        $product = new Product;      
        $product->productType()->associate($productType);
        $product->productCategory()->associate($productCategory);
        $product->listPrice()->associate($listPrice);
        $product->downPayment()->associate($downPayment);
        $product->description = $request->input('description');
        $product->save();
       
    
        $notification = [
            'message' => 'List Price Successfully Added!',
            'alert-type' => 'success',
        ];
    
        return redirect()->route('show.pricelist.withdown')->with($notification);
    }//End Insert/Add Manager Pricelist Store
    
    public function editPricelistWithDP(Request $request){

      
        $productId = $request->route('id');
        $product = Product::findOrFail($productId);

        return view('admin.manager.content.index-edit-pl-with-dp', compact('product'));
    }//End Edit Manager Pricelist

    public function updatePricelistWithDP(Request $request) {
        
        $productId = $request->input('id');
        $product = Product::findOrFail($productId);
        $products = Product::with(['productType', 'productCategory', 'listPrice', 'downPayment'])->get();
        
    $request->validate([
        'product_type' => 'required',
        'product_category' => 'required',
        'contract_price' => 'required',
        'spot_cash' => 'required',
        'at_need_price' => 'required',
        'down_payment_amount' => 'required',
        'balance' => 'required',
        'description' => 'required',
    ]);

    $productType = ProductType::updateOrCreate(
        ['product_type' => $request->input('product_type')
    ]);

    $productCategory = ProductCategory::updateOrCreate(
        ['product_category' => $request->input('product_category')
    ]);

    $listPrice = ListPrice::findOrNew($product->listPrice->id);
    $listPrice->contract_price = $request->input('contract_price');
    $listPrice->spot_cash = $request->input('spot_cash');
    $listPrice->at_need_price = $request->input('at_need_price');
    $listPrice->save();

    $downPayment = DownPayment::findOrNew($product->downPayment->id);
    $downPayment->down_payment_rate = rtrim($request->input('down_payment_rate'), '%');
    $downPayment->down_payment_amount = $request->input('down_payment_amount');
    $downPayment->balance = $request->input('balance');
    $downPayment->save();

    
    $product->productType()->associate($productType);
    $product->productCategory()->associate($productCategory);
    $product->listPrice()->associate($listPrice);
    $product->downPayment()->associate($downPayment);
    $product->description = $request->input('description');
    $product->save();

    $notification = [
        'message' => 'List Price Successfully Updated!',
        'alert-type' => 'success',
    ];
    
        return redirect()->route('show.pricelist.withdown', compact('product'))->with($notification);
    }//End Update Manager Pricelist
    

    public function deletePricelistWithDP(Request $request){

        $productId = $request->route('id');
        $product = Product::findOrFail($productId)->delete();

        $notification = [
            'message' => 'List Price Successfully Deleted!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }//End Delete Manager Pricelist

    public function showinstallmentPricelistWithDP(Request $request){

        $productId = $request->route('id');
        $product = Product::findOrFail($productId);

        $installmentPrice = InstallmentPriceWithDownPayment::where('product_id',$productId)->get();

        return view('admin.manager.content.index-show-installment-pl-with-dp', compact('product','installmentPrice'));
    }//End Show Manager Installment Pricelist With Down

    public function addinstallmentPricelistWithDP(Request $request){
        
        $productId = $request->route('id');
        $product = Product::findOrFail($productId);

        return view('admin.manager.content.index-add-installment-pl-with-dp', compact('product'));
    }//End Add Manager Installment Pricelist

    public function storeinstallmentPricelistWithDP(Request $request) {

        $productId = $request->input('id');
        $product = Product::findOrFail($productId);
    
        $request->validate([
            'interest_rate' => 'required',
            'contract_term' => 'required|numeric',
            'annual_interest_amount' => 'required|numeric',
            'monthly_interest_amount' => 'required|numeric',
            'end_price' => 'required|numeric',
        ]);
    
        $installmentPrice = new InstallmentPriceWithDownPayment;
    
        $installmentPrice->product_id = $product->id;
        $installmentPrice->interest_rate = $request->input('interest_rate');
        $installmentPrice->contract_term = $request->input('contract_term');
        $installmentPrice->annual_interest_amount = $request->input('annual_interest_amount');
        $installmentPrice->monthly_interest_amount = $request->input('monthly_interest_amount');
        $installmentPrice->end_price = $request->input('end_price');
        $installmentPrice->save();
    
        $notification = [
            'message' => 'Installment Price Successfully Added!',
            'alert-type' => 'success',
        ];
    
        // Assuming you want to pass the $product to the view
        return redirect()->route('show.installment.pricelist.withdown', ['id' => $product->id])->with($notification);
    }

    public function deleteInstallmentPriceListWithDP(Request $request) {

        $productId = $request->route('id');
        $installmentPrices = InstallmentPriceWithDownPayment::where('product_id', $productId)->get();
    
        if ($installmentPrices->isNotEmpty()) {

            InstallmentPriceWithDownPayment::where('product_id', $productId)->delete();
    
            $notification = [
                'message' => 'Installment Price Successfully Deleted!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        } else {
            $notification = [
                'message' => 'No Installment Prices to Remove.',
                'alert-type' => 'info',
            ];
            return redirect()->back()->with($notification);
        }
    }//End Delete Manager Installment Pricelist

    public function showinstallmentPricelistNoDP(Request $request){

        $productId = $request->route('id');
        $product = Product::find($productId);

        $installmentPrice = InstallmentPriceNoDownPayment::where('product_id',$productId)->get();

        return view('admin.manager.content.index-show-installment-pl-no-dp', compact('product','installmentPrice'));
    }//End Show Manager Installment Pricelist No Down

    public function addinstallmentPricelistNoDP(Request $request){
        
        $productId = $request->route('id');
        $product = Product::findOrFail($productId);

        return view('admin.manager.content.index-add-installment-pl-no-dp', compact('product'));
    }//End Add Manager Installment Pricelist

    public function storeinstallmentPricelistNoDP(Request $request) {

        $productId = $request->input('id');
        $product = Product::findOrFail($productId);
    
        $request->validate([
            'interest_rate' => 'required',
            'contract_term' => 'required|numeric',
            'annual_interest_amount' => 'required|numeric',
            'monthly_interest_amount' => 'required|numeric',
            'end_price' => 'required|numeric',
        ]);
    
        $installmentPrice = new InstallmentPriceNoDownPayment;
    
        $installmentPrice->product_id = $product->id;
        $installmentPrice->interest_rate = $request->input('interest_rate');
        $installmentPrice->contract_term = $request->input('contract_term');
        $installmentPrice->annual_interest_amount = $request->input('annual_interest_amount');
        $installmentPrice->monthly_interest_amount = $request->input('monthly_interest_amount');
        $installmentPrice->end_price = $request->input('end_price');
        $installmentPrice->save();
    
        $notification = [
            'message' => 'Installment Price Successfully Added!',
            'alert-type' => 'success',
        ];
    
        // Assuming you want to pass the $product to the view
        return redirect()->route('show.installment.pricelist.nodown', ['id' => $product->id])->with($notification);
    }

    public function deleteinstallmentPricelistNoDP(Request $request) {

        $productId = $request->route('id');
        $installmentPrices = InstallmentPriceNoDownPayment::where('product_id', $productId)->get();
    
        if ($installmentPrices->isNotEmpty()) {

            InstallmentPriceNoDownPayment::where('product_id', $productId)->delete();
    
            $notification = [
                'message' => 'Installment Price Successfully Deleted!',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        } else {
            $notification = [
                'message' => 'No Installment Prices to Remove.',
                'alert-type' => 'info',
            ];
            return redirect()->back()->with($notification);
        }
    }//End Delete Manager Installment Pricelist
    
}
