<?php

namespace App\Http\Controllers\UserService;

use App\Models\Image;
use App\Notifications\UserNotification;

use Throwable;

class Update {

    public function __invoke($user,$request)
    {

        try{
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

                $user->meta->name          = $request->input('name');
                $user->meta->gender        = $request->input('gender');
                $user->meta->address       = $request->input('address');
                $user->meta->year          = $request->input('year');

                // Check for which values of send email profile updated
               $values = [];
               if ($user->meta->isDirty('name'))           array_push($values,'name');
               if ($user->meta->isDirty('gender'))         array_push($values,'gender');
               if ($user->meta->isDirty('address'))        array_push($values,'address');
               if ($user->meta->isDirty('year'))           array_push($values,'year');


               $subject = 'User Notification';
               $message = 'at your profile changed by ' . $user->email;
               $user->notify(new UserNotification($subject,$values,$message));
               $user->meta->save();


            if($request->password)
            {
                $user = auth()->user();
                $user->update([
                    'password' => bcrypt($request->input('password')),
                ]);
            }

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }

         return back()
             ->with('success','Your profile has been updated');
    }
}
