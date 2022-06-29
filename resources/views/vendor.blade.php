@extends('layoutvendor.vendorapp')

<link href="https://partner.weddingku.com/assets/js/bootstrap/bootstrap-tour.min.css?v=0.7282373" rel="stylesheet" type="text/css">
@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid">
        <form action="{{ url('registerpaketvendor') }}" name="frmInput" method="post" onsubmit="return isValid();">
        @csrf
            <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="panel">
                        <div class="content-send">
                            <div class="panel-heading border-heading">
                                <div class="panel-title" style="text-align:center;">
                                    <h3 style="color:#749ca1;">Business Information</h3><br>
                                    <small>Your business related information! further detail can be updated later on.</small>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label" for="brand">Nama Produk <span class="required">*</span></label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="sddm">
                                            <li>
                                                <input type="text" name="nama_paket" id="brand" class="form-control-vendor input-lg" onblur="checkexbrand(this.value);" value="" maxlength="100" onkeyup="loadCari(this.value)" autocomplete="OFF" size="20" required=""><input id="partnerid" name="partnerid" type="hidden"><input name="txtCek" type="hidden" value="0">
                                                <small id="emailHelp" class="text-muted">Your brand, i.e. QR Wedding Expert, will be cross-checked with existing data filtered by city.</small>
                                                <div id="statbrand">
                                                    <input name="brandstat" id="brandstat" type="hidden" value="1">
                                                </div>
                                            </li>
                                        </ul>
                                        <span id="cekbrandnameempty"></span>
                                        <span id="brandcek"></span>
                                        <div id="checked_isme">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="txtaddress">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label" for="address">Harga Produk <span class="required">*</span></label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="number" name="harga" id="harga" onblur="checkexphone(this.value);" class="form-control-vendor input-lg" size="20" min="0" max="120000" step="500">
                                        <small id="emailHelp" class="text-muted">Your outlet address, i.e. ABC street No. 123</small><br>
                                        <span id="cekaddressempty"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="control-label" for="phone">Kapasitas Tamu <span class="required">*</span></label>
                                        <div>
                                            <input type="number" name="kapasitas_paket" id="kapasitas_paket" onblur="checkexphone(this.value);" class="form-control-vendor input-lg" size="20" min="5" max="1000">
                                            <small id="emailHelp" class="text-muted">Your business contact no, +CountryCode + number, i.e. +62216505350</small><br>
                                            <span id="cekphoneempty"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="control-label" for="city">Durasi Produk <span class="required">*</span></label>
                                        <div>
                                        
                                            <select class="form-control-vendor input-lg" id="durasi_paket" name="durasi_paket" onchange="loadCity(this.value);">
                                                <optgroup label="Durasi Produk">
                                                    <option value="Full Day">Full Day</option>
                                                    <option value="Half Day">Half Day</option>
                                                </optgroup>
                                            </select>
                                            
                                            <span id="cekcitycodeempty"></span>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="g-recaptcha" id="captcha-verify" data-sitekey="6LevJwoTAAAAAG5FMZ-LjS7Kl8vIZ47dslEWKkJg"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LevJwoTAAAAAG5FMZ-LjS7Kl8vIZ47dslEWKkJg&amp;co=aHR0cHM6Ly9wYXJ0bmVyLndlZGRpbmdrdS5jb206NDQz&amp;hl=en&amp;v=sG0iO6gHcGdWJzjJjW9AY49S&amp;size=normal&amp;cb=brgfcdjvzalb" width="304" height="78" role="presentation" name="a-4nidotog79ad" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="hidden" value="doSubmit" name="action">
                                    <input type="submit" id="btnNext" class="btn btn-primary pull-right" value="Next">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection