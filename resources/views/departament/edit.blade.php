@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
      <!-- /.content-header -->
      <div class="container">
          <form method="post" enctype="multipart/form-data" action="{{ url('departament/update/'.$departament->id)}}" autocomplete="on">
                 @csrf
                 @method('put')


                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Название подразделения') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('name') }}"
                                            value="{{ $departament->name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>
                     
                 <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Обновить') }}</button>
                     <div class="clearfix"></div>              
         </form>
     </div>
    </div>
@endsection