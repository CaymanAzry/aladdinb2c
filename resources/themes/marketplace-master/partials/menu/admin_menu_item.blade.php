@foreach($menus as $menu)
    @if($menu->hasChildren('active') && $menu->user_can_access)
        <a style="background-color: #071A10; color:white; font-family: poppins" onMouseOver="this.style.background='#B7950B'"
   onMouseOut="this.style.background='#071A10'" href="#menu-item-{{ $menu->id }}" aria-expanded="false" aria-controls="menu-item-{{ $menu->id }}"
           class="list-group-item list-group-parent first {{ $isActive = (\Request::is(explode(',',$menu->active_menu_url))|| $menu->getProperty('always_active',false,'boolean')?'active':'') }}"
           data-toggle="collapse">
            @if($menu->icon)<i class="{{ $menu->icon }} fa-fw"></i>@endif <span>{{ $menu->name }}</span>
            <span class="fa fa-angle-down collapse-icon pull-right"></span>
        </a>
        <div class="collapse {{ $isActive=='active'?'show':'' }}" id="menu-item-{{ $menu->id }}">
            @include('partials.menu.admin_menu_item', ['menus'=>$menu->getChildren('active')])
        </div>
    @elseif($menu->user_can_access)
        <a style="background-color: #071A10; color:white; font-family: poppins" onMouseOver="this.style.background='#B7950B' this.style.color='black'"
   onMouseOut="this.style.background='#071A10'" class="list-group-item {{ \Request::is(explode(',',$menu->active_menu_url))|| $menu->getProperty('always_active',false,'boolean')?'active':'' }}"
           href="{{ url($menu->url) }}" target="{{ $menu->target??'_self' }}">
            @if($menu->icon)<i class="{{ $menu->icon }} fa-fw"></i>@endif {{ $menu->name }}
        </a>
    @endif
@endforeach
<style>

</style>