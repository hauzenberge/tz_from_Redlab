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
          <form method="staff" enctype="multipart/form-data" action="{{ url('staff/update/'.$staff->id)}}" autocomplete="on">
                 @csrf
                 @method('put')

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Имя') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('name') }}"
                                            value="{{ $staff->name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>
              

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Отчество') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first_name" type="text" placeholder="{{ __('first_name') }}"
                                            value="{{ $staff->first_name }}"/>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Фамилия') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last_name" type="text" placeholder="{{ __('last_name') }}"
                                            value="{{ $staff->last_name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Зарплата') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('wage') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('wage') ? ' is-invalid' : '' }}" name="wage" id="input-wage" type="text" placeholder="{{ __('wage') }}"
                                            value="{{ $staff->wage }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Пол') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                             <select class="form-control" name="male">   
                                            @if($staff->male = 'man')
                                                <option value="man" name >Man</option>
                                                <option value="woomen">Wooman</option>
                                            @else
                                                <option value="woomen">Wooman</option>
                                                <option value="man" name >Man</option>
                                            @endif
                               </select>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Подразделения') }}</label>
                     <div class="col-sm">
                         <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                            <label class="col-form-label">{{ __('Подразделения в котором сотрудник состоит') }}</label>
                            <br>
                              @if (count($departament) === 0)
                                    Во леньтяй....
                                @else
                                 @foreach ($departament as $dep)
                                        <input type="checkbox" id="horns" name="departaments[]" value="{{$dep->id}}" checked="true">
                                        <label for="departaments">{{$dep->name}}</label>
                                        <br>
                                 @endforeach                      
                                @endif 
                         </div>
                     </div>

                     <div class="col-sm">
                         <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                            <label class="col-form-label">{{ __('Подразделения в которых сотрудник не состоит') }}</label>
                            <br>
                              @if (count($departaments) === 0)
                                    Ничего себе трудоголик....
                                @else
                                 @foreach ($departaments as $dep)
                                        <input type="checkbox" id="horns" name="departaments[]" value="{{$dep->id}}">
                                        <label for="departaments">{{$dep->name}}</label>
                                        <br>
                                 @endforeach                      
                                @endif 
                         </div>
                     </div>
                 </div>
                     
                 <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Обновить') }}</button>
                     <div class="clearfix"></div>              
         </form>
     </div>
    </div>
@endsection