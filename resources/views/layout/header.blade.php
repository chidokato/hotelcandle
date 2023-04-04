<?php use App\category_translations; ?>
<div class="header_contact">
        <div class="container container_contact">
            <div class="header_phone">
                <a class="phone_link" href="#">
                    <i class="fas fa-phone-alt"></i>0242 242 0777
                </a>
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    Số 147 Mai Dịch, Cầu Giấy, H&#224; Nội
                </span>
            </div>
            <select onchange="location = this.options[this.selectedIndex].value;">
                <option {{ Session::get('locale')=='en' ? 'selected':'' }} value="lang/en">{{__('lang.english')}}</option>
                <option {{ Session::get('locale')=='vi' ? 'selected':'' }} value="lang/vi">{{__('lang.vietnamese')}}</option>
                <option {{ Session::get('locale')=='jp' ? 'selected':'' }} value="lang/jp">{{__('lang.japanese')}}</option>
            </select>
        </div>
</div>
<section class="header">
    <div class="header_nav">
        <div class="nav_container">
            <header class="header" id="header">
               <section class="wrapper container">
                  <a href="./index.html" class="brand">Brand</a>
                  <div class="burger" id="burger">
                     <span class="burger-line"></span>
                     <span class="burger-line"></span>
                     <span class="burger-line"></span>
                  </div>
                  <span class="overlay"></span>
                  <nav class="navbar" id="navbar">
                     <ul class="menu" id="menu">
                        <!-- <li class="menu-item"><a href="#" class="menu-link">Home</a></li> -->
                        @foreach($menu as $val)
                        <?php $submenu = category_translations::where('parent', $val->id)->get(); ?>
                        @if(count($submenu) > 0)
                        <li class="menu-item menu-dropdown">
                           <span class="menu-link" data-toggle="submenu">{{$val->name}}<i class="bx bx-chevron-down"></i></span>
                           <ul class="submenu">
                            @foreach($submenu as $subme)
                              <li class="submenu-item"><a href="{{$subme->slug}}" class="submenu-link">{{$subme->name}}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        @else
                        <li class="menu-item"><a href="{{$val->slug}}" class="menu-link">{{$val->name}}</a></li>
                        @endif
                        @endforeach
                     </ul>
                  </nav>
               </section>
            </header>
            <div class="menu_mobile"></div>
            
        </div>
    </div>
</section>