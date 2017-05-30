
@extends('admin_template')
@section('content')


 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                  <button onclick="golongan.openmodaladd()" type="button" class="btn btn-flat" data-widget=""><i class="glyphicon glyphicon-plus"></i> Tambah Golongan</button>
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
                </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa_nilai as $item)
                <tr>
                 <td>{{$item->ilcmhsnilaiId}}</td>
                 <td>{{$item->ilcmhsnilaiMhsNiu}}</td>
                 <td>{{$item->ilcnamaMhs}}</td>
                 <td>{{$item->ilcmhsnilaiSempId}}</td>
                 <td>{{$item->ilcmhsnilaiIelts}}</td>
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
                    <h4 class="modal-title">Add Subject</h4>
                </div>
                <div class="modal-body">
                       <div class="form-group">
                        <label>Subject Name</label>
                        <input type="text" class="form-control col-md-6" ng-model="subject.SubjectName">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-default btn-width btn-margin" data-dismiss="modal">Cancel</a>
                    <button type="button" class="btn btn-default btn-width" ng-click="AddClik()">
                        <span>Add</span>
                    </button>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
