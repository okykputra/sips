@extends('adminlte::layouts.app')

<title>Data siswa</title>

@section('contentheader_title','Siswa')

@section('main-content')
@if(Session::has('message'))
    <div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" data-duration="1s">&times;</a>
            {{Session::get('message')}}
    </div>
@endif
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/dataTables.min.css')}}">
    <table class="table table-striped table-hover table-responsive" id="sample_1" style="text-align: center;">
        <thead>
            <tr>
                <th style="width: 8px;">
                    <input type="checkbox" id="master">
                </th>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Kelas</th>
                <th style="text-align: center;">Pelanggaran</th>
                <th style="text-align: center;">Waktu</th>
                <th style="text-align: center;">Point</th>
            </tr>
        </thead>
    <tbody>
    @if($catatan->count())
        <?php $no=1 ?>
        @foreach($catatan as $list)
            <tr class="odd gradeX">
                <td><input type="checkbox" class="sub_chk" data-id="{{$list->id}}"></td>
                <td style="text-align: center;">{{ $no++ }}</td>
                <td style="text-align: center;">{{ $list->nama_siswa }}</td>
                <td style="text-align: center;">{{ $list->kelas }} {{ $list->jurusan }}</td>
                <td style="text-align: center;">{{ $list->pelanggaran }}</td>
                <td style="text-align: center;">{{ $list->created_at}}</td>
                <td style="text-align: center;">{{ $list->poin }}</td>
            </tr>
         @endforeach
     @endif
  </tbody>
</table>
<button class="btn btn-primary delete_all" data-url="{{ url('deleteAll') }}">Delete All Selected</button>
@stop
@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#sample_1').DataTable();
            });
        </script>
        <script type="text/javascript">

            $(document).ready(function () {


                $('#master').on('click', function(e) {

                 if($(this).is(':checked',true))  

                 {

                    $(".sub_chk").prop('checked', true);  

                 } else {  

                    $(".sub_chk").prop('checked',false);  

                 }  

                });


                $('.delete_all').on('click', function(e) {


                    var allVals = [];  

                    $(".sub_chk:checked").each(function() {  

                        allVals.push($(this).attr('data-id'));

                    });  


                    if(allVals.length <=0)  

                    {  

                        alert("Please select row.");  

                    }  else {  


                        var check = confirm("Are you sure you want to delete this row?");  

                        if(check == true){  


                            var join_selected_values = allVals.join(","); 


                            $.ajax({

                                url: $(this).data('url'),

                                type: 'DELETE',

                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                                data: 'ids='+join_selected_values,

                                success: function (data) {

                                    if (data['success']) {

                                        $(".sub_chk:checked").each(function() {  

                                            $(this).parents("tr").remove();

                                        });

                                        alert(data['success']);

                                    } else if (data['error']) {

                                        alert(data['error']);

                                    } else {

                                        alert('Whoops Something went wrong!!');

                                    }

                                },

                                error: function (data) {

                                    alert(data.responseText);

                                }

                            });


                          $.each(allVals, function( index, value ) {

                              $('table tr').filter("[data-row-id='" + value + "']").remove();

                          });

                        }  

                    }  

                });


                $('[data-toggle=confirmation]').confirmation({

                    rootSelector: '[data-toggle=confirmation]',

                    onConfirm: function (event, element) {

                        element.trigger('confirm');

                    }

                });


                $(document).on('confirm', function (e) {

                    var ele = e.target;

                    e.preventDefault();


                    $.ajax({

                        url: ele.href,

                        type: 'DELETE',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function (data) {

                            if (data['success']) {

                                $("#" + data['tr']).slideUp("slow");

                                alert(data['success']);

                            } else if (data['error']) {

                                alert(data['error']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (data) {

                            alert(data.responseText);

                        }

                    });


                    return false;

                });

            });

        </script>
@stop