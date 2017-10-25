@include('header')
    
    <div class="row" >
        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/edit',array($articles->id )) }}" >
            	{{ csrf_field()}}
              <fieldset>
                <legend> Test  </legend>
                <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="name" value="{{ $articles->name }}" id="inputName" placeholder="Name" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="email" value="{{ $articles->email }}" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <a href="{{ url('/') }}" type="reset" class="btn btn-default">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </fieldset>
            </form>            
        </div>
    </div>

@include('footer')