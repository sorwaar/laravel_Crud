@include('header')
<div class="row" >
  <table class="table table-striped table-hover " align="middle" >
    <legend> Test  </legend>
    @if (session('info'))
    <div class="alert alert-success " >
      {{ session('info') }}
    </div>
    @endif
    <thead>
      <tr class="bg-primary text-white" >
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php $i = 1 @endphp
      @if (count($articles) > 0)
      @foreach($articles as $article)
      <tr class="info" >
        <td>{{ $i++ }}</td>
        <td>{{ $article->name  }}</td>
        <td>{{ $article->email }}</td>
        <td>
          <a href="{{ url("/update/{$article->id}") }}" class="btn btn-info">Update </a>  |
          <a href="{{ url("/delete/{$article->id}") }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach 
      @endif
    </tbody>
  </table>
</div>
@include('footer')