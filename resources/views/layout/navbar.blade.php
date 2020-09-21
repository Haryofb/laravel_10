<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          {{-- <p>{{ Auth::user()->name }}</p> --}}
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
        <a href="{{route('home')}}">
            <i class="fa fa-dashboard"></i>HOME </a>
        </li>
    {{-- @if (Auth::user()->role == 1) --}}

        <li>
        <a href="{{route('department.home')}}"><i class="fa fa-circle-o"></i> Department</a>

    </li>
    <li>
        <a href="{{route('position.home')}}"><i class="fa fa-circle-o"></i>Position</a>

    </li>
    <li>
        <a href="{{route('employee.home')}}"><i class="fa fa-circle-o"></i>Employee</a>

    </li>
    <li>
        <a href="{{route('archive.home')}}"><i class="fa fa-circle-o"></i>Archive</a>

    </li>
    <li>
        <a href="{{route('inventory.home')}}"><i class="fa fa-circle-o"></i>Inventory</a>

    </li>

    <li>
        <a href="{{route('member.home')}}"><i class="fa fa-circle-o"></i>member</a>

    </li>
    <li>
        <a href="{{route('member.add')}}"><i class="fa fa-circle-o"></i>registration</a>

    </li>

    {{-- @else --}}

    <li>
        <a href="{{route('archive.home')}}"><i class="fa fa-circle-o"></i>Archive</a>

    </li>
    <li>
        <a href="{{route('inventory.home')}}"><i class="fa fa-circle-o"></i>Inventory</a>

    </li>
    {{-- @endif --}}


  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
