<?php

namespace App\Http\Controllers\UserService;

use App\Jobs\UpdateProfileEmailJob;
use App\Mail\ChangeUserProfileMail;
use App\Models\Image;
use App\Models\UserMeta;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Update {

    public function __invoke($user,$request)
    {

         // Image update handler
         if($file = $request->file('image'))
         {
             $file->store('public/images');
             if($user->image)
             {
                 Image::where('imageable_id',$user->id)
                     ->update(['url'=>$file->hashName()]);
             } else {
                 Image::create([
                     'url' => $file->hashName(),
                     'imageable_id' => $user->id,
                     'imageable_type' => "User",
                     ]);
             }
         }

         // User meta update handler

         if($user->meta) // check if user had meta
         {
             $user->meta->name = $request->input('name');
             $user->meta->gender = $request->input('gender');
             $user->meta->phone_number = $request->input('phone_number');
             $user->meta->address = $request->input('address');
             $user->meta->year = $request->input('year');

             // Check for which send email profile updated
            $values = [];
            if($user->meta->isDirty('name'))            array_push($values,'name');
            if ($user->meta->isDirty('gender'))         array_push($values,'gender');
            if ($user->meta->isDirty('phone_number'))   array_push($values,'phone_number');
            if ($user->meta->isDirty('address'))        array_push($values,'address');
            if ($user->meta->isDirty('year'))           array_push($values,'year');

            // dispatch(new UpdateProfileEmailJob($user->email,$values));

            Mail::to($user->email)->send(new ChangeUserProfileMail($values));



            $user->meta->save();

         } else {
             UserMeta::create($request->except('url'));
            //  dispatch(new UpdateProfileEmailJob($user->email,'create'));
         }

         return back()
             ->with('success','Your profile has been updated');
    }
}
