@extends('admin.master')

@section('content')


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                
                <div class="container">
                <div class="col-md-12">

                 <div class="row">


               <div class="col-md-4">

               </div>


                 <div class="col-md-5 pull-right">
                     <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


                      {!! Form::model($Products, ['method'=>'post', 'action'=> ['ProductsController@sumbitProperty', $Products->id], 'files'=>true]) !!}
 
                  


                   

                          <b>Product Name:</b>
                        <select class="form-control" name="pro_id">
                        
                          <option  value="{{$Products->id}}">{{$Products->pro_name}}</<option>
                          
                          </select><br>

                         Size:  <select class="form-control" name="size">
                                  <option  value="L">L</<option>
                                  <option  value="XL">XL</<option>
                                  <option  value="XXL">XXL</<option>
                            </select><br>


                            Color:  <select class="form-control" name="color">
                                     <option  value="blue">Blue</<option>
                                     <option  value="green">Green</<option>
                                     <option  value="black">Black</<option>
                               </select><br>

                    Price:  <input type="text" name="p_price" class="form-control">

                    <br>

                     <div class="panel-title">Add Property
                     <input type="submit" class="btn btn-success pull-right" value="Submit Property" style="margin:-4px"/>
                   </div>


                 


                   
                 


                    {!! Form::close() !!}
                </div>
                 </div>
              </div>
             </div>
    
 
@endsection

