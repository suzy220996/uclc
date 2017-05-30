
@extends('admin_template')
@section('content')


 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                  <button onclick="btnaddnewclick()" type="button" class="btn btn-flat" data-widget=""><i class="glyphicon glyphicon-plus"></i> Add New</button>
              </h3>
            </div>
             <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NPM</th>
                  <th>NAMA</th>
                  <th>PERIODE UJIAN</th>
                  <th>NILAI UJIAN</th>
                  <th>LEVEL</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa_nilai as $item)
                <tr>
                 <td>{{$item->ilcmhsnilaiId}}</td>
                 <td>{{$item->ilcmhsnilaiMhsNiu}}</td>
                 <td>{{$item->ilcmhsnilaiMhsNiu}}</td>
                 <td>{{$item->ilcmhsnilaiSempId}}</td>
                 <td>{{$item->ilcmhsnilai}}</td>
                 <td>{{$item->ilcmhsnilaiSempId}}</td>
                </tr>
                 @endforeach
            
                </tbody>
                </table>
                
              </div>
          </div>
        </div>
    </div>
</section>
<div class="modal modal-message fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="javascript:;" class="close" data-dismiss="modal">x</a>
                    <h4 class="modal-title">Add New</h4>
                </div>
                <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/store') }}">
              <div class="box-body">

                <div class="form-group">
                  <label for="ilcmhsnilaiMhsNiu" class="col-sm-2 control-label">NPM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiMhsNiu" placeholder="NPM">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="ilcmhsnilaiMhsNiu" class="col-sm-2 control-label">NAMA</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiMhsNiu" placeholder="NAMA">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ilcmhsnilaiSempId" class="col-sm-2 control-label">PERIODE UJIAN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiSempId" placeholder="PERIODE UJIAN">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ilcmhsnilaiListening" class="col-sm-2 control-label">NILAI LISTENING</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiListening" placeholder="NILAI LISTENING">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ilcmhsnilaiReading" class="col-sm-2 control-label">NILAI READING</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiReading" placeholder="NILAI READING">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ilcmhsnilaiSempId" class="col-sm-2 control-label">LEVEL</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ilcmhsnilaiSempId" placeholder="LEVEL">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ilcmhsnilaiId" class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="ilcmhsnilaiId">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
                </div>
            </div>
        </div>
    </div>

<script>
function btnaddnewclick ()
{
    $("#modal-add").modal('show');
}
</script>
@endsection
