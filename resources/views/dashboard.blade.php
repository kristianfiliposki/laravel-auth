@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                        {{--    {{ __('sei loggato') }}  --}}       
                        <ul>
                            @foreach ($projects as $project)
                            <li>
                                 <div class="box">
                                    <div>
                                        <h5>titolo del progetto</h5>
                                        <div class="info">
                                            {{$project->name}}
                                        </div>
                                    </div>

                                    <div>
                                        <h5>costo totale del progetto</h5>
                                        <div class="info">
                                            {{$project->cost}}€
                                        </div>
                                    </div>

                                     <div>
                                         <h5>pagine totali del progetto</h5>
                                         <div class="info">
                                             {{$project->pages}}
                                         </div>
                                     </div>

                                     <div>
                                         <h5>descriozione del progetto</h5>
                                         <div class="info">
                                             {{$project->description}}
                                         </div>
                                     </div>

                                     <div>
                                         <h5>lingua del progetto</h5>
                                         <div class="info">
                                             {{$project->lingua}}
                                         </div>
                                     </div>

                                 </div>
                            </li>
                             @endforeach
                             </ul>                 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style>
        .box{
            font-size: 0.5em;
            display: flex;
            justify-content: space-around;
            background: rgb(216, 216, 216);
            border: 1px solid black;
            border-radius: 12px;
            margin: 2em;
            padding: 1rem;
        }
        .info{
            font-size: 1.5rem;
        }
    </style>
@endsection
