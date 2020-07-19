@extends('layouts.appbarphoto')

@section('content')
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="container mt-8">
                                        <div class="row d-flex justify-content-center">
                                           
                                            <div class="col-md-6">
                                            
                                                <div class="card p-4 py-5">
                                                    <h2>{{ isset($demande) ?"modifier une demande" : "AJOUTER une demande" }} </h2>
                                                <form action="{{ isset($demande) ? 
                                                    route('demande.update',$demande->id)
                                                    : route('demande.store')}}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">Adresse</label>
                                                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ isset($demande) ? $demande['adresse']:null  }}">
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="formGroupExampleInput">description</label>
                                                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ isset($demande) ? $demande['description']:null  }}"> 
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="formGroupExampleInput">Telephone</label>
                                                                <input type="text" name="telephone" class="form-control" placeholder="telephone" value="{{ isset($demande) ? $demande['telephone']:null  }}">
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="formGroupExampleInput">Budjet Max</label>
                                                                <input type="text" name="budjet_max" class="form-control" placeholder="Budjet Max" value="{{ isset($demande) ? $demande['budget_max']:null  }} ">
                                                              </div>
                                                          
                                                         
                                                          
                                                   
                                                    <div class="form-check form-switch mt-3"> 
                                                    <div class="mt-4"> 
                                                        
                                                        <button class="btn btn-danger button btn-block">{{ isset($demande) ?"MODIFIER LA DEMANDE":"Ajouter demande"  }}</button> </div>
                                                    </form>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
<style>

body {
    background-color: #4763a7
}

.card {
    border-radius: 8px;
    border: none
}

.signin-link {
    color: #db0a5b;
    font-weight: 600
}

.signin-link:hover {
    color: #b90b4f
}

.form-control {
    margin-top: 13px;
    height: 49px !important
}

.form-control:focus {
    box-shadow: none;
    border: 1px solid #db0a5b
}

.form-check-input {
    border: 1px solid #F44336
}
.container-bg {
    background:#53F0E3;
}

.form-check-input:checked {
    background-color: #F44336;
    border-color: #F44336
}

.form-check-input:focus {
    border-color: #e10a5b;
    outline: 0;
    box-shadow: none
}

.button {
    height: 40px;
    border-radius: 4px
}
</style>