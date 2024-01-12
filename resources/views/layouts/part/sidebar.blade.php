 <!-- Left navbar -->
 @php
 $currentRouteName = Route::currentRouteName();
 @endphp
 <div class="col-12 col-md-3 col-xxl-2 left-nav d-none d-md-block">
     <div class="p-4 py-2">
         <img src="{{ asset('img/DashboardSotariaLogo.png') }}" alt="" class="img-fluid" style="padding-top: 0.3rem; padding-bottom: 0.3rem;">
     </div>
     <a href="{{ route('pages.index') }}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.index' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-dashboard1.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Dashboard
                 </div>
             </div>
         </div>
     </a>
     <a href="{{ route('pages.customer') }}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.customer' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-customer.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Customers
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.agent')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.agent' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-agents.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Agents
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.insurance')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.insurance' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-insurance-company.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Insurance Company
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.plan')}}" class=" btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.plan' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-plan.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Plan/Rate
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.discount')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.discount' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-discount.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Discount Coupon Code
                 </div>
             </div>
         </div>
     </a>
     <a href="report1.html" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.customer' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-report.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Report
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.privacy')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.privacy' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-privacy.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Privacy Policy
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.subadmin')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.subadmin' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-add-new.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Add New Sub-Admin
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.renewal')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.renewal' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-renewal.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Renewal Section
                 </div>
             </div>
         </div>
     </a>
     <a href="{{route('pages.supervisor')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
         <div class="d-flex {{$currentRouteName == 'pages.supervisor' ? 'active' : '' }}">
             <div class="highlight"></div>
             <div class="py-4 w-100 row g-0 px-2 px-lg-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                 <div class="col-2">
                     <img src="{{ asset('img/logo-add-supervisor.png') }}" alt="" class="img-fluid">
                 </div>
                 <div class="options col">
                     Add Supervisor
                 </div>
             </div>
         </div>
     </a>
 </div>
 <!-- Left navbar offcanvas -->
 <div class="offcanvas offcanvas-start" id="leftNav">
     <div class="offcanvas-body p-0 m-0">
         <div class="col-12 col-md-3 col-xxl-2 left-nav">
             <div class="p-4 py-3 d-flex align-items-center justify-content-between">
                 <img src="{{ asset('img/DashboardSotariaLogo.png') }}" alt="" class="img-fluid">
                 <div><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" id="left-nav-close"></button></div>
             </div>
             <a href="{{ route('pages.index') }}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex active">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-dashboard1.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Dashboard
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{ route('pages.customer') }}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.customer' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-customer.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Customers
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.agent')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.customer' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-agents.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Agents
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.insurance')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.insurance' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-insurance-company.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Insurance Company
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.plan')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.plan' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-plan.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Plan/Rate
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.discount')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.discount' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-discount.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Discount Coupon Code
                         </div>
                     </div>
                 </div>
             </a>
             <a href="" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.customer' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-report.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Report
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.privacy')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.privacy' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-privacy.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Privacy Policy
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.subadmin')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.subadmin' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-add-new.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Add New Sub-Admin
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.renewal')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.renewal' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-renewal.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Renewal Section
                         </div>
                     </div>
                 </div>
             </a>
             <a href="{{route('pages.supervisor')}}" class="btn text-start p-0 m-0 w-100 outline-0 border-0 rounded-0">
                 <div class="d-flex {{$currentRouteName == 'pages.supervisor' ? 'active' : '' }}">
                     <div class="highlight"></div>
                     <div class="py-4 w-100 row g-0 px-3 align-items-center gap-2 gap-lg-3 flex-nowrap">
                         <div class="col-1">
                             <img src="{{ asset('img/logo-add-supervisor.png') }}" alt="" class="img-fluid">
                         </div>
                         <div class="options col">
                             Add Supervisor
                         </div>
                     </div>
                 </div>
             </a>
         </div>
     </div>
 </div>