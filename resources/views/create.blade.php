@include('header')
    
    <div class="row" >
        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/insert') }}" >
              {{ csrf_field()}}
              <fieldset>
                <legend> Test  </legend>
                @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" >
                        {{$error}} 
                    </div>
                  @endforeach
                @endif
                <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </fieldset>
            </form>            
        </div>
    </div>

@include('footer')