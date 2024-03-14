<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    function createBusiness()
    {
        $user = auth()->user();
        if (!$user->business) {
            return view('createBusiness.create.index');
        }else{
            return redirect('/dashboard/home');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'pin_no' => 'nullable|string|max:255',
                'address' => 'required|string|max:255',
                'phone_number' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                Storage::putFileAs('public/business_logo', $image, $imageName);
                $validatedData['image'] = $imageName;
            }

            $validatedData['user_id'] = auth()->user()->id;

            // Create a new business with the validated data
            $business = Business::create($validatedData);

            // Assuming you want to redirect somewhere after successful creation
            return redirect()->route('dashboard.index')->with('success', 'Business created successfully.');
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}
