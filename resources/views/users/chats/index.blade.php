@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class=" text-center">Messaging</h3>
    <div class="messaging">
          <div class="inbox_msg">
            <div class="inbox_people">
              <div class="headind_srch">
                <div class="recent_heading">
                  <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                  <div class="stylish-input-group">
                    <input type="text" class="search-bar"  placeholder="Search" >
                    <span class="input-group-addon">
                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    </span> </div>
                </div>
              </div>

              <div class="inbox_chat">
                  @foreach ($users as $user)
                    <div id="{{ 'pvUser' . $user->id }}" class="chat_list" onclick="showMessages({{ $user->id }})">
                      <div class="chat_people">
                          <div class="chat_img"> <img src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}" alt="sunil"> </div>
                          <div class="chat_ib">
                              <h5>{{ $user->meta ? $user->meta->name : $user->email }} <span class="chat_date">{{ $user->chats->last() ?  $user->chats->last()->created_at : ''  }}</span></h5>
                              <p>{{$user->chats->last() ? $user->chats->last()->message : ''}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
              </div>
            </div>
            <div  class="mesgs">
                <div id="mesgs" class="msg_history">

                </div>
            </div>
          </div>


          <p class="text-center top_spac"> Design by <a target="_blank" href="https://www.linkedin.com/in/sunil-rajput-nattho-singh/">Sunil Rajput</a></p>

        </div></div>
@endsection


@section('footer')
        <script>
            $(document).ready(function() {
                $('.chat_list:first-child').click();

            });

            let pvUser;

            const sendMessage = (id) => {
               const messageInput =  document.getElementById('messageInput');
               const message = messageInput.value;
               $.ajax({
                   url: '/chat',
                   type: 'post',
                   data: {message,id},
                   success:function(res) {
                    messageInput.value = '';
                    showMessages(id);

                   },error:function(err) {
                       console.log(err);
                   }
               });
            }
            const showMessages = (id) => {
                if(pvUser) pvUser.classList.remove('active_chat');
                let mesgs = document.getElementById("mesgs");
                pvUser = document.getElementById(`pvUser${id}`);
                pvUser.classList.add('active_chat');
                $.ajax({
                    url: `/chat/${id}`,
                    type: 'get',
                    success:function(res) {
                        let form;
                        res.chats.map(chat => {
                            if(chat.from == id) {
                                form += ` <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="${res.userImage != '' ? res.userImage : '/storage/images/avatar.png'}" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>${chat.message}</p>
                      <span class="time_date"> ${chat.created_at} </span></div>
                  </div>
                </div>`
                            } else {
                                form += ` <div class="outgoing_msg">
                                    <div class="outgoing_msg_img"> <img src="${res.authImage != '' ? res.authImage : '/storage/images/avatar.png'}" alt="sunil"> </div>
                  <div class="sent_msg">
                    <p>${chat.message}</p>
                    <span class="time_date"> ${chat.created_at}</span> </div>
                </div>`
                            }

                        });
                        form += `<div class="type_msg">
                <div class="input_msg_write">
                  <input type="text" id="messageInput" class="write_msg" placeholder="Type a message" />
                  <button id="messageButton" class="msg_send_btn" onclick="sendMessage(${id})" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
              </div>`;
                    mesgs.innerHTML = form;

                        mesgs.scrollTop = mesgs.scrollHeight;
                    },error:function(err) {
                        console.log(err);
                    },
                });
            }

        </script>
@endsection
