<?php

namespace App\Listeners;

use App\Events\UserHandlerEvent;
use App\Models\Image;
use App\Models\UserMeta;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserUpdateHandlerListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHandlerEvent  $event
     * @return void
     */
    public function handle(UserHandlerEvent $event)
    {
          // Image update handler
          if($file = $event->request->file('image'))
          {
              $file->store('public/images');
              if($event->user->image)
              {

                  Image::where('imageable_id',$event->user->id)
                      ->update(['url'=>$file->hashName()]);
              } else {
                  Image::create([
                      'url' => $file->hashName(),
                      'imageable_id' => $event->user->id,
                      'imageable_type' => "User",
                      ]);
              }
          }

          // User meta update handler
          if($event->user->meta)
          {
              UserMeta::where('user_id',$event->user->id)
                  ->update($event->request->except(['image','_token',"_method"]));
          } else {
              UserMeta::create($event->request->except('url'));
          }

          return back()
              ->with('success','Your profile has been updated');

    }
}
