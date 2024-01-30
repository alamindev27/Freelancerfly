@forelse ($inboxes as $inbox)
@if ($inbox->sender_id == auth()->user()->id)
    <div class="wt-dashboard-msg-search-list-wrap">
        <a href="{{ route('both.message.chat', $inbox->id) }}" class="msg-user-info clearfix conversation_21587" conversation_id="21587">
            <div class="msg-user-timing"></div>
            <div class="msg-user-info-pic">
                <img src="{{ asset($inbox->groupMessageWithUserRelation->avatar) }}" alt="{{ $inbox->groupMessageWithUserRelation->name }}">
            </div>
            <div class="msg-user-info-text">
                <div class="msg-user-name"> {{ $inbox->groupMessageWithUserRelation->name }}</div>
                <div class="msg-user-discription  text-muted">{{ lastMessage($inbox->id)->message }}</div>
            </div>
        </a>
    </div>
@else
    <div class="wt-dashboard-msg-search-list-wrap">
        <a href="{{ route('both.message.chat', $inbox->id) }}" class="msg-user-info clearfix conversation_21587" conversation_id="21587">
            <div class="msg-user-timing"></div>
            <div class="msg-user-info-pic">
                <img src="{{ asset($inbox->groupMessageWithUserRelation2->avatar) }}" alt="{{ $inbox->groupMessageWithUserRelation2->name }}">
            </div>
            <div class="msg-user-info-text">
                <div class="msg-user-name"> {{ $inbox->groupMessageWithUserRelation2->name }}</div>
                <div class="msg-user-discription  text-muted">{{ lastMessage($inbox->id)->message }}</div>
            </div>
        </a>
    </div>
@endif





@empty
    <div class="text-center text-danger">
        <h4>No chat available</h4>
    </div>
@endforelse
