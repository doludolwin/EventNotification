 <li>
    <a>
        <span class="image"><img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Profile Image" /></span>
         <span>
       		<span>{{Auth::user()->name}}</span>
        	<span class="time">3 mins ago</span>
        </span>
        <span class="message">
           your subscription has been cancelled at {{$notifications->data['subscription_ended']['date']}}
        </span>
    </a>
</li>