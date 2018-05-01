
{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')

<link href="{{ asset('data-table/css/bootstrap-table.css') }}  " rel="stylesheet">
  <link href="{{ asset('data-table/css/multiple-select.css') }}  " rel="stylesheet">
  <link href="{{ asset('data-table/css/datatables.min.css') }}  " rel="stylesheet">

  <script src="{{ asset('data-table/js/tableExport.js') }} "></script>
  <script src="{{ asset('data-table/js/bootstrap-table.js') }} "></script>
  <script src="{{ asset('data-table/js/multiple-select.js') }} "></script>
  <script src="{{ asset('data-table/js/bootstrap-table-export.js') }} "></script> 

    <div class="container">
        <h1>Export</h1>
        <div id="toolbar">
            <select class="form-control">
                <option value="">Export Basic</option>
                <option value="all">Export All</option>
                <option value="selected">Export Selected</option>
            </select>
        </div>
        <table id="table"
               data-toggle="table"
               data-show-export="true"
               data-pagination="true"
               data-click-to-select="true"
               data-toolbar="#toolbar"
               data-url="../json/data1.json">
            <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="id">ID</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
            </thead>

                <tbody>
               
                <tr>
                  <td>1</td>
                  <td>juan</td>
                  <td>hola</td>

              
                </tr>
                </tbody>
        </table>
    </div>


{{-- 
    <div class="container">
        <h1>Export</h1>

              <table id="table" data-pagination="true" data-search="true" data-show-export="true" data-click-to-select="true" data-show-columns="true"  data-detail-view="true"   data-detail-formatter="detalleformato"  data-side-pagination="client"  data-page-list="[5, 10, 20, 50, 100, 200]"
               data-toolbar="#toolbar">
              
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>

              <tbody>
                @foreach($tags as $tag)
                <tr>
                  <td>{{ $tag->id }}</td>
                  <td>{{ $tag->name }}</td>
              
                </tr>
                </tbody>  
      </table>

    </div> --}}
{{--   <script>
      function detalleformato(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }
    </script> --}}


@endsection
