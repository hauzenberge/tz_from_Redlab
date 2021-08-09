@extends('layouts.app')

@section('content')
      <!-- /.content-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <table class="table table-bordered">
                 <thead>
                    <tr>
                      <th scope="col">
                          <a class="btn btn-default" href="{{url('staff/add')}}">
                                <i class="fa fa-plus"></i>Добавить сотрудника
                            </a>

                            <a class="btn btn-default" href="{{url('/departament/add')}}">
                                <i class="fa fa-plus"></i>Добавить Подразделение
                            </a>
                      </th>
                      @if (count($departam) === 0)
                             <th>Записи о департаменах отсутствуют!</th>
                         @else
                          @foreach ($departam as $departament)
                               <th scope="col">
                                    {{$departament->name}}
                                    <br>
                                    <a href="{{url('/departament/edit/'.$departament->id)}}">Edit</a>
                                    <a href="{{url('/departament/delete/'.$departament->id)}}">Delete</a>
                               </th>
                           @endforeach                      
                      @endif
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($stafers) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($stafers as $staff)
                            <tr>                                    
                                <th scope="row">
                                    {{$staff->name}} {{$staff->first_name}} {{$staff->last_name}}
                                    <a href="{{url('/staff/edit/'.$staff->id)}}">Edit</a>
                                    <a href="{{url('/staff/delete/'.$staff->id)}}">Delete</a>
                                </th>

                                  @foreach ($departam as $depart)
                                     @if(App\Departaments::help($staff->id, $depart->id) === true)
                                         <td><img src="http://s1.iconbird.com/ico/2013/12/517/w512h5121386955471success.png" width="15px" height="auto"></td>
                                        @else
                                            <td></td>
                                    @endif
                                   @endforeach     
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection   