@extends('layouts.nav2')

@section('content1')

<div class="container">
    <div class="card shadow mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Input Paslon
                    </h6>
                    
                </div>
                <div class="card-body">
                    <form method="POST" action="/create/store">
                        @csrf
                    <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                        <div class="name">No Urut</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="no">
                            </div>
                        </div>
                        </div>

                        <div class="col-4">
                        <div class="form-group">
                        <div class="name">Nama</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama">
                            </div>
                        </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                            <div class="name">Agama</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="agama">
                                </div>
                            </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <div class="name">Fraksi</div>
                            <div class="value">
                                <select class="form-control" name="fraksi">
                                    <option>-</option>
                                  <option>Paratai Demokrasi Indonesia</option>
                                  <option>Partai Golongan Karya</option>
                                  <option>Partai Demokrat</option>
                                </select>
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                        <div class="form-group">
                            <div class="name">Dapil</div>
                            <div class="value">
                                <select class="form-control" name="dapil">
                                    <option>-</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <label for="description" class="text-small text-uppercase">Riwayat pendidikan</label>
                                <textarea name="r_pen" rows="3" class="form-control summernote"></textarea>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <label for="details" class="text-small text-uppercase">Riwayat Pekerjaan</label>
                                <textarea name="r_pek" rows="3" class="form-control summernote"></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer ">
                    <button class="btn btn-lg btn-primary btn-login" type="submit">Input</button>
                </div>
                    </form>
                
            </div>
        </div>
    </div>



    <!-- batas 

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    Input Paslon
                </h6>
                
            </div>
            <div class="card-body">
                <form method="POST" action="/create/store">
                    csrf
                    method('PUT')
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="name">Nama Paslon</div>
                                
                                <input class="form-control"  type="text" name="nama" >
                               
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="name">No Urut</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="no">
                                </div>                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div> Fraksi</div>
                                <select class="form-control" name="fraksi">
                                    <option>-</option>
                                  <option>PDIP</option>
                                  <option>Golkar</option>
                                  <option>Nasdem</option>
                                  <option>PPP</option>
                                  <option>PKB</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Agama</label>
                                <input class="form-control" id="name" type="text" name="agama" >                          
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="weight">Dapil</label>
                                
                                <select class="form-control" name="dapil">
                                    <option>-</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                            </div>
                        </div>

                        
                    </div>
                   <div class="row">
                        
                        
                   </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="description" class="text-small text-uppercase">Riwayat pendidikan</label>
                            <textarea name="r_pen" rows="3" class="form-control summernote"></textarea>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="details" class="text-small text-uppercase">Riwayat Pekerjaan</label>
                            <textarea name="r_pek" rows="3" class="form-control summernote"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer ">
                        <button class="btn btn-lg btn-primary btn-login" type="submit">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


-->



    @endsection()