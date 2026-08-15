@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4 p-md-5">

                    <h1 class="page-title">
                        🔧 Kalkulator CC
                    </h1>

                    <p class="text-muted">
                        Hitung kapasitas mesin dari bore
                        dan stroke.
                    </p>


                    <div class="mb-3">

                        <label class="form-label">
                            Bore (mm)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="bore"
                            class="form-control"
                            placeholder="Contoh: 52.4">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Stroke (mm)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="stroke"
                            class="form-control"
                            placeholder="Contoh: 57.9">

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jumlah Silinder
                        </label>

                        <input
                            type="number"
                            id="silinder"
                            class="form-control"
                            min="1"
                            value="1">

                    </div>


                    <button
                        onclick="hitungCC()"
                        class="btn btn-dark w-100">

                        🔧 Hitung CC

                    </button>


                    <div
                        id="hasil"
                        class="result-box mt-4 d-none">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@section('script')

<script>

function hitungCC()
{
    const bore =
        parseFloat(
            document.getElementById('bore').value
        );

    const stroke =
        parseFloat(
            document.getElementById('stroke').value
        );

    const silinder =
        parseInt(
            document.getElementById('silinder').value
        );


    if (
        !Number.isFinite(bore) ||
        !Number.isFinite(stroke) ||
        !Number.isInteger(silinder) ||
        bore <= 0 ||
        stroke <= 0 ||
        silinder <= 0
    ) {

        alert('Masukkan data dengan benar.');

        return;
    }


    /*
       Rumus:

       CC =
       π / 4 × bore² × stroke × jumlah silinder

       Karena input dalam mm,
       hasil dibagi 1000 agar menjadi cm³/cc.
    */

    const cc =
        (
            Math.PI /
            4
        ) *
        Math.pow(bore, 2) *
        stroke *
        silinder /
        1000;


    const hasil =
        document.getElementById('hasil');


    hasil.classList.remove('d-none');


    hasil.innerHTML = `

        <h5>Hasil Perhitungan</h5>

        <h2 class="fw-bold">
            ${cc.toFixed(2)} cc
        </h2>

        <hr>

        <p class="mb-0">

            Rumus:
            π/4 × bore² × stroke × jumlah silinder

        </p>

    `;
}

</script>

@endsection