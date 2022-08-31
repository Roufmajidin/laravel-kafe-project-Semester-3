 <form method="POST">
     @csrf
     @method('GET')
     <div class="row">
         <div class="col-md-5 pr-1">
             <div class="form-group">
                 <label>Nama Menu</label>
                 <input type="text" class="form-control" placeholder="Nama Menu" value="" name="nama_menu"
                     id="nama_menu">
             </div>
         </div>
         <div class="modal-footer">
             <button type="submit" class="btn btn-primary" id="submit">Simpan</button>
         </div>
 </form>

