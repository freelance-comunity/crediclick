@extends('layouts.app')
@section('main-content')


<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Solicitud de Crédito</h3>
  </div>  
  {!! Form::open(['url' => 'renovation','data-parsley-validate' => '']) !!} 
  <div class="box-body">

    <div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Solicitud de Crédito</h3>
  </div>  

  <div class="box-body">
    <div class="form-group col-sm-6 col-lg-4">
      {!! Form::label('adviser', 'Promotor:') !!}
      <input type="text" name="adviser" value=" {{ Auth::user()->name }} {{ Auth::user()->father_last_name }} {{ Auth::user()->mother_last_name }}", class="form-control input-lg" required="required" data-parsley-trigger="input focusin" readonly="">
    </div>

    <div class="form-group col-sm-6 col-lg-4">
      {!! Form::label('date', 'Fecha:') !!}
      <input type="date" name="date" class="form-control input-lg" required="required" data-parsley-trigger="input focusin">
    </div>
    


    <div class="form-group col-sm-6 col-lg-4">
      {!! Form::label('branch', 'Sucursal:') !!}
      {!! Form::text('branch',$client->branch->name, [
        'style' => 'text-transform:uppercase',
        'class' => 'form-control input-lg', 
        'required'=>'required',
        'data-parsley-trigger ' => 'input focusin',
        'readonly'=>'readonly',
        'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
        
      </div>
      <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('ammount', 'Monto Crédito:') !!}
        {!! Form::text('ammount',  null, [
          'style' => 'text-transform:uppercase',
          'class' => 'form-control input-lg', 
          'placeholder' => 'ESCRIBA EL MONTO ', 'required' => 'required',
          'data-parsley-trigger ' => 'input focusin',
          'data-parsley-type' => 'digits',
          'data-parsley-maxlength' => '5',
          'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
        </div>
        <div class="form-group col-sm-6 col-lg-4">
          {!! Form::label('interest_rate', 'Tasa Interés(%):') !!}
          {!! Form::text('interest_rate', $product->interest_of_cup, [
            'style' => 'text-transform:uppercase',
            'class' => 'form-control input-lg', 
            'required'=>'required',
            'data-parsley-trigger ' => 'input focusin',
            'readonly'=>'readonly',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
          </div>
          @if ($product->name == 'DIARIO')
          <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('dues', 'No. Cuotas:') !!}
            {!! Form::select('dues', ['25'=>'25','30'=>'30', '52'=>'52','60'=>'60'],null, [
              'style' => 'text-transform:uppercase',
              'class' => 'form-control input-lg', 
              'required'=>'required',
              'data-parsley-trigger ' => 'input focusin',
              'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
            </div>
            @else
            <div class="form-group col-sm-6 col-lg-4">
              {!! Form::label('dues', 'No. Cuotas:') !!}
              {!! Form::select('dues', ['1'=>'1'],null, [
                'style' => 'text-transform:uppercase',
                'class' => 'form-control input-lg', 
                'required'=>'required',
                'data-parsley-trigger ' => 'input focusin',
                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
              </div>
              @endif
              

              <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('periodicity', 'Periodicidad:') !!}
                {!! Form::text('periodicity', $product->name, [
                  'style' => 'text-transform:uppercase',
                  'class' => 'form-control input-lg', 
                  'required'=>'required',
                  'readonly'=>'readonly',
                  'data-parsley-trigger ' => 'input focusin',
                  'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                </div>


                <div class="form-group col-sm-6 col-lg-4">
                  {!! Form::label('warranty_type', 'Tipo de Garrantía:') !!}
                  {!! Form::select('warranty_type',['LIQUIDA'=>'LIQUIDA','PRENDARIA'=>'PRENDARIA','AVALES'=>'AVALES'], null, [
                    'style' => 'text-transform:uppercase',
                    'class' => 'form-control input-lg', 
                    'required'=>'required',
                    'data-parsley-trigger ' => 'input focusin',
                    'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                  </div>

                  <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::label('firts_name', 'Nombre:') !!}
                    {!! Form::text('firts_name', $client->firts_name, [
                      'style' => 'text-transform:uppercase',
                      'class' => 'form-control input-lg', 
                      'required'=>'required',
                      'data-parsley-trigger ' => 'input focusin',
                      'readonly' =>'readonly',
                      'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                    </div>

                    <div class="form-group col-sm-6 col-lg-4">
                      {!! Form::label('last_name', 'Apellido Paterno:') !!}
                      {!! Form::text('last_name',$client->last_name, [
                        'style' => 'text-transform:uppercase',
                        'class' => 'form-control input-lg', 
                        'required'=>'required',
                        'data-parsley-trigger ' => 'input focusin',
                        'readonly'=>'readonly',
                        'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                      </div>


                      <div class="form-group col-sm-6 col-lg-4">
                        {!! Form::label('mothers_last_name', 'Apellido Materno:') !!}
                        {!! Form::text('mothers_last_name', $client->mothers_last_name, [
                          'style' => 'text-transform:uppercase',
                          'class' => 'form-control input-lg', 
                          'required'=>'required',
                          'data-parsley-trigger ' => 'input focusin',
                          'readonly'=>'readonly',
                          'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                        </div>


                        <div class="form-group col-sm-6 col-lg-4">
                          {!! Form::label('curp', 'Curp:') !!}
                          {!! Form::text('curp', $client->curp, [
                            'style' => 'text-transform:uppercase',
                            'class' => 'form-control input-lg', 
                            'required'=>'required',
                            'data-parsley-trigger ' => 'input focusin',
                            'readonly'=>'readonly',
                            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                          </div>


                          <div class="form-group col-sm-6 col-lg-4">
                            {!! Form::label('ine', 'Ine:') !!}
                            {!! Form::text('ine', $client->ine, [
                              'style' => 'text-transform:uppercase',
                              'class' => 'form-control input-lg', 
                              'required'=>'required',
                              'data-parsley-trigger ' => 'input focusin',
                              'readonly'=>'readonly',
                              'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                            </div>

                            <input type="hidden" name="client_id" value="{{ $client->id}}">
                            

                            
                            <div class="form-group col-sm-6 col-lg-4">
                              {!! Form::label('collection_period', 'Horario Sugerido de Cobro:') !!}
                              {!! Form::select('collection_period',['MAÑANA'=>'MAÑANA','MEDIO DÍA'=>'MEDIO DIA','TARDE'=>'TARDE'],null, [
                                'style' => 'text-transform:uppercase',
                                'class' => 'form-control input-lg', 
                                'required'=>'required',
                                'data-parsley-trigger ' => 'input focusin',
                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                              </div>
                              <div class="form-group col-sm-6 col-lg-4">
                                {!! Form::label('firm', 'Firma:') !!}
                                {!! Form::text('firm',null, [
                                  'class' => 'form-control input-lg', 
                                  'id'    => 'signature',
                                  'required'=>'required',
                                  'data-parsley-trigger ' => 'input focusin',
                                  'readonly'
                                  ]) !!}
                                </div>
                                <div class="form-group col-sm-12 col-lg-12">
                                  <div id="signature-pad" class="m-signature-pad">
                                    <div class="m-signature-pad--body">
                                      <canvas style="border: 1px solid black; height: 200px;"></canvas>
                                    </div>
                                    <div class="m-signature-pad--footer">
                                      <button type="button" class="button clear" data-action="clear">Limpiar</button>
                                      <button type="button" class="button save" data-action="save">Usar</button>
                                    </div>
                                  </div>

                                </div>
                                <input type="hidden" name="type_product" value="{{$product->id}}">

                                <div class="box-body" >
                                 <div class="col-md-4">
                                  <div class="btn-group">
                                    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary', 'id' => 'save']) !!}
                                  </div>
                                </div> 
                              </div>
                            </div>                            
                          </div>
                          @include('credits.signature')

                      
                              <div class="form-group col-sm-6 col-lg-4">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-lg  btn-success']) !!}
                              </div>

                              {!! Form::close() !!}
                              @endsection
