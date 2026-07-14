<div>
    <h1>Profile</h1>

    welcome {{session('UserID')}}
    @if(session('UserID'))
        <h1> welcome {{session('UserID')}}</h1>
    
    @else
        <h1>NO User Found</h1>
    @endif

</div>