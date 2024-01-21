@forelse ($users as $user)
    @if ($user->sender_id == auth()->user()->id)
        <div class="wt-dashboard-msg-search-list-wrap">
            <a href="{{ route('both.message.chat', $user->id) }}" class="msg-user-info clearfix conversation_21587" conversation_id="21587">
                <div class="msg-user-timing"></div>
                <div class="msg-user-info-pic">
                    <img src="{{ getUser($user->resiver_id)->avatar }}" alt="{{ getUser($user->resiver_id)->name }}">
                </div>
                <div class="msg-user-info-text">
                    <div class="msg-user-name"> {{ getUser($user->resiver_id)->name }}</div>
                    <div class="msg-user-discription  text-muted">{{ $user->message }}</div>
                </div>
            </a>
        </div>
    @else
        <div class="wt-dashboard-msg-search-list-wrap">
            <a href="{{ route('both.message.chat', $user->id) }}" class="msg-user-info clearfix conversation_21587" conversation_id="21587">
                <div class="msg-user-timing"></div>
                <div class="msg-user-info-pic">
                    <img src="{{ asset(getUser($user->sender_id)->avatar) }}" alt="{{ getUser($user->sender_id)->name }}">
                </div>
                <div class="msg-user-info-text">
                    <div class="msg-user-name"> {{ getUser($user->sender_id)->name }}</div>
                    <div class="msg-user-discription  text-muted">{{ $user->message }}</div>
                </div>
            </a>
        </div>
    @endif
@empty
    <div class="text-center text-danger">
        <h4>No chat available</h4>
    </div>
@endforelse
