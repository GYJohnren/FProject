<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.html" style="font-size: 40px; font-weight: 800; color: #797703;"><img width="250" src="../../logowhite.png" alt="" />Mangan</a>


                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Cart</a>

                        <li class="nav-item">
                        <a class="nav-link" href="product.html">Products</a>
                           
                        </li>
                       

                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                            <x-app-layout>

                            </x-app-layout>
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

                        @endif
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>