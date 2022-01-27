<section class="content">
  <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Customer Kontrak</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Jenis Layanan</label>
                <select required class="form-control select2 layanan" name="layanan" style="width: 100%;">
                  <option value="Retail" selected="selected">Retail</option>
                  <option value="Sewa Armada" >Sewa Armada</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Type Layanan</label>
                <select required class="form-control select2 type" name="tipe" style="width: 100%;">
                  <option selected="selected" value="Dimensi Logistic">Dimensi Logistic</option>
                  <option value="Cargo Murah">Cargo Murah</option>
                  <option value="Tirex">Tirex</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pengirim</label>
                <select required class="form-control select2" id="customer" name="pengirim_id" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6 box_jenis_armada"  style="" >
              <div class="form-group">
                <label>Jenis Armada </label>
                <input type="text" class="form-control jenis_armada" id="jenis_armada" name="jenis_armada" placeholder="Jenis Armada" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Marketing</label>
                <select required class="form-control select2 marketing" name="marketing_id" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Dari</label>
                <select required class="form-control select2 dari" name="dari" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tujuan</label>
                <select required class="form-control select2 tujuan" name="tujuan" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Harga</label>
                <input required type="number" class="form-control" name="harga" placeholder="Harga Jual" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Berat Minimal</label>
                <input required type="number" class="form-control" id="exampleInputEmail1" name="minimal_berat" placeholder="Berat Minimal" value="">  
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Type Pickup</label>
                <select required class="form-control select2 typepickup" name="type_pickup" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Cabang Pemickup</label>
                <select required class="form-control select2 cabang" name="cabang_pemickup" style="width: 100%;">
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Penerima </label>
                <input required type="text" class="form-control"  name="nama" placeholder="Nama Penerima" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Nomor Telepon Penerima</label>
                <input required type="text" class="form-control"  name="telepon" placeholder="Telepon Penerima" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tipe Pembayaran</label>
                <select required class="form-control select2 type_bayar" name="tipe_bayar" style="width: 100%;">
                  <option selected="selected" value="NON CASH">NON CASH</option>
                  <option value="CASH">CASH</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Via</label>
                <select required class="form-control select2 via" name="via" style="width: 100%;">
                  <option selected="selected" value="DARAT">DARAT</option>
                  <option value="LAUT">LAUT</option>
                  <option value="UDARA">UDARA</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Asuransi</label>
                <select required class="form-control select2 asuransi" name="asuransi" style="width: 100%;">
                  <option selected="0" value="tidak">Tidak</option>
                  <option value="1">Ya</option>
                </select>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Fee Type</label>
                <select required class="form-control select2 feetype" name="feetype" style="width: 100%;">
                  <option selected="0" value="tunai">Tunai</option>
                  <option value="ratio">Ratio</option>
                </select>                  
              </div>
            </div>


            <div class="col-md-12 box_feetunai">
              <div class="form-group">  
                <label>Fee</label><small class="ratio_peringatan" style='color:red;'></small>
                <input type="number" class="form-control fee"   name="fee" placeholder="Fee Customer" value="">  
              </div>
            </div> 


            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Pengirim</label>
                <input type="text" class="form-control autocomplete0" name="alamat_pengirim" placeholder="Cari Alamat Pengirim">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Penerima</label>
                <input type="text" class="form-control autocomplete1" name="alamat_penerima" placeholder="Cari Alamat Penerima" >  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div id="map0" style="height:400px;"></div> 
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div id="map1" style="height:400px;"></div> 
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Latitude</label>
                <input required readonly type="text" class="form-control lat0"  name="lat" placeholder="Lat" value="">  
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Longitude</label>
                <input required readonly type="text" class="form-control lng0"  name="lng" placeholder="Lng" value="">  
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Latitude</label>
                <input required readonly type="text" class="form-control lat1"  name="lat_penerima" placeholder="Lat" value="">  
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Longitude</label>
                <input required readonly type="text" class="form-control lng1"  name="lng_penerima" placeholder="Lng" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Lengkap Pengirim</label>
                <input required type="text" class="form-control alamat_peta0" name="alamat_lengkap_pengirim"  name="harga" placeholder="Alamat Lengkap Pengirim" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Lengkap Penerima</label>
                <input required type="text" class="form-control alamat_peta1" name="alamat_lengkap_penerima"  name="harga" placeholder="Alamat Lengkap Penerima" value="">  
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea required class="form-control" name="deskripsi" ></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Catatan</label>
                <textarea class="form-control" name="catatan" ></textarea>
              </div>
            </div>
            
          </div>
        </div>
      </div>
  </div>
</section>