<!-- membuat class dengan baris dan menjadi center dengan margin top -5 dari atas -->
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card w-30 my-auto">
            <!-- // header  -->
            <div class="card-header text-center">
                <h4>Booking</h4>
            </div>
            <!-- body berisi form yang akan diisi-->
            <div class="card-body">
                <form>
                <!-- textbox asal -->
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="asal" class="form-label">Asal</label>
                            <input type="asal" class="form-control" id="asal" aria-describedby="asal" />
                        </div>
                <!-- textbox tujuan -->
                        <div class="col-6">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <input type="tujuan" class="form-control" id="tujuan" />
                        </div>
                    </div>
                    <!-- textbox Tanggal Keberangkatan -->
                    <!-- membuat baris -->
                    <div class="mb-3 row">
                    <!-- membuat kolom -->
                        <div class="col-6">
                            <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan</label>
                            <input type="date" class="form-control" id="tanggal_keberangkatan" aria-describedby="tanggal_keberangkatan" />
                        </div>
                     <!-- membuat kolom -->
                        <div class="col-6">
                     <!-- textbox  Waktu Keberangkatan -->
                            <label for="waktu_keberangkatan">Waktu Keberangkatan</label>
                            <input type="time" id="waktu_keberangkata" class="form-control" aria-describedby="asal" />
                        </div>
                    </div>
                    <!-- textbox  seat -->
                    <div class="mb-3">
                        <label for="seat" class="form-label">seat</label>
                        <input type="seat" class="form-control" id="seat" aria-describedby="seat" />
                    </div>
                    <button type="submit" class="btn btn-primary w-90">Booking</button>
                </form>
            </div>
            <!-- footer -->
            <div class="card-footer">
                <small>&copy; Budi </small>
            </div>
        </div>
    </div>
</div>
</div>