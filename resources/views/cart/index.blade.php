@extends('master.frontend')

@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Shopping Cart <small></small>
                </h3>
            </div>
 
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                            <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Name Product </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Price </th>
                            <th class="column-title"></th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $key)
                          <tr class="even pointer">
                           <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{{ $key->name }}</td>
                            <td>
                           	{!! Form::open(['route'=>['cart.update',$key->rowId], 'method' => 'PUT']) !!}
                           		<input type="text" name="qty" value="{{ $key->qty }}"> 
                           		<input type="submit" class="btn btn-xs btn-dark" value="ok">
                           	{!! Form::close() !!}
                            </td>
                            <td class=" ">Rp {{ $key->price }}</td>
                            <td>
                            	{!! Form::open(['route'=>['cart.destroy',$key->rowId], 'method' => 'post']) !!}
                           		<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                           		{{ method_field('DELETE') }}
                           		<input class="btn btn-xs btn-round btn-dark" type="submit" value="X">
                           		{!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                          <tr class="greentea">
                          	<td></td>
                          	<td></td>
                          	<td><strong>Item : {{ Cart::count() }}</strong></td>
                          	<td><strong>Total : Rp {{ Cart::subtotal() }}</strong></td>
                          	<td></td>
                          </tr>
                        </tbody>
                      </table>
                      <a class="btn btn-success" href="{!! url('') !!}" data-toggle="tooltip" data-placement="left" title="" data-original-title="">Go Shoping </a>
                      <a class="btn btn-dark" href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title=""> Checkout </a>
                      </div>
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection