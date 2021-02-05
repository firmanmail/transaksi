@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
                <div class="px-3 py-3">
                        <h5 class="text">Transaksi</h5>
                        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nomor Nota</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis</th>
                      <th>Total Bayar</th>
                      <th>Tanggal</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>8312487312</td>
                      <td>Mamang</td>
                      <td>Tunai</td>
                      <td>12.000</td>
                      <td>12-02-2021</td>
                      <th>
                        <button class="btn btn-outline-primary btn-sm" type="submit">Detail</button>
                         <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                      </th>
                    </tr>
                  </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
@endsection