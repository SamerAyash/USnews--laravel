@extends('layouts.app')

@section('content')
    <div class="container">
    <table  class="table table-dark" cellspacing="0" width="100%" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Is Trusted</th>
            <th>Is Active</th>
        </tr>
        </thead>
    </table>
    </div>
@endsection
@push('ajax')
 <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('getUsers') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name'},
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'trust', name: 'trust' },
                    { data: 'active', name: 'active' },

                ]
            });

        });

    </script>
    <script>
        $('#users-table').on('click','#trustBut',function (e) {
            e.preventDefault();
            var dataId = $(this).attr("data-value");
           $.ajax(
                {
                    url: '{{route('trusted')}}/'+dataId ,
                    _method: "GET",
                    data: {
                        id:dataId,
                        _token:'{{csrf_token()}}'
                    },
                    success: function( response ) {
                        console.log(response.isTrusted);
                        if (response.isTrusted == true){
                            $(this).html('<a id="trustBut" class="btn btn-danger text-white" data-value='+dataId+'></a>');
                        }
                        else{
                            $(this).html('<a  id="trustBut" class="btn btn-primary text-white" data-value='+dataId+'>Trusted</a>');
                        }
                    }
                }
            );

        });
    </script>

    @endpush