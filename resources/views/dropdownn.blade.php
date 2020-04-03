@extends('master.app')
    @section('main-content')
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-success">
          <div class="panel-heading">
			<h3>How To Create Dependent Drop down in Laravel</h3>
          </div>
          <div class="pakainfo panel-body">
        <form action="{{ route('dynamic-dropdown-laravel.store') }}" method="post">
         {{ csrf_field() }}
         <div class="pakainfo row">
          <div class="pakainfo col-md-6">
           <div class="pakainfo form-group {{ ($errors->has('roll'))?'has-error':'' }}">
            <label for="roll">MyState <span class="required">*</span></label>
            <select name="name_state" class="pakainfo form-control" id="name_state">
             <option value="">-- Select MyState --</option>
             @foreach ($name_states as $name_state)
              <option value="{{ $name_state->id }}">{{ ucfirst($name_state->name_state_name) }}</option>
             @endforeach
            </select>
         </div>
          </div>
          <div class="col-md-6">
           <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label for="roll">MyCity </label>
            <select name="name_city" class="form-control" id="name_city">
            </select>
         </div>
          </div>
         </div>
       </form> 
	   <a href="http://pakainfo.com/" target="_blank" alt="pakainfo" title="pakainfo">Free Download Example - Pakainfo.com</a>
          </div>
        </div>
    </div>
        
    @endsection

    @section('script')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script>
             $(document).ready(function() {
            $('#name_state').on('change', function() {
                var getStId = $(this).val();
                if(getStId) {
                    $.ajax({
                        url: '/searchYourCity/'+getStId,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            //console.log(data);
                          if(data){
                            $('#name_city').empty();
                            $('#name_city').focus;
                            $('#name_city').append('<option value="">-- Select MyCity --</option>'); 
                            $.each(data, function(key, value){
                            $('select[name="name_city"]').append('<option value="'+ key +'">' + value.name_city_name+ '</option>');
                        });
                      }else{
                        $('#name_city').empty();
                      }
                      }
                    });
                }else{
                  $('#name_city').empty();
                }
            });
        });
        </script>