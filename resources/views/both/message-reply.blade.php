@extends('layouts.app_user')
@section('styles')
    <style>
        .all-dashboard-icon {
            width: 13px !important;
        }
    </style>
@endsection
@section('content')
    <div class="page-wraper" style="transform: none;">
        <div class="page-content" style="transform: none;">
            <div class="section-full p-t70  p-b70 site-bg-white" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">

                        @include('partials.profile-sidebar')




                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">

                            <div class="twm-right-section-panel site-bg-gray">



                                <div class="panel panel-default">
                                    <div class="panel-heading wt-panel-heading p-a20">
                                        <h4 class="panel-tittle m-a0"><svg style="width: 20px" class="svg-inline--fa fa-suitcase me-2"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="suitcase"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z">
                                                </path>
                                            </svg><!-- <i class="fa fa-suitcase me-2"></i> Font Awesome fontawesome.com -->Inbox
                                        </h4>
                                    </div>
                                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                        <div class="wt-admin-dashboard-msg-2">

                                            <div class="wt-dashboard-msg-user-list">
                                                <div class="user-msg-list-btn-outer">
                                                    <button class="user-msg-list-btn-close">Close</button>
                                                    <button class="user-msg-list-btn-open">User Message</button>
                                                </div>

                                                {{-- <div class="wt-dashboard-msg-search">
                                                    <div class="input-group">
                                                        <input class="form-control" id="search-input"
                                                            placeholder="Search Messages" type="text">
                                                        <button class="btn" type="button"><svg
                                                                class="svg-inline--fa fa-magnifying-glass"
                                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                                data-icon="magnifying-glass" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z">
                                                                </path>
                                                            </svg></button>
                                                    </div>
                                                </div>



                                                <div class="msg-find-list">
                                                    <select class="wt-select-box bs-select-hidden">
                                                        <option>Recent Chats</option>
                                                        <option>Short by Time</option>
                                                        <option>Short by Unread</option>
                                                    </select>
                                                </div> --}}



                                                <div class="scroll-wrapper wt-dashboard-msg-search-list scrollbar-macosx"
                                                    style="position: relative;">
                                                    <div class="wt-dashboard-msg-search-list scrollbar-macosx scroll-content" id="conversation_list" style="position: relative; height: 700px; margin-bottom: 0px; margin-right: 0px; max-height: none;">

                                                        @include('partials.message-sidebar')


                                                    </div>
                                                    <div class="scroll-element scroll-x">
                                                        <div class="scroll-element_outer">
                                                            <div class="scroll-element_size"></div>
                                                            <div class="scroll-element_track"></div>
                                                            <div class="scroll-bar" style="width: 0px;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-element scroll-y">
                                                        <div class="scroll-element_outer">
                                                            <div class="scroll-element_size"></div>
                                                            <div class="scroll-element_track"></div>
                                                            <div class="scroll-bar" style="height: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div id="msg-chat-wrap" class="wt-dashboard-msg-box">
                                                {{-- <div class="single-msg-user-name-box">
                                                    <div class="single-msg-short-discription">
                                                        <h4 class="single-msg-user-name">
                                                            @if ($user->resiver_id == auth()->user()->id)
                                                                {{ getUser($user->sender_id)->name }}
                                                                <p>{{ getUser($user->sender_id)->title }}</p>
                                                            @else
                                                                {{ getUser($user->resiver_id)->name }}
                                                                <p>{{ getUser($user->resiver_id)->title }}</p>
                                                            @endif
                                                        </h4>
                                                    </div>
                                                </div> --}}
                                                <div class="single-user-msg-conversation scrollbar-macosx "
                                                    id="msg-chat-list" style="overflow-x:scroll">
                                                    <div class="single-user-comment-wrap sigle-user-reply">
                                                        <div class="row justify-content-end">
                                                            <div class="col-12">
                                                                @foreach ($messages as $message)
                                                                    <div class="single-user-comment-block clearfix">
                                                                        <div class="single-user-com-pic">
                                                                            @if ($message->sender_id == auth()->user()->id)
                                                                                <img src="{{ asset(getUser($message->resiver_id)->avatar) }}" alt="">
                                                                            @else
                                                                                <img src="{{ asset(getUser($message->sender_id)->avatar) }}" alt="">
                                                                            @endif
                                                                        </div>
                                                                        <div class="single-user-com-text">{{ $message->message }}</div>
                                                                        <div class="single-user-msg-time">
                                                                            <svg style="width: 20px" class="svg-inline--fa fa-check text-wright" style="font-size: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="single-msg-reply-comment">

                                                    <div class="publisher bt-1 border-light w-100">
                                                        <span class="user-icon">
                                                            <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                </path>
                                                            </svg>
                                                        </span>

                                                        <form action="{{ route('message.send') }}" id="conversation_form" method="post" class="w-100">
                                                            @csrf
                                                            <input class="publisher-input message" type="text" name="message" placeholder="Write something" style="width: 93%">
                                                            <input type="text" name="sender_id" value="{{ auth()->user()->id }}">
                                                            <input type="text" name="resiver_id" value="{{ $singleMessage->resiver_id }}">
                                                            <button type="submit" class="publisher-btn primary-btn-color" id="send_message" data-abc="true">
                                                                <svg class="svg-inline--fa fa-paper-plane" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </form>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
