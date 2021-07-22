
@if ($data->formupload > 0)
    <form action="{{route('ajaxpost')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h6>please upload file</h6>
        <input type="file" value="" name="mandatedfile">
        <button type="submit"  class="btn btn-primary btn-sm">Uplload file</button>
    </form>
@else

<h4>
    processing...
</h4>

@endif
