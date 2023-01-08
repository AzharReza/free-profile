<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('status',1)->get();
        return view('admin.pages.display', compact('users'));
    }

    public function create()
    {
        return view('admin.pages.add');
    }

    public function store(Request $request)
    {

        try {
            $image = $path = null;
            if ($request->image) {

                $path = 'upload/User/';
                try {
                    $image = $this->uploadImage($request->image, $path . '/');
                } catch (\Exception $e) {
//                    return makeResponse('error', 'Error in Saving Image: ' . $e, 500);
                    return $e;
                }
            }
            User::create([
                'first_name' => $request->first_name ?? 'N/A',
                'last_name' => $request->last_name ?? 'N/A',
                'father_name' => $request->father_name ?? 'N/A',
                'cnic' => $request->cnic ?? 'N/A',
                'email' => $request->email ?? 'N/A',
                'phone' => $request->phone ?? 'N/A',
                'address' => $request->address ?? 'N/A',
                'address2' => $request->address2 ?? 'N/A',
//                'password' => $request->password??'N/A',
                'city' => $request->city ?? 'N/A',
                'state' => $request->state ?? 'N/A',
                'dob' => $request->dob ?? 'N/A',
                'dod' => $request->dod,
                'religion' => $request->religion ?? 'N/A',
                'description' => $request->description ?? 'N/A',
                'gender' => $request->gender ?? 'N/A',
                'pic' => $image,
            ]);
//            dd($request->all(), $image);

            return redirect()->route('userListing');
        } catch (\Exception $e) {
//            return $e;
            return redirect()->back();
        }
    }

    public function show(User $user)
    {
        $data = $user;
        return view('admin.pages.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     */
    public function edit(User $user)
    {
        $data = $user;
        return view('admin.pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     */
    public function update(Request $request, User $user)
    {
        try {
            $image = $path = null;
            if ($request->image) {
                $path = 'upload/User/';
                try {
                    $image = $this->uploadImage($request->image, $path . '/');
                    File::delete($user->image);
                } catch (\Exception $e) {
//                    return makeResponse('error', 'Error in Saving Image: ' . $e, 500);
                }
            }
            $user->update([
                'first_name' => $request->first_name ?? 'N/A',
                'last_name' => $request->last_name ?? 'N/A',
                'father_name' => $request->father_name ?? 'N/A',
                'cnic' => $request->cnic ?? 'N/A',
                'email' => $request->email ?? 'N/A',
                'phone' => $request->phone ?? 'N/A',
                'address' => $request->address ?? 'N/A',
                'address2' => $request->address2 ?? 'N/A',
                'password' => $request->password ?? 'N/A',
                'city' => $request->city ?? 'N/A',
                'state' => $request->state ?? 'N/A',
                'dob' => $request->dob ?? 'N/A',
                'dod' => $request->dod,
                'religion' => $request->religion ?? 'N/A',
                'description' => $request->description ?? 'N/A',
                'gender' => $request->gender ?? 'N/A',
                'pic' => $image,
            ]);
            return redirect()->route('userListing');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('userListing');
        } catch (\Exception $e) {
            return redirect()->route('userListing');
        }
    }

    public static function uploadImage($uploadImage, $path)
    {
        $image = $uploadImage;
        $ext = $image->getClientOriginalExtension();
        $randomString = mt_rand(100000, 999999);
        $fileName = $image->getClientOriginalName();
        $fileNameUpload = time() . "-" . $randomString . '.' . $ext;
        $drive = $path;
        $path = public_path($drive);
        if (!file_exists($path)) {
            File::makeDirectory($path, 0777, true);
        }
//        $imageSave = $this->saveImage($image, $fileNameUpload, $path,$drive);
        Image::make($image)->save($path . $fileNameUpload);

        return $drive . $fileNameUpload;

    }

    public function adminList()
    {
        $users = User::all();
        return view('admin.pages.admin-listing', compact('users'));
    }

    public function approve(User $user)
    {
        $data = $user;
        return view('admin.pages.approve', compact('data'));
    }

    public function approved(User $user)
    {
        $user->update(['status' => 1]);
        return redirect()->route('admin');
    }
}
