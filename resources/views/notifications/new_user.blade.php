<li>
    <a>
        <span class="image"><img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Profile Image" /></span>
         <span>
       		<span>new user notification</span>
        	<span class="time">{{$notifications->created_at->diffForHumans()}}</span>
        </span>
        <span class="message">
             {{$notifications->data['newuser']}}
        </span>
        <form method="POST" action="/newuser/accept">
            <button type="submit" class="btn btn-primary">Accept</button>
        </form>  
        <form method="POST" action="/newuser/reject">
           <button type="button" class="btn btn-primary">Reject</button> 
        </form>
        
    </a>
</li>