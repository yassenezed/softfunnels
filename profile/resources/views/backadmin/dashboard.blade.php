<!DOCTYPE html>
<html lang="en">

<head>
   @include('partials.css')
</head>

<body>
@include('partials.navbar')

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
                                $user = auth()->user();
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
                                        $user = auth()->user();
                                    
                                        use Carbon\Carbon;

                                        $today = Carbon::today();

                                        if ($user->role == 'admin') {
                                            $forms = \App\Models\Form::whereDate('created_at', $today)->count();
                                        } else {
                                            $landingPages = \App\Models\Landingpage::where('user_id', $user->id)->get();
                                            $landingPageIds = $landingPages->pluck('id')->toArray();
                                            $forms = \App\Models\Form::whereIn('landing_page_id', $landingPageIds)
                                                                    ->whereDate('created_at', $today)
                                                                    ->count();
                                        }

                                    
                                @endphp

                            <div class="ms-3">
                                <p class="mb-2">Total Du Jour (Estimé)</p>
                                <h6 class="mb-0">{{$forms}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            @php

                                    $user = auth()->user();
                                    // dd($user->role);
                                    if($user->role == 'admin')
                                    {
                                        $forms = \App\Models\Form::count();

                                    }else{
                                    $landingPages = \App\Models\Landingpage::where('user_id', $user->id)->get();
                                    $landingPageIds = $landingPages->pluck('id')->toArray();
                                    $forms = \App\Models\Form::whereIn('landing_page_id', $landingPageIds)->count();
                                    // dd($forms);
                                }

                            @endphp

                                <div class="ms-3">
                                    <p class="mb-2">Total des Formulaires</p>
                                    <h6 class="mb-0">{{ $forms }} </h6>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Formulaires Recentes</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            @php
                            $user = auth()->user();
                            if ($user->role === 'admin') {
                                $forms = \App\Models\Form::orderBy('id', 'desc')->paginate(100);
                            } else {
                                $landingpages = $user->landingpage()->with([ 'forms' => function ($q)
                                {
                                    $q->orderBy('id', 'desc')->limit(100);
                                } ])->get();
                                // dd($landingpages);
                                // $forms = collect();
                                // foreach ($landingpages as $landingpage) {
                                //     $landingpage_id = $landingpage->id;
                                //     $forms = $forms->merge(\App\Models\Form::where('landing_page_id', $landingpage_id)->get());
                                // }
                                // $forms = $forms->sortByDesc('id');
                            }
                            @endphp
                        
                           
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Page</th>
                            <th>Etat</th>

                        </tr>
                        
                            @foreach($landingpages as $landingpage)
                                @foreach($landingpage->forms as $form)
                                <tr>
                                    <td>{{ $form->id }}</td>
                                    <td>{{ $form->fullname }}</td>
                                    <td>{{ $form->email }}</td>
                                    <td>{{ $form->phone }}</td>
                                    <td>{{ $form->landingpage->titre }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($form->state, 9) }}</td>
                            
                                </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
          
@include('partials.newfooter');
@include('partials.js')
</body>

</html>