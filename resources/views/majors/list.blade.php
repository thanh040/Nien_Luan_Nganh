@extends('layouts.layout')

@section('content')
<style>
    .hidden-column {
        display: none;
    }
</style>
<div class="row w-100">
    <div class="col-md-8 mx-auto ">
        <table class="table mx-auto" style="align-items: center">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Đề Tài</th>
                <th scope="col" class="hidden-column">Mô Tả</th>
                <th scope="col">Nghành</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $item)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td><a href="#">{{$item->ten_dt}}</a></td>
                        <td class="hidden-column" data-toggle="modal" data-target="#hiddenDataModal" data-description="{{$item->mota_dt}}">Mark</td>
                        <td>{{$item->id_nganh }}</td>
                    </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Hidden Data Modal -->
<div class="modal fade" id="hiddenDataModal" tabindex="-1" aria-labelledby="hiddenDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hiddenDataModalLabel">Mô Tả</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="hiddenDataContent">
                <!-- Content from hidden column will be inserted here -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('a[data-toggle="modal"]').click(function() {
            var description = $(this).data('description');
            $('#hiddenDataContent').text(description);
        });
    });
</script>
@endsection