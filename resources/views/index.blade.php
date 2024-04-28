@extends('layout.app')


@section('content')


<!-- loader Start -->
<!--<div id="loading">
        <div id="loading-center">
        </div>
  </div>-->
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="iq-top-navbar">
     <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar p-lg-0">
        <div class="container-fluid navbar-inner">
           <div class="d-flex align-items-center flex-lg-row-reverse gap-3 pb-2 pb-lg-0">
              <a class="sidebar-toggle" data-toggle="sidebar" data-active="true" href="javascript:void(0);">
                 <div class="icon material-symbols-outlined iq-burger-menu">
                    menu
                 </div>
              </a>
              <a href="index.html"
                 class="d-flex align-items-center gap-2 iq-header-logo">
                 <!--<svg width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                       d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z"
                       fill="currentColor" />-->
                       <img src="{{ url('images/petbmlogo.png') }}" class="petbmlogo" alt="">
                 </svg>
                 <h3 class="logo-title d-none d-sm-block" data-setting="app_name">PetBright</h3>
              </a>
              
           </div>
           
           <div class="iq-search-bar device-search  position-relative">
              <form action="#" class="searchbox" data-bs-toggle="modal" data-bs-target="#searchmodal">
                 <a class="search-link d-none d-lg-block" href="javascript:void(0);">
                    <span class="material-symbols-outlined">search</span>
                 </a>
                 <input type="text" class="text search-input form-control bg-soft-primary  d-none d-lg-block"
                    placeholder="Search here...">
                 <a class="d-lg-none d-flex d-none d-lg-block" href="javascript:void(0);" data-bs-toggle="modal"
                    data-bs-target="#searchmodal">
                    <span class="material-symbols-outlined">search</span>
                 </a>
              </form>
              <div class="modal fade search-modal" id="searchmodal" aria-labelledby="searchmodalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-fullscreen-lg-down">
                    <div class="modal-content">
                       <div class="modal-header py-2">
                          <div class="d-flex align-items-center justify-content-between d-lg-none w-100">
                             <form action="#" class="searchbox w-50" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                <a class="search-link" href="javascript:void(0);">
                                   <span class="material-symbols-outlined">search</span>
                                </a>
                                <input type="text" class="text search-input form-control bg-soft-primary"
                                   placeholder="Search here...">
                             </form>
                             <a href="javascript:void(0);" class="material-symbols-outlined text-dark"
                                data-bs-dismiss="modal">close</a>
                          </div>
                          <div class="d-none d-lg-flex align-items-center justify-content-between w-100">
                             <h4 class="modal-title" id="exampleModalFullscreenLabel">Recent</h4>
                             <a class="text-dark" href="javascript:void(0);">Clear All</a>
                          </div>
                       </div>
                       <div class="modal-body p-0">
                          <div class="d-flex d-lg-none align-items-center justify-content-between w-100 p-3 pb-0">
                             <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Recent</h5>
                             <a href="javascript:void(0);" class="text-dark">Clear All</a>
                          </div>
                          <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                             <div class="flex-shrink-0">
                                <img src="images/page-img/19.jpg"
                                   class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                             </div>
                             <div class="d-flex flex-column ms-3 w-100">
                                <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                <span>Paige001</span>
                             </div>
                             <div class="d-flex align-items-center ms-auto">
                                <a href="javascript:void(0);" class="me-3 d-flex align-items-center"><small>Follow</small>
                                </a>
                                <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                             <div class="flex-shrink-0">
                                <img src="images/page-img/18.jpg"
                                   class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                             </div>
                             <div class="d-flex flex-column ms-3 w-100">
                                <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                <span>Carlo.m</span>
                             </div>
                             <div class="d-flex align-items-center ms-auto">
                                <a href="javascript:void(0);"
                                   class="me-3 d-flex align-items-center"><small>Unfollow</small> </a>
                                <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                             <div class="flex-shrink-0">
                                <img src="images/page-img/20.jpg"
                                   class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                             </div>
                             <div class="d-flex flex-column ms-3 w-100">
                                <a href="javascript:void(0);" class="h5">Paul Molive</a>
                                <span>Paul.45</span>
                             </div>
                             <div class="d-flex align-items-center ms-auto">
                                <a href="javascript:void(0);"
                                   class="me-3 d-flex align-items-center"><small>Request</small> </a>
                                <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                             </div>
                          </div>
                          <div class="">
                             <h4 class="px-3 py-2">Suggestions</h4>
                             <div class="suggestion-card px-3">
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/20.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Ammy Paul</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                </div>
                                <div class="text-center story ">
                                   <div class="story-profile">
                                      <img src="images/page-img/21.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roger Carlo</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                </div>
                                <div class="text-center story ">
                                   <div class="story-profile">
                                      <img src="images/page-img/22.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Justin
                                         Molive</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/23.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roy Fisher</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Request</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/24.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Johan Carlo</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/09.jpg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Medra Miles</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/pet2.jpeg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Aohan Paul</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Request</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/pet1.jpeg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Rokni Joy</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                </div>
                                <div class="text-center story">
                                   <div class="story-profile">
                                      <img src="images/page-img/01.jpeg" class=" avatar-50 rounded-pill"
                                         alt="#">
                                      <a href="javascript:void(0);"
                                         class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Sepid Ryan</a>
                                   </div>
                                   <a href="javascript:void(0);"
                                      class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <ul class="navbar-nav navbar-list">
              <li class="nav-item">
                 <a href="index.html" class="d-flex align-items-center">
                    <i class="material-symbols-outlined">home</i>
                 </a>
              </li>
              <li class="nav-item d-lg-none">
                 <div class="iq-search-bar device-search  position-relative">
                    <form action="#" class="searchbox" data-bs-toggle="modal" data-bs-target="#searchmodal">
                       <a class="search-link d-none d-lg-block" href="javascript:void(0);">
                          <span class="material-symbols-outlined">search</span>
                       </a>
                       <input type="text" class="text search-input form-control bg-soft-primary  d-none d-lg-block"
                          placeholder="Search here...">
                       <a class="d-lg-none d-flex" href="javascript:void(0);" data-bs-toggle="modal"
                          data-bs-target="#searchmodal">
                          <span class="material-symbols-outlined">search</span>
                       </a>
                    </form>
                    <div class="modal fade search-modal" id="searchmodal" aria-labelledby="searchmodalLabel" aria-hidden="true">
                       <div class="modal-dialog modal-fullscreen-lg-down">
                          <div class="modal-content">
                             <div class="modal-header py-2">
                                <div class="d-flex align-items-center justify-content-between d-lg-none w-100">
                                   <form action="#" class="searchbox w-50" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                      <a class="search-link" href="javascript:void(0);">
                                         <span class="material-symbols-outlined">search</span>
                                      </a>
                                      <input type="text" class="text search-input form-control bg-soft-primary"
                                         placeholder="Search here...">
                                   </form>
                                   <a href="javascript:void(0);" class="material-symbols-outlined text-dark"
                                      data-bs-dismiss="modal">close</a>
                                </div>
                                <div class="d-none d-lg-flex align-items-center justify-content-between w-100">
                                   <h4 class="modal-title" id="exampleModalFullscreenLabel">Recent</h4>
                                   <a class="text-dark" href="javascript:void(0);">Clear All</a>
                                </div>
                             </div>
                             <div class="modal-body p-0">
                                <div class="d-flex d-lg-none align-items-center justify-content-between w-100 p-3 pb-0">
                                   <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Recent</h5>
                                   <a href="javascript:void(0);" class="text-dark">Clear All</a>
                                </div>
                                <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                   <div class="flex-shrink-0">
                                      <img src="images/page-img/19.jpg"
                                         class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                   </div>
                                   <div class="d-flex flex-column ms-3 w-100">
                                      <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                      <span>Paige001</span>
                                   </div>
                                   <div class="d-flex align-items-center ms-auto">
                                      <a href="javascript:void(0);" class="me-3 d-flex align-items-center"><small>Follow</small>
                                      </a>
                                      <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                   <div class="flex-shrink-0">
                                      <img src="images/page-img/18.jpg"
                                         class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                   </div>
                                   <div class="d-flex flex-column ms-3 w-100">
                                      <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                      <span>Carlo.m</span>
                                   </div>
                                   <div class="d-flex align-items-center ms-auto">
                                      <a href="javascript:void(0);"
                                         class="me-3 d-flex align-items-center"><small>Unfollow</small> </a>
                                      <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                   <div class="flex-shrink-0">
                                      <img src="images/page-img/20.jpg"
                                         class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                   </div>
                                   <div class="d-flex flex-column ms-3 w-100">
                                      <a href="javascript:void(0);" class="h5">Paul Molive</a>
                                      <span>Paul.45</span>
                                   </div>
                                   <div class="d-flex align-items-center ms-auto">
                                      <a href="javascript:void(0);"
                                         class="me-3 d-flex align-items-center"><small>Request</small> </a>
                                      <a href="javascript:void(0);" class="material-symbols-outlined text-dark">close</a>
                                   </div>
                                </div>
                                <div class="">
                                   <h4 class="px-3 py-2">Suggestions</h4>
                                   <div class="suggestion-card px-3">
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/20.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Ammy Paul</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                      </div>
                                      <div class="text-center story ">
                                         <div class="story-profile">
                                            <img src="images/page-img/21.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roger Carlo</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                      </div>
                                      <div class="text-center story ">
                                         <div class="story-profile">
                                            <img src="images/page-img/22.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Justin
                                               Molive</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/23.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Roy Fisher</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Request</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/24.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Johan Carlo</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/09.jpg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Medra Miles</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/pet2.jpeg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Aohan Paul</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Request</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/pet1.jpeg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Rokni Joy</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Follow</small> </a>
                                      </div>
                                      <div class="text-center story">
                                         <div class="story-profile">
                                            <img src="images/page-img/01.jpeg" class=" avatar-50 rounded-pill"
                                               alt="#">
                                            <a href="javascript:void(0);"
                                               class="h6 mt-0 mt-lg-2 ms-3 ms-lg-0 text-ellipsis short-2 small">Sepid Ryan</a>
                                         </div>
                                         <a href="javascript:void(0);"
                                            class="d-lg-none align-items-center d-flex"><small>Unfollow</small> </a>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </li>
              <li class="nav-item dropdown">
                 <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" id="group-drop"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="material-symbols-outlined">group</span>
                 </a>
                 <div class="sub-drop sub-drop-large dropdown-menu " aria-labelledby="group-drop">
                    <div class="card shadow-none m-0">
                       <div class="card-header d-flex justify-content-between bg-primary">
                          <div class="header-title">
                             <h5 class="mb-0 text-white">Friend Request</h5>
                          </div>
                          <small class="badge  bg-light text-dark ">4</small>
                       </div>
                       <div class="card-body p-0">
                          <div class="iq-friend-request">
                             <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                   <img class="avatar-40 rounded" src="images/user/01.jpeg" alt=""
                                      loading="lazy">
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Jaques Amole</h6>
                                      <p class="mb-0">40 friends</p>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center">
                                   <a href="javascript:void(0);" class="me-3 btn btn-primary rounded">Confirm</a>
                                   <a href="javascript:void(0);" class="me-3 btn btn-secondary rounded">Delete Request</a>
                                </div>
                             </div>
                          </div>
                          <div class="iq-friend-request">
                             <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                   <img class="avatar-40 rounded" src="images/user/pet1.jpeg" alt=""
                                      loading="lazy">
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Lucy Tania</h6>
                                      <p class="mb-0">12 friends</p>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center">
                                   <a href="javascript:void(0);" class="me-3 btn btn-primary rounded">Confirm</a>
                                   <a href="javascript:void(0);" class="me-3 btn btn-secondary rounded">Delete Request</a>
                                </div>
                             </div>
                          </div>
                          <div class="iq-friend-request">
                             <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                   <img class="avatar-40 rounded" src="images/user/pet2.jpeg" alt=""
                                      loading="lazy">
                                   <div class=" ms-3">
                                      <h6 class="mb-0 ">Manny Petty</h6>
                                      <p class="mb-0">3 friends</p>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center">
                                   <a href="javascript:void(0);" class="me-3 btn btn-primary rounded">Confirm</a>
                                   <a href="javascript:void(0);" class="me-3 btn btn-secondary rounded">Delete Request</a>
                                </div>
                             </div>
                          </div>
                          <div class="iq-friend-request">
                             <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                   <img class="avatar-40 rounded" src="images/user/04.jpg" alt=""
                                      loading="lazy">
                                   <div class="ms-3">
                                      <h6 class="mb-0 ">Marsha Mello</h6>
                                      <p class="mb-0">15 friends</p>
                                   </div>
                                </div>
                                <div class="d-flex align-items-center">
                                   <a href="javascript:void(0);" class="me-3 btn btn-primary rounded">Confirm</a>
                                   <a href="javascript:void(0);" class="me-3 btn btn-secondary rounded">Delete Request</a>
                                </div>
                             </div>
                          </div>
                          <div class="text-center">
                             <a href="javascript:void(0);" class=" btn text-primary">View More Request</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </li>
              <li class="nav-item dropdown">
                 <a href="javascript:void(0);" class="search-toggle dropdown-toggle d-flex align-items-center"
                    id="notification-drop" data-bs-toggle="dropdown">
                    <i class="material-symbols-outlined">notifications</i>
                 </a>
                 <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                    <div class="card shadow-none m-0">
                       <div class="card-header d-flex justify-content-between bg-primary">
                          <div class="header-title bg-primary">
                             <h5 class="mb-0 text-white">All Notifications</h5>
                          </div>
                          <small class="badge  bg-light text-dark">4</small>
                       </div>
                       <div class="card-body p-0">
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/01.jpeg" alt="">
                                </div>
                                <div class="ms-3 w-100">
                                   <h6 class="mb-0 ">Emma Watson Bni</h6>
                                   <div class="d-flex justify-content-between align-items-center">
                                      <p class="mb-0">95 MB</p>
                                      <small class="float-right font-size-12">Just Now</small>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/pet1.jpeg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3 w-100">
                                   <h6 class="mb-0 ">New customer is join</h6>
                                   <div class="d-flex justify-content-between align-items-center">
                                      <p class="mb-0">Cyst Bni</p>
                                      <small class="float-right font-size-12">5 days ago</small>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/pet2.jpeg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3 w-100">
                                   <h6 class="mb-0 ">Two customer is left</h6>
                                   <div class="d-flex justify-content-between align-items-center">
                                      <p class="mb-0">Cyst Bni</p>
                                      <small class="float-right font-size-12">2 days ago</small>
                                   </div>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/04.jpg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="w-100 ms-3">
                                   <h6 class="mb-0 ">New Mail from Fenny</h6>
                                   <div class="d-flex justify-content-between align-items-center">
                                      <p class="mb-0">Cyst Bni</p>
                                      <small class="float-right font-size-12">3 days ago</small>
                                   </div>
                                </div>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
              </li>
              <li class="nav-item dropdown">
                 <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" id="mail-drop"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-symbols-outlined">mail</i>
                    <span class="mobile-text d-none ms-3">Message</span>
                 </a>
                 <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                    <div class="card shadow-none m-0">
                       <div class="card-header d-flex justify-content-between bg-primary">
                          <div class="header-title bg-primary">
                             <h5 class="mb-0 text-white">All Message</h5>
                          </div>
                          <small class="badge bg-light text-dark">4</small>
                       </div>
                       <div class="card-body p-0 ">
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex  align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/01.jpeg" alt=""
                                      loading="lazy">
                                </div>
                                <div class=" w-100 ms-3">
                                   <h6 class="mb-0 ">Bni Emma Watson</h6>
                                   <small class="float-left font-size-12">13 Jun</small>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/pet1.jpeg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3">
                                   <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                   <small class="float-left font-size-12">20 Apr</small>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/pet2.jpeg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3">
                                   <h6 class="mb-0 ">Why do we use it?</h6>
                                   <small class="float-left font-size-12">30 Jun</small>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/04.jpg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3">
                                   <h6 class="mb-0 ">Variations Passages</h6>
                                   <small class="float-left font-size-12">12 Sep</small>
                                </div>
                             </div>
                          </a>
                          <a href="javascript:void(0);" class="iq-sub-card">
                             <div class="d-flex align-items-center">
                                <div class="">
                                   <img class="avatar-40 rounded" src="images/user/05.jpg" alt=""
                                      loading="lazy">
                                </div>
                                <div class="ms-3">
                                   <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                   <small class="float-left font-size-12">5 Dec</small>
                                </div>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
              </li>
              <li class="nav-item d-none d-lg-none">
                 <a href="https://templates.iqonic.design/socialv/bs5/html/dist/app/chat.html" class="dropdown-toggle d-flex align-items-center" id="mail-drop-1"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-symbols-outlined">mail</i>
                    <span class="mobile-text  ms-3">Message</span>
                 </a>
              </li>
              <li class="nav-item dropdown user-dropdown">
                 <a href="javascript:void(0);" class="d-flex align-items-center dropdown-toggle" id="drop-down-arrow"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/user/1.jpg" class="img-fluid rounded-circle me-3" alt="user"
                       loading="lazy">
                    <div class="caption d-none d-lg-block">
                       <h6 class="mb-0 line-height">Bni Cyst</h6>
                    </div>
                 </a>
                 <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                    <div class="card shadow-none m-0">
                       <div class="card-header ">
                          <div class="header-title">
                             <h5 class="mb-0 ">Hello Bni Cyst</h5>
                          </div>
                       </div>
                       <div class="card-body p-0 ">
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <span class="material-symbols-outlined">
                                line_style
                             </span>
                             <div class="ms-3">
                                <a href="#" class="mb-0 h6">
                                   My Profile
                                </a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <span class="material-symbols-outlined">
                                edit_note
                             </span>
                             <div class="ms-3">
                                <a href="#" class="mb-0 h6">
                                   Edit Profile
                                </a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <span class="material-symbols-outlined">
                                manage_accounts
                             </span>
                             <div class="ms-3">
                                <a href="#" class="mb-0 h6">
                                   Account settings
                                </a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <span class="material-symbols-outlined">
                                lock
                             </span>
                             <div class="ms-3">
                                <a href="#" class="mb-0 h6">
                                   Privacy Settings
                                </a>
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card">
                             <span class="material-symbols-outlined">
                                login
                             </span>
                             <div class="ms-3">
                                <a href="#" class="mb-0 h6">
                                   Sign out
                                </a>
                             </div>
                          </div>
                          <div class=" iq-sub-card">
                             <h5>Chat Settings</h5>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <i class="material-symbols-outlined text-success md-14">
                                circle
                             </i>
                             <div class="ms-3">
                                Online
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <i class="material-symbols-outlined text-warning md-14">
                                circle
                             </i>
                             <div class="ms-3">
                                Away
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <i class="material-symbols-outlined text-danger md-14">
                                circle
                             </i>
                             <div class="ms-3">
                                Disconnected
                             </div>
                          </div>
                          <div class="d-flex align-items-center iq-sub-card border-0">
                             <i class="material-symbols-outlined text-gray md-14">
                                circle
                             </i>
                             <div class="ms-3">
                                Invisible
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </li>
           </ul>        
        </div>
     </nav>
  </div>  
  <aside class="sidebar sidebar-default sidebar-base navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
      <div class="sidebar-body pt-0 data-scrollbar">
          <div class="sidebar-list">
              <!-- Sidebar Menu Start -->
              <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Social</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="Social" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page"
                          href="{{ url('/') }}">
                          <i class="icon material-symbols-outlined">
                              newspaper
                          </i>
                          <span class="item-name">Newsfeed</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" 
                          aria-controls="profile">
                          <i class="icon material-symbols-outlined">
                              person
                          </i>
                          <span class="item-name">Profiles</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                     
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#friend-list" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              people
                          </i>
                          <span class="item-name">Friend</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="friend-list" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="#">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FL </i>
                                  <span class="item-name"> Friend List</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="#l">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FP </i>
                                  <span class="item-name">Friend Profile</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " aria-current="page"
                                  href="#">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FR </i>
                                  <span class="item-name">Friend Request</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="#">
                          <i class="icon material-symbols-outlined">
                              groups
                          </i>
                          <span class="item-name">Group</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="#">
                          <i class="icon material-symbols-outlined">
                              notifications
                          </i>
                          <span class="item-name">Notification</span>
                      </a>
                  </li>
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Featured</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="Social" data-bs-placement="right">-</span>
                      </a>
                  </li>
                 
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="#" target="_blank">
                          <i class="icon material-symbols-outlined">
                              message
                          </i>
                          <span class="item-name">Chat</span>
                      </a>
                  </li>
                 
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="#">
                          <i class="icon material-symbols-outlined">
                              calendar_month
                          </i>
                          <span class="item-name">Calendar</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page"
                          href="#">
                          <i class="icon material-symbols-outlined">
                              cake
                          </i>
                          <span class="item-name">Birthday</span>
                      </a>
                  </li>
                  
                  
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#store" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              storefront
                          </i>
                          <span class="item-name">Store</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="store" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="store-category-grid.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> CG </i>
                                  <span class="item-name">Category Grid</span>
                              </a>
                          </li>
                          
                          
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="store-checkout.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Checkout</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#mail" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              mail_outline
                          </i>
                          <span class="item-name">Mail</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="mail" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link " href="https://templates.iqonic.design/socialv/bs5/html/dist/app/email.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Inbox</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="https://templates.iqonic.design/socialv/bs5/html/dist/app/email-compose.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> E </i>
                                  <span class="item-name">Email Compose</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false"
                          aria-controls="sidebar-special">
                          <i class="icon material-symbols-outlined">
                              assignment
                          </i>
                          <span class="item-name">Special Pages</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-timeline.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T </i>
                                  <span class="item-name">Timeline</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-invoice.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Invoice</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-pricing.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Pricing 1</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-pricing-one.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P </i>
                                  <span class="item-name">Pricing 2</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-faq.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> F </i>
                                  <span class="item-name">Faq</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false"
                          aria-controls="sidebar-auth">
                          <i class="icon material-symbols-outlined">
                              library_books
                          </i>
                          <span class="item-name">Auth</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="sign-in.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Login</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="sign-up.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Register</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-recoverpw.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Recover Password</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-confirm-mail.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Confirm Mail</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-lock-screen.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Lock Screen</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false"
                          aria-controls="utilities-error">
                          <i class="icon material-symbols-outlined">
                              turned_in_not
                          </i>
                          <span class="item-name">Utilities</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-error.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Error 404</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-error-500.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Error 500</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="pages-maintenance.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <span class="item-name">Maintence</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link "
                          href="blank-page.html">
                          <i class="icon material-symbols-outlined">
                              check_box_outline_blank
                          </i>
                          <span class="item-name">Blank Page</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="admin.html">
                          <i class="icon material-symbols-outlined">
                              admin_panel_settings
                          </i>
                          <span class="item-name">Admin</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link "
                          href="pages-comingsoon.html">
                          <i class="icon material-symbols-outlined">
                              fiber_smart_record
                          </i>
                          <span class="item-name">Pages Comingsoon</span>
                      </a>
                  </li>
                  <li class="nav-item static-item">
                      <a class="nav-link static-item disabled" href="#" tabindex="-1">
                          <span class="default-icon">Elements</span>
                          <span class="mini-icon" data-bs-toggle="tooltip" title="elements" data-bs-placement="right">-</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui-kit" role="button" aria-expanded="false"
                          aria-controls="ui-kit">
                          <i class="icon material-symbols-outlined">
                              adjust
                          </i>
                          <span class="item-name">Ui Elements</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="ui-kit" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-color.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> U </i>
                                  <span class="item-name">Ui Color</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-typography.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T </i>
                                  <span class="item-name">Typography</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-alerts.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> A </i>
                                  <span class="item-name">Alerts</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-badges.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Badges</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-breadcrumb.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Breadcrumb</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-buttons.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Buttons</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-cards.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Cards</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-carousel.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> C </i>
                                  <span class="item-name">Carousel</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-embed-video.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> V </i>
                                  <span class="item-name">Video</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-grid.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> G </i>
                                  <span class="item-name">Grid</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-images.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> I </i>
                                  <span class="item-name">Images</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-list-group.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> L </i>
                                  <span class="item-name">list Group</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-modal.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Modal</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-notifications.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> N</i>
                                  <span class="item-name">Notifications</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-pagination.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Pagination</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-popovers.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Popovers</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-progressbars.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> P</i>
                                  <span class="item-name">Progressbars</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-tabs.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T</i>
                                  <span class="item-name">Tabs</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-tooltips.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> T</i>
                                  <span class="item-name">Tooltips</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="ui-offcanvas.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon">O</i>
                                  <span class="item-name">Offcanvas</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-wizard" role="button" aria-expanded="false"
                          aria-controls="sidebar-wizard">
                          <i class="icon material-symbols-outlined">
                              text_snippet
                          </i>
                          <span class="item-name">Forms Wizard</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-wizard" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-wizard.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> SW </i>
                                  <span class="item-name">Simple Wizard</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-wizard-validate.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> VW </i>
                                  <span class="item-name">Validate Wizard</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-wizard-vertical.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> VW </i>
                                  <span class="item-name">Vertical Wizard</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false"
                          aria-controls="sidebar-table">
                          <i class="icon material-symbols-outlined">
                              table_chart
                          </i>
                          <span class="item-name">Table</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="tables-basic.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> BT </i>
                                  <span class="item-name">Basic Tables</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="data-table.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> D </i>
                                  <span class="item-name">Data Table</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="table-editable.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> E </i>
                                  <span class="item-name">Editable Table</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false"
                          aria-controls="sidebar-form">
                          <i class="icon material-symbols-outlined">
                              view_timeline
                          </i>
                          <span class="item-name">Form</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-layout.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FE </i>
                                  <span class="item-name">Form Elements</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-validation.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FV</i>
                                  <span class="item-name">Form Validation</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-switch.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FS </i>
                                  <span class="item-name">Form Switch</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-chechbox.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FC</i>
                                  <span class="item-name">Form Checkbox</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="form-radio.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> FR</i>
                                  <span class="item-name">Form Radio</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item mb-4">
                      <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false"
                          aria-controls="sidebar-icons">
                          <i class="icon material-symbols-outlined">
                              error_outline
                          </i>
                          <span class="item-name">Icons</span>
                          <i class="right-icon material-symbols-outlined">chevron_right</i>
                      </a>
                      <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar-menu">
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="icon-fontawesome-5.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> F </i>
                                  <span class="item-name">Font Awesome 5</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="icon-lineawesome.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> L </i>
                                  <span class="item-name">Line Awesome</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="icon-remixicon.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> R </i>
                                  <span class="item-name">Remixicon</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link "
                                  href="icon-material.html">
                                  <i class="icon material-symbols-outlined filled">
                                      fiber_manual_record
                                  </i>
                                  <i class="sidenav-mini-icon"> M </i>
                                  <span class="item-name">Material</span>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
              <!-- Sidebar Menu End -->        </div>
      </div>
      <div class="sidebar-footer"></div>
  </aside>
      <div>
    <div class="position-relative">
    </div>
    <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-lg-8 row m-0 p-0">
         <div class="col-sm-12">
            <div id="post-modal-data" class="card card-block card-stretch card-height">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Create Post</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="user-img">
                        <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle" loading="lazy">
                     </div>
                     <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                        <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                     </form>
                  </div>
                  <hr>
                  <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                     <li class="me-3 mb-md-0 mb-2">
                        <a href="#" class="btn btn-soft-primary">
                        <img src="images/small/07.png" alt="icon" class="img-fluid me-2" loading="lazy"> Photo/Video
                        </a>
                     </li>
                     <li class="me-3 mb-md-0 mb-2">
                        <a href="#" class="btn btn-soft-primary">
                        <img src="images/small/08.png" alt="icon" class="img-fluid me-2" loading="lazy"> Tag Friend
                        </a>
                     </li>
                     <li class="me-3">
                        <a href="#" class="btn btn-soft-primary">
                        <img src="images/small/09.png" alt="icon" class="img-fluid me-2" loading="lazy"> Feeling/Activity
                        </a>
                     </li>
                     <li>
                        <div class="btn btn-soft-primary">
                           <div class="card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <div class="dropdown-toggle lh-1" id="post-option"   data-bs-toggle="dropdown">
                                    <span class="material-symbols-outlined">
                                    more_horiz
                                    </span>
                                 </div>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                  <div class="modal-dialog   modal-fullscreen-sm-down">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                           <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                              <span class="material-symbols-outlined">close</span>
                           </a>
                        </div>
                        <div class="modal-body">
                           <div class="d-flex align-items-center">
                              <div class="user-img">
                                 <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <form class="post-text ms-3 w-100" action="javascript:void();">
                                 <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                              </form>
                           </div>
                           <hr>
                           <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/07.png" alt="icon" class="img-fluid" loading="lazy"> Photo/Video</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/08.png" alt="icon" class="img-fluid" loading="lazy"> Tag Friend</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/09.png" alt="icon" class="img-fluid" loading="lazy"> Feeling/Activity</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/10.png" alt="icon" class="img-fluid" loading="lazy"> Check in</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/11.png" alt="icon" class="img-fluid" loading="lazy"> Live Video</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/12.png" alt="icon" class="img-fluid" loading="lazy"> Gif</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/13.png" alt="icon" class="img-fluid" loading="lazy"> Watch Party</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/14.png" alt="icon" class="img-fluid" loading="lazy"> Play with Friends</div>
                              </li>
                           </ul>
                           <hr>
                           <div class="other-option">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <div class="user-img me-3">
                                       <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                    </div>
                                    <h6>Your Story</h6>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                       <span class="btn btn-primary">Friend</span>
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   save
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Public</h6>
                                                   <p class="mb-0">Anyone on or off Facebook</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   cancel
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Friends</h6>
                                                   <p class="mb-0">Your Friend on facebook</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                               <span class="material-symbols-outlined">
                                                person_remove
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Friends except</h6>
                                                   <p class="mb-0">Don't show to some friends</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   notifications
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Only Me</h6>
                                                   <p class="mb-0">Only me</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/01.jpeg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                                 <span class="mb-0 d-inline-block">Add New Post</span>
                                 <p class="mb-0 text-primary">Just Now</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                       more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                                   person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                        <div class="row-span-2 row-span-md-1">
                           <img src="images/page-img/p2.jpg" alt="post-image" class="img-fluid rounded w-100" loading="lazy">
                        </div>
                        <div class="row-span-1">
                           <img src="images/page-img/pet4.webp" alt="post-image" class="img-fluid rounded w-100" loading="lazy">
                        </div>
                        <div class="row-span-1 ">
                           <img src="images/page-img/pet4.webp" alt="post-image" class="img-fluid rounded w-100" loading="lazy">
                        </div>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt="" loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" class="d-flex align-items-center">
                           <span class="material-symbols-outlined md-18">
                           share
                           </span>
                           <span class="ms-1">99 Share</span></a>                           
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/pet1.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/pet2.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                           insert_link
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           sentiment_satisfied
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           photo_camera
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/pet2.jpeg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class="d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Barb Ackue</h5>
                                 <span class="mb-0 d-inline-block">Added New Image in a Post</span>
                                 <p class="mb-0 text-primary">1 hour ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" id="postdata-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <a href="javascript:void(0);"><img src="images/page-img/pet7.webp" alt="post-image" class="img-fluid rounded w-100" loading="lazy"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt="" loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" class="d-flex align-items-center"><span class="material-symbols-outlined md-18">
                           share
                           </span>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/pet1.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/pet2.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex align-items-center">
                           <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                           insert_link
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           sentiment_satisfied
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           photo_camera
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/04.jpg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class=" d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Ira Membrit</h5>
                                 <p class="mb-0 d-inline-block">Update her Status</p>
                                 <p class="mb-0 text-primary">6 hour ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt="" loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" class="d-flex align-items-center">
                           <span class="material-symbols-outlined md-18">
                           share
                           </span>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/pet1.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/pet2.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                           insert_link
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           sentiment_satisfied
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           photo_camera
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="post-item">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid avatar-60" src="images/user/1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Bni Cyst</h5>
                                 <p class="ms-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                 <p class="mb-0">3 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                       more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-post text-center">
                     <a href="javascript:void(0);"><img src="images/page-img/pet5.jpg" alt="post-image" class="img-fluid rounded w-100 mt-3" loading="lazy"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt="" loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" class="d-flex align-items-center"><span class="material-symbols-outlined md-18">
                           share
                           </span>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/pet1.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/pet2.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex align-items-center">
                           <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                           insert_link
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           sentiment_satisfied
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           photo_camera
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/pet1.jpeg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                                 <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                 <p class="mb-0 text-primary">1 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Save Post</h6>
                                                <p class="mb-0">Add this to your saved items</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Hide Post</h6>
                                                <p class="mb-0">See fewer posts like this.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Unfollow User</h6>
                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Notifications</h6>
                                                <p class="mb-0">Turn on notifications for this post</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class="ratio ratio-16x9">
                        <iframe  src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                    <div class="dropdown-menu py-2">
                                       <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="images/icon/01.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="images/icon/02.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="images/icon/03.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="images/icon/05.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="images/icon/06.png" class="img-fluid" alt="" loading="lazy"></a>
                                       <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt="" loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#">Max Emum</a>
                                       <a class="dropdown-item" href="#">Bill Yerds</a>
                                       <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                       <a class="dropdown-item" href="#">Tara Misu</a>
                                       <a class="dropdown-item" href="#">Midge Itz</a>
                                       <a class="dropdown-item" href="#">Sal Vidge</a>
                                       <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Max Emum</a>
                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                    <a class="dropdown-item" href="#">Other</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                           <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" class="d-flex align-items-center"><span class="material-symbols-outlined md-18">
                           share
                           </span>
                           <span class="ms-1">99 Share</span></a>
                        </div>
                     </div>
                     <hr>
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex flex-wrap">
                              <div class="user-img">
                                 <img src="images/user/pet1.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex flex-wrap">
                              <div class="user-img">
                                 <img src="images/user/pet2.jpeg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void(0);">like</a>
                                    <a href="javascript:void(0);">reply</a>
                                    <a href="javascript:void(0);">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                        <div class="comment-attagement d-flex align-items-center">
                           <a href="javascript:void(0);" class="material-symbols-outlined me-3 link">
                           insert_link
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           sentiment_satisfied
                           </a>
                           <a href="javascript:void(0);" class="material-symbols-outlined  me-3">
                           photo_camera
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Stories</h4>
               </div>
            </div>
            <div class="card-body">
               <ul class="media-story list-inline m-0 p-0">
                  <li class="d-flex mb-3 align-items-center">
                     <i class="material-symbols-outlined">
                     add
                     </i>
                     <div class="stories-data ms-3">
                        <h5>Creat Your Story</h5>
                        <p class="mb-0">time to story</p>
                     </div>
                  </li>
                  <li class="d-flex mb-3 align-items-center active">
                     <img src="images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid">
                     <div class="stories-data ms-3">
                        <h5>Anna Mull</h5>
                        <p class="mb-0">1 hour ago</p>
                     </div>
                  </li>
                  <li class="d-flex mb-3 align-items-center">
                     <img src="images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid">
                     <div class="stories-data ms-3">
                        <h5>Ira Membrit</h5>
                        <p class="mb-0">4 hour ago</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <img src="images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid">
                     <div class="stories-data ms-3">
                        <h5>Bob Frapples</h5>
                        <p class="mb-0">9 hour ago</p>
                     </div>
                  </li>
               </ul>
               <a href="#" class="btn btn-primary d-block mt-3">See All</a>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Events</h4>
               </div>
               <div class="card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                     <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <span class="material-symbols-outlined">
                        more_horiz
                        </span>
                     </div>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        visibility
                        </span>View</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        delete
                        </span>Delete</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        edit
                        </span>Edit</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        print
                        </span>Print</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        file_download
                        </span>Download</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <ul class="media-story list-inline m-0 p-0">
                  <li class="d-flex mb-4 align-items-center ">
                     <img src="images/page-img/s4.jpg" alt="story-img" class="rounded-circle img-fluid" loading="lazy">
                     <div class="stories-data ms-3">
                        <h5>Web Workshop</h5>
                        <p class="mb-0">1 hour ago</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <img src="images/page-img/s5.jpg" alt="story-img" class="rounded-circle img-fluid" loading="lazy">
                     <div class="stories-data ms-3">
                        <h5>Fun Events and Festivals</h5>
                        <p class="mb-0">1 hour ago</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Upcoming Birthday</h4>
               </div>
            </div>
            <div class="card-body">
               <ul class="media-story list-inline m-0 p-0">
                  <li class="d-flex mb-4 align-items-center">
                     <img src="images/user/01.jpeg" alt="story-img" class="rounded-circle img-fluid" loading="lazy">
                     <div class="stories-data ms-3">
                        <h5>Anna Sthesia</h5>
                        <p class="mb-0">Today</p>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <img src="images/user/pet1.jpeg" alt="story-img" class="rounded-circle img-fluid" loading="lazy">
                     <div class="stories-data ms-3">
                        <h5>Paul Molive</h5>
                        <p class="mb-0">Tomorrow</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Suggested Pages</h4>
               </div>
               <div class="card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                     <div class="dropdown-toggle" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <span class="material-symbols-outlined">
                        more_horiz
                        </span>
                     </div>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        visibility
                        </span>View</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        delete
                        </span>Delete</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        edit
                        </span>Edit</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        print
                        </span>Print</a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><span class="material-symbols-outlined me-2 md-18">
                        file_download
                        </span>Download</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <ul class="suggested-page-story m-0 p-0 list-inline">
                  <li class="mb-3">
                     <div class="d-flex align-items-center mb-3">
                        <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50" loading="lazy">
                        <div class="stories-data ms-3">
                           <h5>Iqonic Studio</h5>
                           <p class="mb-0">Lorem Ipsum</p>
                        </div>
                     </div>
                     <img src="images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image" loading="lazy">
                     <div class="mt-3"><a href="#" class=" d-flex align-items-center justify-content-center"><span class="material-symbols-outlined me-2 md-18">
                        thumb_up
                        </span> Like Page</a>
                     </div>
                  </li>
                  <li class="">
                     <div class="d-flex align-items-center mb-3">
                        <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50" loading="lazy">
                        <div class="stories-data ms-3">
                           <h5>Cakes & Bakes </h5>
                           <p class="mb-0">Lorem Ipsum</p>
                        </div>
                     </div>
                     <img src="images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                     <div class="mt-3"><a href="#" class=" d-flex align-items-center justify-content-center"><span class="material-symbols-outlined me-2 md-18">
                        thumb_up
                        </span> Like Page</a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-sm-12 text-center">
         <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;" loading="lazy">
      </div>
   </div>
</div>
    </div>
  </div>
  <!-- Wrapper End-->
  <!-- offcanvas start -->
  <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
         <div class="card shadow-none">
            <div class="card-body p-0">
               <div class="media-height p-3" data-scrollbar="init">
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/01.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Sthesia</h6>
                        <p class="mb-0">Just Now</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/pet1.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paul Molive</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/pet2.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Anna Mull</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/04.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Paige Turner</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/11.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Bob Frapples</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/pet1.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Barb Ackue</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="images/user/pet2.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Greta Life</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="images/user/12.jpg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Ira Membrit</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center mb-4">
                     <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="images/user/01.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Pete Sariya</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="iq-profile-avatar">
                        <img class="rounded-circle avatar-50" src="images/user/pet1.jpeg" alt="" loading="lazy">
                     </div>
                     <div class="ms-3">
                        <h6 class="mb-0">Monty Carlo</h6>
                        <p class="mb-0">Admin</p>
                     </div>
                  </div>
               </div>
                 <div class="right-sidebar-toggle bg-primary text-white mt-3 d-flex">
                    <span class="material-symbols-outlined">chat</span>
                 </div>
            </div>
         </div>
      </div>
   </div>  



@endsection