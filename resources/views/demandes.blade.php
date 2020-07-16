@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id user </th>
                <th scope="col">ADRESSE </th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">BUDJET MAX</th>
                <th scope="col">DESCRIPTION</th>
                <th>delete</th>
                <th>update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($demandes as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$item['adresse']}}</td>
                    <td>{{$item['telephone']}}</td>
                    <td>{{$item['budget_max']}}</td>
                    <td>{{$item['description']}}</td>
                <td><form action="{{route('demande.delete',$item['id'])}}" method="POST">
                    @csrf
                   
                <button>
                    Delete
                </button>
                </form>
                    </td>
                    
                    <td><form action="{{route('demande.edit',$item)}}" method="POST">
                        @csrf
                       
                    <button>
                        update
                    </button>
                    </form>
                        </td>

                  </tr>
                @endforeach
                <?php 
                print_r($demandes);
                ?>
            </tbody>
            </table>
    </div>
</div>
@endsection


