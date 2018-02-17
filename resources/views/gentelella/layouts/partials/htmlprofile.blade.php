    <div class="profile clearfix">
        <div class="profile_pic">
        <img src="{{ Gravatar::get(Auth::user()->email) }}" alt="{{Auth::user()->name}}" class="img-circle profile_img">
        </div>
        <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
        </div>
        <div class="clearfix"></div>
    </div>