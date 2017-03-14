{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Kontrolna tabla</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-cutlery"></i> Jela
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('admin.product.index')}}">- Sva jela</a></li>
                    <li><a href="{{route('admin.product.create')}}">- Dodaj jelo</a></li>
                </ul>
            </li>
            <li class="">
                <a href="{{route('admin.orders.index')}}">
                    <i class="glyphicon glyphicon-edit"></i> Narudžbine
                </a>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->