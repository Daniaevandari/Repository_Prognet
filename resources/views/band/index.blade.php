@extends('layouts.app')

@section('title','Band')

@section('page-title','Band')

@section('dashboard-content')
    <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn btn-primary">Tambah</button>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Vocalist</th>
            <th>Genre</th>
            <th>Since</th>
            <th>Action</th>
        </tr>
        @foreach($bands as $band)
        <tr>
            <td>{{$band->name}}</td>
            <td>{{$band->vocalist}}</td>
            <td>{{$band->genre}}</td>
            <td>{{$band->since}}</td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Modal -->
<div class="modal" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Band</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/band" method="post" >
        {{csrf_field()}}
            <div class="form-group">
                <label >Nama Band</label>
                <input type="text" class="form-control" name="nama" placeholder="Enter Nama Band">
            </div>

            <div class="form-group">
                <label >Vocalist</label>
                <input type="text" class="form-control" name="vocalist" placeholder="Enter Vocalist">
            </div>

            <div class="form-group">
                <label >Genre</label>
                <input type="text" class="form-control" name="genre" placeholder="Enter Genre">
            </div>

            <div class="form-group">
                <label >Since</label>
                <input type="text" class="form-control" name="since" placeholder="Enter Since">
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
    
@endsection
