 <li>
    <a>
        <span class="image"><img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Profile Image" /></span>
         <span>
       		<span>{{Auth::user()->name}}</span>
        	<span class="time">3 mins ago</span>
        </span>
        <span class="message">
            A new post has been posted {{$notifications->data['title']}}
        </span>
    </a>
</li>