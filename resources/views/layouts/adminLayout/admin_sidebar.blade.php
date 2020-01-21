<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="{{url('/home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
        <li> <a href="{{route('user.index')}}"><i class="icon icon-user-md"></i> <span>Add User</span></a> </li>
            @endif

        {{--<li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>--}}
        <li><a href="{{url(route('record.index'))}}"><i class="icon icon-user"></i> <span>Records</span></a></li>
        <li><a href="{{url(url('/plot'))}}"><i class="icon icon-user-md"></i> <span>Plot Area</span></a></li>

        <li class="submenu"> <a href="#"><i class="icon icon-book"></i> <span>Reports</span></a>
            <ul>
                <li><a href="{{url('/report-individual')}}">Individual Report</a></li>
                <li><a href="{{url('/visitor-individual')}}">Visitor Report</a></li>
                {{--<li><a href="{{url('visitor-individual'}}">Visitor Report</a></li>--}}
                {{--<li><a href="form-wizard.html">Visit</a></li>--}}
            </ul>
        </li>
        {{--<li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>--}}
        {{--<li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>--}}
        {{--<li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>--}}
            {{--<ul>--}}
                {{--<li><a href="index2.html">Dashboard2</a></li>--}}
                {{--<li><a href="gallery.html">Gallery</a></li>--}}
                {{--<li><a href="calendar.html">Calendar</a></li>--}}
                {{--<li><a href="invoice.html">Invoice</a></li>--}}
                {{--<li><a href="chat.html">Chat option</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>--}}
            {{--<ul>--}}
                {{--<li><a href="error403.html">Error 403</a></li>--}}
                {{--<li><a href="error404.html">Error 404</a></li>--}}
                {{--<li><a href="error405.html">Error 405</a></li>--}}
                {{--<li><a href="error500.html">Error 500</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="content"> <span>Monthly Bandwidth Transfer</span>--}}
            {{--<div class="progress progress-mini progress-danger active progress-striped">--}}
                {{--<div style="width: 77%;" class="bar"></div>--}}
            {{--</div>--}}
            {{--<span class="percent">77%</span>--}}
            {{--<div class="stat">21419.94 / 14000 MB</div>--}}
        {{--</li>--}}
        {{--<li class="content"> <span>Disk Space Usage</span>--}}
            {{--<div class="progress progress-mini active progress-striped">--}}
                {{--<div style="width: 87%;" class="bar"></div>--}}
            {{--</div>--}}
            {{--<span class="percent">87%</span>--}}
            {{--<div class="stat">604.44 / 4000 MB</div>--}}
        {{--</li>--}}
    </ul>
</div>
<!--sidebar-menu-->
