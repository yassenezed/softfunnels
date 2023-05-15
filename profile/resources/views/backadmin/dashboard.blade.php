<!DOCTYPE html>
<html lang="en">

<head>
   @include('partials.css')
</head>

<body>
@include('partials.navbar');
<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            @php
                            if (auth()->user()->role === 'admin') {
                                $landingpages = \App\Models\Landingpage::all();
                            } else {
                                $user_id = session()->get('user_id');
                                $user = \App\Models\User::where('email', $user_id)->first();
                                $landingpages = \App\Models\Landingpage::where('user_id', $user->id)->get();
                            }
                        
                            // Retrieve the forms related to each landing page ID
                            $forms = collect();
                            $totalVisits = 0;
                            foreach ($landingpages as $landingpage) {
                                $totalVisits += $landingpage->visitors;
                            }
                             @endphp
                        

                            <div class="ms-3">
                                <p class="mb-2">Total des Visites</p>
                                <h6 class="mb-0">{{ $totalVisits }} Visites</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                                @php
                                    $user_id = session()->get('user_id');
                                    $user = \App\Models\User::where('email', $user_id)->first();
                                    if($user->role === 'admin') {
                                        // Retrieve all forms created today
                                        $forms = \App\Models\Form::whereDate('created_at', \Carbon\Carbon::today())
                                                                ->get();

                                        // Calculate the total sales
                                        $totalSales = 0;
                                        foreach ($forms as $form) {
                                            $price = $form->landingpage->price;
                                            $totalSales += $price;
                                        }
                                    } else {
                                        // Retrieve the landing pages of the user
                                        $landingpages = \App\Models\Landingpage::where('user_id', $user->id)->get();

                                        // Retrieve the forms related to each landing page ID of the user and created today
                                        $forms = collect();
                                        foreach ($landingpages as $landingpage) {
                                            $landingpage_id = $landingpage->id;
                                            $landingpage_price = $landingpage->price;
                                            $forms = $forms->merge(\App\Models\Form::where('landing_page_id', $landingpage_id)
                                                ->whereDate('created_at', \Carbon\Carbon::today()) // filter forms created today
                                                ->get());
                                        }

                                        // Calculate the total sales
                                        $totalSales = 0;
                                        foreach ($forms as $form) {
                                            $price = $form->landingpage->price;
                                            $totalSales += $price;
                                        }
                                    }
                                @endphp

                            <div class="ms-3">
                                <p class="mb-2">Revenue Du Jour</p>
                                <h6 class="mb-0">{{$totalSales}} MAD</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            @php
                                            $user_id = session()->get('user_id');
                                            $user = \App\Models\User::where('email', $user_id)->first();
                                            $role = $user->role;

                                            if ($role === 'admin') {
                                                $forms = \App\Models\Form::orderByDesc('id')->paginate(10);
                                            } else {
                                                // Get the landing pages of the user
                                                $user_id = session()->get('user_id');
                                                $user = \App\Models\User::where('email', $user_id)->first();
                                                $landingpages = \App\Models\Landingpage::where('user_id', $user->id)->get();
                                                
                                                // Retrieve the forms related to each landing page ID of the user
                                                $forms = collect();
                                                foreach ($landingpages as $landingpage) {
                                                    $landingpage_id = $landingpage->id;
                                                    $forms = $forms->merge(\App\Models\Form::where('landing_page_id', $landingpage_id)->get());
                                                }
                                            }

                                            // Calculate the total sales
                                            $totalSales = 0;
                                            foreach ($forms as $form) {
                                                $price = $form->landingpage->price;
                                                $totalSales += $price;
                                            }
                                @endphp

                                <div class="ms-3">
                                    <p class="mb-2">Total des Ventes</p>
                                    <h6 class="mb-0">{{ $totalSales }} MAD</h6>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            {{-- <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End --> --}}


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Commande Recentes</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            @php
                            $user_id = session()->get('user_id');
                            $user = \App\Models\User::where('email', $user_id)->first();
                        
                            if ($user->role === 'admin') {
                                $forms = \App\Models\Form::orderByDesc('id')->paginate(10);
                            } else {
                                $landingpages = \App\Models\Landingpage::where('user_id', $user->id)->get();
                                $forms = collect();
                                foreach ($landingpages as $landingpage) {
                                    $landingpage_id = $landingpage->id;
                                    $forms = $forms->merge(\App\Models\Form::where('landing_page_id', $landingpage_id)->get());
                                }
                                $forms = $forms->sortByDesc('id');
                            }
                        
                            // Calculate the total sales
                            $totalSales = 0;
                            foreach ($forms as $form) {
                                $price = $form->landingpage->price;
                                $totalSales += $price;
                            }
                        @endphp
                        
                           
                                <tr>
                                    <th>ID</th>
                                    <th>Landing Page ID</th>
                                    <th>Nom complet</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Entreprise</th>
                                    <th>Adresse</th>
                                    <th>Notes</th>
                                    <th>Total</th>
                            
                                </tr>
                                @foreach($forms as $form)
                                <tr>
                                    <td>{{ $form->id }}</td>
                                    <td>{{ $form->landingpage->titre }}</td>
                                    <td>{{ $form->fullname }}</td>
                                    <td>{{ $form->email }}</td>
                                    <td>{{ $form->phone }}</td>
                                    <td>{{ $form->company }}</td>
                                    <td>{{ $form->adress }}</td>
                                    <td>{{ $form->notes }}</td>
                                    <td>{{ $form->landingpage->price}}</td>
                            
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

{{-- 
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End --> --}}
@include('partials.newfooter');
@include('partials.js')
</body>

</html>